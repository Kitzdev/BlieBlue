<?php
?>
<script src="{{asset('library/jquery-3.6.0.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('fontawesome-free/css/all.min.css')}}">

<div class="d-flex align-items-center justify-content-around bg-transparent flex-wrap header-container">
    <div class="d-flex navbar-brand align-items-center">
        <img src="{{asset('storage/images/header/header-logo.png')}}" alt="header-logo">
        <span class="d-inline"><span id="header_blieblue_text">BlieBlue</span> PetShop</span>
    </div>
    <div class="menu-hamburger d-lg-none d-xl-none" clicked="false">
        <img src="{{asset('storage/images/header/bars.svg')}}" width="25vw">
    </div>
    <div class="d-none d-lg-flex d-xl-flex navbar-brand justify-content-around flex-wrap me-5 navbar-anchor">
        <a href="/" class="fs-6 px-4">HOME</a>
        <a href="/about" class="fs-6  px-4">ABOUT US</a>
        <a href="/products" class="fs-6  px-4">PRODUCTS</a>
        <a href="/services" class="fs-6 px-4">SERVICES</a>
        <a href="/contact" class="fs-6 px-4">CONTACT US</a>
    </div>
    <div class="d-none d-lg-flex d-xl-flex navbar-brand justify-content-around flex-wrap me-5 navbar-anchor">
        <a class="" href="/cart"><i class="fa fa-shopping-cart font-size-30px"></i></a>
    </div>
    <div class="d-none d-lg-flex d-xl-flex navbar-brand justify-content-around flex-wrap navbar-social-media">
        <img src="{{asset('storage/images/header/bx_bxl-facebook.png')}}" alt="Facebook Logo" class="px-3">
        <img src="{{asset('storage/images/header/bx_bxl-instagram.png')}}" alt="Instagram Logo" class="px-3">
        <img src="{{asset('storage/images/header/bi_twitter.png')}}" alt="Twitter Logo" class="px-3">
        <img src="{{asset('storage/images/header/ci_mail.png')}}" alt="Email Logo" class="px-3">
    </div>
</div>

<script>
    $(function () {
        $('.menu-hamburger').on("click", function () {
            if ($('.menu-hamburger').attr('clicked') == "false") {
                $('.navbar-anchor').removeClass('d-none');
                $('.navbar-social-media').removeClass('d-none');
                $(this).attr('clicked', "true");
            } else {
                $('.navbar-anchor').addClass('d-none');
                $('.navbar-social-media').addClass('d-none');
                $(this).attr('clicked', "false");
            }
        })}
    );
</script>
