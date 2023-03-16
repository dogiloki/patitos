# API para empresa de patitos de hule

Julio César VIllanueva Ontiveros - 1321124088<br>
Cesar Alejandro Camacho Nava - 1321124329<br>
Alcantar Chavez Rafael - 1321124234<br>

**URL principal**

[https://patitos-production.up.railway.app](https://patitos-production.up.railway.app)

**Peticiones HTTP a la API**
- Empleados
    - [GET](readme/employee/get.md)
    - [POST](readme/employee/post.md)
    - [PUT](readme/employee/put.md)
    - [DELETE](readme/employee/delete.md)

**Encabezado en la peticiones**

| Header key   | Valor               |
|--------------|---------------------|
| Content-Type | application/json    |

**Respuesta código**

| Código | Descripción                                                         |
|--------|---------------------------------------------------------------------|
| 200    | Consulta éxitosa (registro actualizado)                             |
| 201    | Registro almacenado con éxito                                       |
| 204    | Registro eliminado con éxito                                        |
| 404    | Recurso no encontrado (ruta o registro)                             |
| 500    | Error en el servidor, o error en consultas con restricción de datos |