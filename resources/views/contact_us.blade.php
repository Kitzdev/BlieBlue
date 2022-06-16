<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Blieblue - About Us</title>

    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('library/bootstrap.min.css')}}"/>
    <script async src="{{asset('storage/library/bootstrap.min.js')}}"></script>
    <!-- Google material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
</head>
<body>
<header>
    {{view('parts.header')}}

    <!-- banner -->
    <section id="banner-contact-us">
        <!-- hover breadcrumb color #232632 -->
        <div class="title-header container-fluid">
            <div class="justify-content-center">
                <h1 class="contact-us-heading text-center">CONTACT- US</h1>
                <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '>'; color: #F4F7F8;">
                    <ol class="breadcrumb justify-content-center mb-3 mt-3">
                        <li class="home-breadcrumb breadcrumb-item"><a href="/">Home</a></li>
                        <li aria-current="page" class="breadcrumb-item active"><strong>Contact Us</strong></li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
</header>

<!--description -->
<div class="row justify-content-center text-center py-5" px="5">
    <div class="col-md-6 ">
        <h3 class="tagline">Need help with problem or issues?</h3>
        <h3 class="tagline1">Contact our support team by form below!</h3>
    </div>
</div>

<!--form-->
<div class="container-fluid m-0 p-5 justify-content-center">
    <form class="row me-5 ms-5 g-2">
        <!-- <div class="me-3 ms-3 row g-3"> -->
        <div class="row justify-content-center text-center mx-0 py-5" px="5">
            <div class="col-md-5 ">
                <input aria-label="*Name" class="form-control" placeholder="*Name" type="text"/>
            </div>
            <div class="col-md-5">
                <input aria-label="Phone Number" class="form-control" placeholder="*Phone Number" type="text"/>
            </div>
            <div class="col-10">
                <input aria-label="*Email" class="form-control" placeholder="*Email" type="email"/>
            </div>
            <div class="col-10">
                <input aria-label="Subject" class="form-control" placeholder="*Subject" type="text"/>
            </div>
            <div class="col-10">
                <textarea aria-label="Messages" class="form-control" placeholder="*Messages" rows="10"
                          type="text"></textarea>
            </div>
            <div class="row justify-content-center text-center py-5" px="5">
                <div class="text-center col-12">
                    <button class="btn btn-primary submit-btn" type="submit">Submit</button>
                </div>
                <div class="col-12">
                    <!-- Library Google Maps -->
                    <script src="http://maps.googleapis.com/maps/api/js"></script>
                    <div class="container">
                        <!--maps-->
                        <div class="container-fluid m-0 p-5 justify-content-center"></div>
                        <div class="row embed-responsive justify-content-center text-center mx-0 py-5" px="5">
                            <h3 class="maps"><strong>LOCATION</strong></h3>
                            <div class="row embed-responsive justify-content-center text-center mx-0 py-5" px="5">
                                <iframe allowfullscreen=""
                                        height="750" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3503279433144!2d106.80125851413756!3d-6.217447762626463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f164a95e665d%3A0xc3c0973316bd0c5c!2sMOJA%20Museum!5e0!3m2!1sid!2sid!4v1648534592046!5m2!1sid!2sid"
                                        style="border:0;"
                                        width="500"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<footer>
    {{view('parts.footer')}}
</footer>
</body>
</html>
