# Описание ДЗ
## Запросы  

#### Считать данные из таблиц
```
select * from FOOD.Burgers;
select * from FOOD.Snacks;
select * from FOOD.Combo;
```
#### JOIN + WHERE для объединения 2-ух таблиц в одну (2 примера)
```
SELECT * FROM Combo
INNER JOIN Burgers where
Burgers.id = Combo.burger_id;

SELECT * FROM Combo
INNER JOIN Snacks where
Snacks.id = Combo.snack_id;
```
#### JOIN + WHERE + Сортировка для объединения 2-ух и 3-х таблиц в одну (3 примера)
```
SELECT * FROM Combo
INNER JOIN Burgers where
Burgers.id = Combo.burger_id
ORDER BY burger_id;

SELECT * FROM Combo
INNER JOIN Snacks where
Snacks.id = Combo.snack_id
ORDER BY snack_id;

SELECT * FROM Combo
INNER JOIN Snacks
JOIN Burgers where
Burgers.id = Combo.burger_id and
Snacks.id = Combo.snack_id
ORDER BY Combo.id;
```
## Описание таблиц БД

### Burgers

#### id
###### int - число, необходимое для обозначения ID элемента

#### name
###### varchar - текст, необходим для назначения имени элементу

#### price
###### int - цена, измеряется в целых числах

***

### Snacks

#### id
###### int - число, необходимое для обозначения ID элемента

#### name
###### varchar - текст, необходим для назначения имени элементу

#### price
###### int - цена, измеряется в целых числах

***

### Combo

#### id
###### int - число, необходимое для обозначения ID элемента

#### name
###### varchar - текст, необходим для назначения имени элементу

#### burger_id
###### int (FOREIGN_KEY) - число, необходимое для обозначения элемента, взятого из таблицы Burgers. Связан с элементом из таблицы Burgers через id.

#### snack_id
###### int (FOREIGN_KEY) - число, необходимое для обозначения элемента, взятого из таблицы Snacks. Связан с элементом из таблицы Snacks через id.

#### price
###### int - цена, измеряется в целых числах