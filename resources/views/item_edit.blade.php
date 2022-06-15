<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlieBlue Dashboard - Edit Item</title>

    <link rel="stylesheet" href="{{asset('library/bootstrap.min.css')}}">
</head>
<body>
    @if ($items->count())
        <?php $item = $items[0];
            $item_id = $item->item_id;
            $item_name = $item->item_name;
            $item_price = $item->price;
            $description = $item->description;
            $item_type = $item->item_type;
            $flag = $item->flag;
            $image_name = $item->image_name;
            $image_url = $item->image_url;
        ?>

        <div class="my-5 container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Edit Item</h2>
                        </div>
                        <div class="card-body">
                            <h5 class="mb-3">Item ID :{{$item_id}} </h5>
                            <form action="/dashboard/items/update/{{$item_id}}" method="post">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="item_name">Item Name</label>
                                    <input type="text" class="form-control" id="item_name" name="item_name" placeholder="Item Name" value="{{$item_name}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" id="price" name="price" placeholder="Price" value="{{$item_price}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="item_type">Item Type</label>
                                    <input type="text" class="form-control" id="item_type" name="item_type" placeholder="Item Type" value="{{$item_type}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="3">{{$description}}</textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="flag">Flag</label>
                                    <input type="text" class="form-control" id="flag" name="flag" placeholder="Flag" value="{{$flag}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="flag">Image name</label>
                                    <input type="text" class="form-control" id="image_name" name="image_name" placeholder="Image name" value="{{$image_name}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="flag">Image URL</label>
                                    <input type="text" class="form-control" id="image_url" name="image_url" placeholder="Image URL" value="{{$image_url}}">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="text-center my-5">
            <h1 class="h3 m-5 text-gray-800">Item not found</h1>
            <p class="lead text-gray-800 mb-1">Go back to item dashboard</p>
            <a class="btn btn-primary" href="/dashboard/items" role="button">Item Dashboard</a>
        </div>
    @endif
</body>
</html>