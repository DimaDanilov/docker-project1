# Домашнее задание 8
### База данных - пицца в пиццерии

| Переменная | Тип данных | Описание |
| ---------- |:----------:|:--------:|
| id         | `id`       | Идентификатор пиццы |
| pizzaName  | `string`   | Название пиццы (Сырная, Мясная, Пепперони...) |
| price      | `int`      | Цена пиццы |
| status     | `string`   | Статус пиицы (Продается, Убрана из продажи, Временно недоступна, Распродана)|

### Запросы POSTMAN

##### GET
```http://project-symfony.local:8081/api/v1/pizzas```

##### POST
```
{
    "pizzaName": "Cheese Pizza",
    "price": 200,
    "status": "On Sale"
}
```

##### DELETE
```http://project-symfony.local:8081/api/v1/pizzas/id```

##### UPDATE(PUT)
```http://project-symfony.local:8081/api/v1/pizzas/id```
```
{
    "pizzaName": "Mozarella Pizza",
    "price": 400,
    "status": "Off Sale"
}
```