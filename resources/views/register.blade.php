<?php

use App\Models\User;

$roles = User::ROLE;
?>

    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlieBlue - Register</title>

    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('library/bootstrap.min.css')}}"/>
    <script src="{{asset('library/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('library/bootstrap.bundle.min.js')}}"></script>
</head>
<style>
    .container {
        background-color: #676FA3;
        width: auto;
        height: auto;
        box-sizing: border-box;
    }

    .btn-signup {
        padding: 8px 20px;
        background-color: #FF5959;
        margin-top: 20px;
        color: #FFFFFF;
        border: none;
        cursor: pointer;
    }
</style>
<body>
<div class="container">
    <div class="container my-5">
        <div class="card-body">
            <h2 class="card-title text-center">Let's create an account</h2>
        </div>
    </div>
    <form action="/register" method="post">
        @csrf
        <!--Fullname-->
        <div class="row justify-content-center">
            <div class="col-lg-3">
                <label for="user_fullname" class="form-label">Fullname</label>
                <input type="text" class="form-control" name="user_fullname" @error ('username') is-invalid
                       @enderror placeholder="*Enter Your Username Here" id="user_fullname"/>
            </div>
        </div>


        <!--Username-->
        <div class="row justify-content-center">
            <div class="col-lg-3">
                <label for="user_name" class="form-label">Username</label>
                <input type="text" class="form-control" name="user_name" @error ('username') is-invalid
                       @enderror placeholder="*Enter Your Username Here" id="user_name"/>
            </div>
        </div>

        <!--Password-->
        <div class="row justify-content-center py-3" px="3">
            <div class="col-lg-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="*Enter Your Password Here"
                       id="password"/>
            </div>
        </div>

        <!--Confirm Password-->
        <div class="row justify-content-center py-3" px="3">
            <div class="col-lg-3">
                <label for="ConfirmPassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="confirmpassword"
                       placeholder="*Confirm Your Password Here" id="confirmpassword"/>
            </div>
        </div>

        <div class="row justify-content-center py-3 dropend" px="3">
            <div class="col-lg-3">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2"
                        data-bs-toggle="dropdown" aria-expanded="false">
                    Role
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    @foreach($roles as $role)
                        <li>
                            <button class="dropdown-item" type="button">{{$role}}</button>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="row justify-content-center py-3"  px="3">
            <div class="col-lg-3">
                <label for="user_role">User Role</label>
                <input type="text" class="form-control" id="user_role" name="user_role"
                       placeholder="Select role with above dropdown" readonly>
            </div>
        </div>

        <!--Text Forgot Password-->
        <div class="row justify-content-center">
            <div class="col-lg-3">
                <label for="ForgotPassword" class="form-label">
                    <a href="#" style="color:#000000">Forgot Password</a>
                </label>
            </div>

            <!--Button Sign Up-->
            <div class="row justify-content-center py-3">
                <div class="text-center col-10">
                    <button type="submit" class="btn btn-signup">Sign Up</button>
                </div>
            </div>
        </div>
    </form>

    <div class="container mx-5">
        <div align="center">
            <small>Already have an account? <a href="/sign-in" style="color:#000000">Sign in</a></small>
        </div>
    </div>

</div>
</body>

</html>

<script>
    $(function () {
        $('.dropdown-item').on('click', function () {
            $('#user_role').val($(this).text());
        });
    });
</script>
