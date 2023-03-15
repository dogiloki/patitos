<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Employee;

class EmployeeController{

    public function show(Request $request, String $employee_id=null){
        try{
            if($employee_id!=null){
                $employee=Employee::find($employee_id);
                if($employee==null){
                    return response()->json(['error'=>'No se ha encontrado el empleado'],404);
                }
                return response()->json($employee,200);
            }
            $employees=[];
            $json=$request->json()->all();
            if(count($json)==0){
                return response()->json(Employee::paginate(10),200);
            }
            foreach($json as $key=>$value){
                $employee=Employee::where($key,$value)->get();
                if(count($employee)==0){
                    return response()->json(['error'=>'No se ha encontrado el empleado'],404);
                }
                $employees[]=count($employee)==1?$employee[0]:$employee;
            }
            return response()->json((
                (count($employees)==0 || $employees[0]==null)?null:(count($employees)==1?$employees[0]:$employees)
            ),200);
        }catch(\Exception $e){
            return response()->json(['error'=>'Error en el servidor'],500);
        }
    }

    public function store(Request $request){
        try{
            $validator=Validator::make($request->all(),[
                'name'=>['required','max:64'],
                'surname'=>['required','max:64'],
                'ns'=>['required','unique:employee','max:16'],
                'id_role'=>['required'],
                'id_salary'=>['required'],
            ]);
            if($validator->fails()){
                return response()->json($validator->errors(),400);
            }
            $employee=Employee::create($request->all());
            return response()->json($employee,201);
        }catch(\Exception $e){
            return response()->json(['error'=>'Error en el servidor'],500);
        }
    }

    public function update(Request $request, String $employee_id=null){
        try{
            $employee=Employee::find($employee_id);
            if($employee==null){
                return response()->json(['error'=>'No se ha encontrado el empleado'],404);
            }
            $validator=Validator::make($request->all(),[
                'name'=>['max:64'],
                'surname'=>['max:64'],
                'ns'=>['unique:employee','max:16'],
            ]);
            if($validator->fails()){
                return response()->json($validator->errors(),400);
            }
            $employee->update($request->all());
            return response()->json($employee, 200);
        }catch(\Exception $e){
            return response()->json(['error'=>'Error en el servidor'],500);
        }
    }

    public function delete(String $employee_id){
        try{
            $employee=Employee::find($employee_id);
            if($employee==null){
                return response()->json(['error'=>'No se ha encontrado el empleado'],404);
            }
            $employee->delete();
            return response()->json(null,204);
        }catch(\Exception $e){
            return response()->json(['error'=>'Error en el servidor'],500);
        }
    }

}
