<?php
$dataTableTemplate = function ($item) {
    return sprintf('
        <tr>
            <td>%s</td>
            <td>%s</td>
            <td>%s</td>
            <td>%s</td>
            <td>%s</td>
            <td>%s</td>
        </tr>
            ',
        $item->item_id, $item->item_name, $item->price, $item->item_type, $item->description, $item->flag);
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard item</title>
</head>
<body>
    <main>
        @if ($items->count())
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Item ID</th>
                                    <th>Item name</th>
                                    <th>Price</th>
                                    <th>Item type</th>
                                    <th>Description</th>
                                    <th>Flag</th>
                                </tr>
                            </thead>
                                <?php 
                                    foreach ($items as $item):
                                        echo $dataTableTemplate($item);
                                    endforeach; 
                                ?>
                        </table>
                    </div>
                </div>
            </div>
        @else
            <div class="text-center">
                <h1 class="h3 mb-4 text-gray-800">There is no item</h1>
                <a href="index.html">&larr; Add Item</a>
            </div>
        @endif
    </main>

    
</body>
</html>