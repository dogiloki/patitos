## Empleados PUT

| Header key   | Valor               |
|------------------------------------|
| Content-Type | application/json    |

| Método  | URL                      | Descripción                                                                                      |
|------------------------------------|--------------------------------------------------------------------------------------------------|
| POST     | /api/employee/2         | Actualizar información del empleado                                                              |

**Parámetros JSON incluir los parámetros a actualizar**
```json
{
  "name": "Julio2",
  "surname": "Mayer",
  "ns": "5596085963",
  "id_role": 2,
  "id_salary": 35,
}
```
**Respuesta JSON**
```json
{
  "id": 2,
  "name": "Julio2",
  "surname": "Mayer",
  "ns": "5596085963",
  "id_role": 2,
  "id_salary": 35,
  "created_at": "2023-03-15T17:08:31.000000Z",
  "updated_at": "2023-03-15T20:02:33.000000Z"
}
```
