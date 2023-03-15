<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Enum;
use App\Models\Salary;
use App\Enums\SalaryCurrency;
use App\Enums\SalaryPeriod;

class SalaryController{
    
    public function show(Request $request, String $salary_id=null){
        try{
            if($salary_id!=null){
                $salary=Salary::find($salary_id);
                if($salary==null){
                    return response()->json(['error'=>'No se ha encontrado el salario'],404);
                }
                return response()->json($salary,200);
            }
            $salarys=[];
            $json=$request->json()->all();
            if(count($json)==0){
                return response()->json(Salary::paginate($request->paginate??10),200);
            }
            foreach($json as $key=>$value){
                $salary=Salary::where($key,$value)->get();
                if(count($salary)==0){
                    return response()->json(['error'=>'No se ha encontrado el salario'],404);
                }
                $salarys[]=count($salary)==1?$salary[0]:$salary;
            }
            return response()->json((
                (count($salarys)==0 || $salarys[0]==null)?null:(count($salarys)==1?$salarys[0]:$salarys)
            ),200);
        }catch(\Exception $e){
            return response()->json(['error'=>'Error en el servidor'],500);
        }
    }

    public function store(Request $request){
        try{
            $validator=Validator::make($request->all(),[
                'amount'=>['required'],
                'currency'=>['required'],
                'period'=>['required'],
            ]);
            if($validator->fails()){
                return response()->json($validator->errors(),400);
            }
            $salary=Salary::create($request->all());
            return response()->json($salary,201);
        }catch(\Exception $e){
            echo $e->getMessage();
            return response()->json(['error'=>'Error en el servidor'],500);
        }
    }

    public function update(Request $request, String $salary_id=null){
        try{
            $salary=Salary::find($salary_id);
            if($salary==null){
                return response()->json(['error'=>'No se ha encontrado el salario'],404);
            }
            $salary->update($request->all());
            return response()->json($salary, 200);
        }catch(\Exception $e){
            return response()->json(['error'=>'Error en el servidor'],500);
        }
    }

    public function delete(String $salary_id){
        try{
            $salary=Salary::find($salary_id);
            if($salary==null){
                return response()->json(['error'=>'No se ha encontrado el salario'],404);
            }
            $salary->delete();
            return response()->json(null,204);
        }catch(\Exception $e){
            return response()->json(['error'=>'Error en el servidor'],500);
        }
    }

}
