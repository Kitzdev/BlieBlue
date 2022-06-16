<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blieblue - Home</title>

    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/landing-page-style.css')}}" />
    <link rel="stylesheet" href="{{asset('library/bootstrap.min.css')}}"/>
    <script async src="{{asset('library/bootstrap.min.js')}}"></script>
</head>
<body>
<header>
    {{view('parts.header')}}
</header>
<main>
    <div class="banner">
         <video style="width:100%;" autoplay>
            <source src="{{asset('storage/landing-page-images/video-landing-page.mp4')}}"" type="video/mp4">
            Your browser does not support the video tag.
            </video>
    </div>

    <div class="m-0 py-5 container-fluid" id="container1">
        <h1>Shop By Category</h1>

        <div class="row justify-content-center">
            <div class="col-sm-3 justify-content-center">
                <img src="{{asset('storage/landing-page-images/dogs-logo.png')}}" />
                <h2>For Dogs</h2>
            </div>
            <div class="col-sm-3 justify-content-center">
                <img src="{{asset('storage/landing-page-images/cats-logo.jpg')}}" />
                <h2>For Cats</h2>
            </div>
            <div class="col-sm-3 justify-content-center">
                <img src="{{asset('storage/landing-page-images/birds-logo.jpg')}}" />
                <h2>For Birds</h2>
            </div>
            <div class="col-sm-3 justify-content-center">
                <img src="{{asset('storage/landing-page-images/rabbit-logo.png')}}" />
                <h2>For Rabbits</h2>
            </div>
        </div>
    </div>

    <div class="m-0 container-fluid" id="container2">
        <h1>Popular Product</h1>

        <div class="row justify-content-center">
            <div class="col-lg-2">
                <img src="{{asset('storage/landing-page-images/dogs-food.jpeg')}}" />
            </div>
            <div class="col-8 align-items-center d-flex">
                <p>Pedigree Chicken, Egg and Milk Flavour Puppy Dry Food</p>
            </div>
            <div class="col-2 align-items-center d-flex p-0">
                <h2>$ 35</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-2">
                <img src="{{asset('storage/landing-page-images/whiskas-cat food.png')}}" />
            </div>
            <div class="col-8 align-items-center d-flex">
                <p>Delight your cat with the delicious meaty taste of WHISKAS. We have a whole range that taste great and contain all of the nutrients, vitamin, etc</p>
            </div>
            <div class="col-2 align-items-center d-flex">
                <h2>$ 100</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-2">
                <img src="{{asset('storage/landing-page-images/nature plan-bird food.png')}}" />
            </div>
            <div class="col-8 align-items-center d-flex">
                <p>Nature Plan uses Anavarza branded real honey powder specially produced by Sezen Gida in its products.</p>
            </div>
            <div class="col-2 align-items-center d-flex">
                <h2>$ 64</h2>
            </div>
        </div>
    </div>

    <div class="m-0 py-5 container-fluid" id="container3">
        <div class="row">
            <div class="col-md-4">
                <img src="{{asset('storage/landing-page-images/advertisement-1.png')}}" />
            </div>
            <div class="col-md-8 my-auto">
                <div>
                    <h1>BlieBlue, Home to Pet Supplies</h1>
                    <h5>We always provide the best pet supplies and food</h5>
                </div>
                <div>
                    <a href="/products"><button type="button" class="btn btn-light mx-5 my-3">Our Products</button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="m-0 container-fluid" id="container4">
        <h1>Best Services</h1>

        <div class="ps-3 row d-flex align-items-center justify-content-around">
            <div class="col-4">
                <img src="{{asset('storage/landing-page-images/pets gromming.png')}}" />
            </div>
            <div class="col-sm-5">
                <h2>Pet Grooming</h2>
                <p>Responsibilities can include washing and styling a pet's hair, brushing their teeth, trimming their nails, and delivering excellent customer service to pet owners.</p>
            </div>
        </div>

        <div class="ps-3 row d-flex align-items-center justify-content-around">
            <div class="col-4">
                <img src="{{asset('storage/landing-page-images/pets-care.jpeg')}}" />
            </div>
            <div class="col-sm-5">
                <h2>Pet Services</h2>
                <p>Veterinary care, ...</p>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5" id="container5">
        <div class="ps-3 row">
            <div class="col-8 my-auto">
                <div class="row">
                    <h1>Discover Everything You Need</h1>
                    <h5>Everything you need to welcome your best pet</h5>
                </div>
                <a href="/services"><button type="button" class="btn btn-light mx-5 my-3">Our Services</button></a>
            </div>

            <div class="col-4 d-flex  " id="container5-img">
                <img src="{{asset('storage/landing-page-images/advertisement-3.png')}}" class="img-fluid"   />
                <img src="{{asset('storage/landing-page-images/advertisement-2.png')}}" class="img-fluid"  />
            </div>
        </div>
    </div>

    <div class="container-fluid" id="container6">
        <div class="px-3">
            <h1>Today's Latest Offer</h1>
        </div>
        <div class="row justify-content-center mx-auto ">
            <div class="col-md-5 px-5">
                <img src="{{asset('storage/landing-page-images/offer-1.jpeg')}}" class="img-fluid" />
            </div>
            <div class="col-md-5 px-5 ">
                <img src="{{asset('storage/landing-page-images/offer-1.jpeg')}}" class="img-fluid" />
            </div>
        </div>
    </div>
</main>
<footer>
    {{view('parts.footer')}}
</footer>
</body>
</html>
