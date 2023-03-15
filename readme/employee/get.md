## Empleados GET

| Header key   | Valor               |
|------------------------------------|
| Content-Type | application/json    |

| Método  | URL                      | Descripción                                                                                      |
|------------------------------------|--------------------------------------------------------------------------------------------------|
| GET     | /api/employees/1?page=1  | Obtener información de uno o varios empleados. Si no se envía parametro obtiene de 10 en 10      |

**Parámetros JSON(opcionales) incluir solo un parámetro para la obtener la información del empleado(s)**
```json
{
  "id": 5,
  "name": "Belle",
  "surname": "West",
  "ns": "9431270948",
  "id_role": 22,
  "id_salary": 12,
  "created_at": "2023-03-15T17:08:31.000000Z",
  "updated_at": "2023-03-15T17:08:31.000000Z"
}
```

**Respuesta de un empleado**
```json
{
  "id": 5,
  "name": "Belle",
  "surname": "West",
  "ns": "9431270948",
  "id_role": 22,
  "id_salary": 12,
  "created_at": "2023-03-15T17:08:31.000000Z",
  "updated_at": "2023-03-15T17:08:31.000000Z"
}
```

**Respuesta de multiples empleados**
```json
{
  "current_page": 1,
  "data": [
    {
      "id": 2,
      "name": "Julio",
      "surname": "Mayer",
      "ns": "5596085963",
      "id_role": 2,
      "id_salary": 35,
      "created_at": "2023-03-15T17:08:31.000000Z",
      "updated_at": "2023-03-15T18:36:13.000000Z"
    },
    {
      "id": 3,
      "name": "Roderick",
      "surname": "Hills",
      "ns": "2858038946",
      "id_role": 35,
      "id_salary": 9,
      "created_at": "2023-03-15T17:08:31.000000Z",
      "updated_at": "2023-03-15T17:08:31.000000Z"
    }
  ],
  "first_page_url": "http://localhost:8000/api/employees?page=1",
  "from": 1,
  "last_page": 5,
  "last_page_url": "http://localhost:8000/api/employees?page=5",
  "links": [
    {
      "url": null,
      "label": "&laquo; Previous",
      "active": false
    },
    {
      "url": "http://localhost:8000/api/employees?page=1",
      "label": "1",
      "active": true
    },
    {
      "url": "http://localhost:8000/api/employees?page=2",
      "label": "2",
      "active": false
    },
    {
      "url": "http://localhost:8000/api/employees?page=3",
      "label": "3",
      "active": false
    },
    {
      "url": "http://localhost:8000/api/employees?page=2",
      "label": "Next &raquo;",
      "active": false
    }
  ],
  "next_page_url": "http://localhost:8000/api/employees?page=2",
  "path": "http://localhost:8000/api/employees",
  "per_page": 10,
  "prev_page_url": null,
  "to": 10,
  "total": 41
}
```