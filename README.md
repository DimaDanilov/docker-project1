## Домашнее задание 4

### Запросы


```db.burgers.save({ burger_name: "Big Tasty", weight:"150", price: "250" })

db.burgers.save({ burger_name: "Big Royal", weight:"250", price: "300" })

db.burgers.updateOne({_id: ObjectId('60a022bfc599da9953e33b27')},{$set:{weight:"78"}})

db.burgers.insertMany([{ burger_name: "Big Mac", weight:"50", price: "150" },{ burger_name: "Cheeseburger", weight:"25", price: "150" }])

db.burgers.deleteOne({_id: ObjectId('60a022bfc599da9953e33b27')})

db.burgers.find({ burger_name: "Big Tasty" })

db.burgers.find({ })
```