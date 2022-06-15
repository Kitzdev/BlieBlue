<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlieBlue Dashboard - Add Item</title>

    <link rel="stylesheet" href="{{asset('library/bootstrap.min.css')}}">
</head>
<body>
    <div class="my-5 container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Item</h3>
                    </div>
                    <div class="card-body">
                        <form action="/dashboard/items/add/submit" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="item_name">Item Name</label>
                                <input type="text" class="form-control" id="item_name" name="item_name" placeholder="Item Name">
                            </div>
                            <div class="form-group mb-3">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" id="price" name="price" placeholder="Price">
                            </div>
                            <div class="form-group mb-3">
                                <label for="item_type">Item Type</label>
                                <input type="text" class="form-control" id="item_type" name="item_type" placeholder="Item Type">
                            </div>
                            <div class="form-group mb-3">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="flag">Flag</label>
                                <input type="text" class="form-control" id="flag" name="flag" placeholder="Flag">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>