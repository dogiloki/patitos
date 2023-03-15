# API para empresa de patitos de hule

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
|------------------------------------|
| Content-Type | application/json    |

**Respuesta código**

| Código | Descripción                                                         |
|--------|---------------------------------------------------------------------|
| 200    | Consulta éxitosa (registro actualizado)                             |
| 201    | Registro almacenado con éxito                                       |
| 204    | Registro eliminado con éxito                                        |
| 404    | Recurso no encontrado (ruta o registro)                             |
| 500    | Error en el servidor, o error en consultas con restricción de datos |