## Salarios GET

Obtener información de uno o varios salarios. Si no se envía parametro obtiene de 10 en 10 
`/api/salaries/1?page=1`

**Parámetros JSON(opcionales) incluir solo un parámetro para la obtener la información del salario(s)**
```json
{
  "amount": 1000,
  "currency": "MNX",
  "period": "semanal",
  "created_at": "2023-03-15T17:08:31.000000Z",
  "updated_at": "2023-03-15T17:08:31.000000Z"
}
```

**Respuesta de un salario**
```json
{
  "id": 5,
  "amount": 1000,
  "currency": "MNX",
  "period": "semanal",
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
      "id": 5,
      "amount": 1000,
      "currency": "MNX",
      "period": "semanal",
      "created_at": "2023-03-15T17:08:31.000000Z",
      "updated_at": "2023-03-15T17:08:31.000000Z"
    },
    {
      "id": 6,
      "amount": 2000,
      "currency": "MNX",
      "period": "quincenal",
      "created_at": "2023-03-15T17:08:31.000000Z",
      "updated_at": "2023-03-15T17:08:31.000000Z"
    }
  ],
  "first_page_url": "http://localhost:8000/api/salaries?page=1",
  "from": 1,
  "last_page": 5,
  "last_page_url": "http://localhost:8000/api/salaries?page=5",
  "links": [
    {
      "url": null,
      "label": "&laquo; Previous",
      "active": false
    },
    {
      "url": "http://localhost:8000/api/salaries?page=1",
      "label": "1",
      "active": true
    },
    {
      "url": "http://localhost:8000/api/salaries?page=2",
      "label": "2",
      "active": false
    },
    {
      "url": "http://localhost:8000/api/salaries?page=3",
      "label": "3",
      "active": false
    },
    {
      "url": "http://localhost:8000/api/salaries?page=2",
      "label": "Next &raquo;",
      "active": false
    }
  ],
  "next_page_url": "http://localhost:8000/api/salaries?page=2",
  "path": "http://localhost:8000/api/salaries",
  "per_page": 10,
  "prev_page_url": null,
  "to": 10,
  "total": 41
}
```
