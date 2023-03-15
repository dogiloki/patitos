## Empleados POST

| Header key   | Valor               |
|------------------------------------|
| Content-Type | application/json    |

| Método  | URL                      | Descripción                                                                                      |
|------------------------------------|--------------------------------------------------------------------------------------------------|
| POST     | /api/employee           | Registrar empleado                                                                               |

**Parámetros JSON**
```json
{
  "name": "Julio",
  "surname": "Villanueva",
  "ns": "123456789",
  "id_role": 22,
  "id_salary": 12
}
```
**Respuesta JSON**
```json
{
  "name": "Julio",
  "surname": "Villanueva",
  "ns": "123456789",
  "id_role": 22,
  "id_salary": 12,
  "updated_at": "2023-03-15T19:54:09.000000Z",
  "created_at": "2023-03-15T19:54:09.000000Z",
  "id": 45
}
```
