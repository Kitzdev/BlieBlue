<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>BlieBlue - Services</title>
    <link href="../../public/style.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="../../public/storage/library/bootstrap.min.css" rel="stylesheet">
    <!-- JQuery -->
    <script src="../../public/storage/library/jquery-3.6.0.min.js"></script>
    <!-- Google material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <style type="text/css">

        .style1 {
            color: #FFFFFF
        }

        .style2 {
            font-family: "Comic Sans MS"
        }
    </style>
</head>
<body>

<!-- Header loaded from assets/parts/header.html -->
<header>
    <script src="../../public/storage/parts/header.js"></script>
</header>


<div class="container-fluid row text-center py-3" id="banner">
    <h1 class="accordion-body  style2"> S E R V I C E S </h1>
    <nav aria-label="breadcrumb " style="--bs-breadcrumb-divider: '>';">
        <ol class="breadcrumb justify-content-center  ">
            <li class="breadcrumb-item "><a class="style1" href="landing_page.blade.php">Home</a></li>
            <li aria-current="page" class="breadcrumb-item active text-white">Services</li>
        </ol>
    </nav>
</div>


<div class="container-fluid text-center mt-5 mb-5">
    <h1 class="accordion-header style2"> Let's try our pet services </h1>

</div>

<div class=" container-fluid  text-center ">
    <button class="btn btn-lg btn-block text-white mt-3  "
            style="background-color:#7070B8; margin-right:50px;height:70px; width:120px;"
            type="button">Dog & Cat Training
    </button>

    <button class="btn btn-lg btn-block text-white mt-3 " style="background-color:#7070B8; margin-right:50px; height:70px; width:120px;"
            type="button">Pet Hotel
    </button>
	   <button class="btn btn-lg btn-block text-white mt-3 " style="background-color:#7070B8; margin-right:50px; height:70px; width:120px;"
            type="button">Dog Stud & Mate
    </button>

    <button class="btn btn-lg btn-block text-white mt-3 " style="background-color:#7070B8;   height:70px; width:120px;"
            type="button">Pet Delivery
    </button>

</div>


<div class=" container-fluid  text-center ">
    <button class="btn btn-lg btn-block text-white mt-5 " style="background-color:#7070B8; margin-right:50px; height:70px; width:120px;"
            type="button">Pet Care
    </button>

    <button class="btn btn-lg btn-block text-white mt-5 " style="background-color:#7070B8; margin-right:50px; height:70px; width:120px;"
            type="button">Air Purifier
    </button>

	    <button class="btn btn-lg btn-block text-white mt-5 "
            style="background-color:#7070B8; margin-right:50px; height:70px; width:120px;"
            type="button">Home Cleaning
    </button>
    <button class="btn btn-lg btn-block text-white mt-5 " style="background-color:#7070B8; height:70px; width:120px;"
            type="button">Pet Grooming
    </button>
</div>



<div class=" container-fluid  text-center ">
    <button class="btn btn-sm text-white mt-5 mb-5 "
            type="button"><img height="22" src="assets/Service Images/download (1).jpg" width="29"></button>
</div>

<img class="float-start" src="assets/Service Images/images.jpg">
<img class="float-end" src="assets/Service Images/service image.jpg">

<footer>
    <script src="../../public/storage/parts/footer.js"></script>
</footer>
<script src="../../public/storage/library/bootstrap.min.js"></script>
<script src="../../public/storage/library/jquery-3.6.0.min.js"></script>
</body>
</html>
