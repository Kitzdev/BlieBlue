<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blieblue - About Us</title>

    <link rel="stylesheet" href="{{asset('style.css')}}"/>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('storage/library/bootstrap.min.css')}}"/>
    <script async src="{{asset('storage/library/bootstrap.min.js')}}"></script>
    <!-- Google material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
</head>
<body>
    <!-- Header loaded from assets/parts/header.html -->
    <header>
        {{view('parts.header')}}
    </header>
    <footer>
        <!-- Footer loaded from assets/parts/footer.blade.php -->
        {{view('parts.footer')}}
    </footer>
</body>
</html>
