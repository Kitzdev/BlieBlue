<?php
/**
 * @var $bestForYourPet
 * @var $ourFavourite
 * @var $petFood
 */

$starImage = asset('storage/images/products/—Pngtree—vector complex star icon_4183954.png');
$starElement = str_repeat("<img alt=\"star\" src=\"$starImage\" width=\"15px\">", 5);

?>
<head>
    <meta charset="UTF-8"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Blieblue - About Us</title>

    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('library/bootstrap.min.css')}}"/>
    <script async src="{{asset('library/bootstrap.min.js')}}"></script>

    <!-- Google material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
</head>

<body>
<!-- Header loaded from assets/parts/header.html -->
<header>
    {{view('parts.header')}}
</header>
<main>
    <div class="container-fluid product-banner">
        <p>PRODUCTS</p>
        <div class="breadcrumb-container">
            <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '>';">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li aria-current="page" class="breadcrumb-item active">Products</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="best-product">
        <h2>
            Best for your pet
        </h2>
        <div class="best-product-card-container">

            @foreach($bestForYourPet as $product)
                <div class="best-product-card">
                    <div class="best-product-card-information">
                        <img alt="{{$product->item_name}}" src="{{asset($product->image_path)}}"">
                        <div class="card-body">
                            <p class="card-title">{{$product->item_name}}</p>
                            <div class="star-container"></div><?php echo $starElement; ?>
                            <p class="card-price">$ • {{$product->price}}</p>
                            <p class="card-text">{{$product->description}}</p>
                            <a class="btn" href="cart">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="our-favourite">
            <h2>
                Our's Favourite
            </h2>
            <div class="our-favourite-card-container">
                @foreach($ourFavourite as $product)
                    <div class="our-favourite-card">
                        <img alt="{{$product->item_name}}" height="211px" src="{{asset($product->image_path)}}" width="288px">
                        <div class="card-body">
                            <p class="card-title">{{$product->item_name}}</p>
                            <p class="card-text">{{$product->description}}</p>
                            <a class="btn" href="cart">ADD TO CART</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="pet-food">
            <h2>
                Pet Food
            </h2>
            <div class="pet-food-container">
                @foreach($petFood as $product)
                    <div class="pet-food-card">
                        <div class="image-wrapper" style="background: rgba(176, 36, 133, 0.15);">
                            <img alt="{{$product->item_name}}" src="{{asset($product->image_path)}}" width="150px">
                        </div>
                        <p>{{$product->description}}</p>
                        <p>$ • {{$product->price}}</p>
                    </div>
                @endforeach;
            </div>
        </div>
    </div>

</main>
<footer>
    {{view('parts.footer')}}
</footer>
</body>
