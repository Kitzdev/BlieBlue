<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard item</title>
</head>
<body>
    <!-- Show all items passed ( may contain only one item (search row) ) -->
    @if ($items->count())
        @foreach($items as $item)
            <h1>{{$item["item_id"]}}</h1>
            <h1>{{$item["item_name"]}}</h1>
            <h1>{{$item["price"]}}</h1>
            <h1>{{$item["item_type"]}}</h1>
            <h1>{{$item["description"]}}</h1>
            <h1>{{$item["flag"]}}</h1>
        @endforeach
    @endif    
</body>
</html>