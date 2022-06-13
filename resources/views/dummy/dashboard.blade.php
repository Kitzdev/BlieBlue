<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ini dashboard</h1>
    <a href="dashboard/items">See item list</a>
    <a href="dashboard/items/1">See item 1</a>
    
    <form action="/dashboard/items/add" method="post">
        @csrf
        <label for="item_id">Item ID</label>
        <input type="text" name="item_name" placeholder="item_id">
        <label for="item_name">Item name</label>
        <input type="text" name="item_name" placeholder="item_name">
        <label for="item_name">Price</label>
        <input type="text" name="price" placeholder="price">
        <label for="item_name">Item type</label>
        <input type="text" name="item_type" placeholder="item_type">
        <label for="item_name">Item description</label>
        <input type="text" name="description" placeholder="description">
        <label for="item_name">Flag</label>
        <input type="text" name="flag" placeholder="flag">
        
        <input type="submit" value="Add item">
    </form>

    <form action="/dashboard/items/{item_id}/update" method="post">
        @csrf
        <label for="item_id">Item ID</label>
        <input type="text" name="item_name" placeholder="item_id">
        <label for="item_name">Item name</label>
        <input type="text" name="item_name" placeholder="item_name">
        <label for="item_name">Price</label>
        <input type="text" name="price" placeholder="price">
        <label for="item_name">Item type</label>
        <input type="text" name="item_type" placeholder="item_type">
        <label for="item_name">Item description</label>
        <input type="text" name="description" placeholder="description">
        <label for="item_name">Flag</label>
        <input type="text" name="flag" placeholder="flag">

        <input type="submit" value="Update">
    </form>

    <form action="/dashboard/items/{item_id}/delete" method="post">
        @csrf
        <input type="text" name="item_id" placeholder="item_id">
        <input type="submit" value="Delete">
    </form>
</body>
</html>