<?php
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
  <script async src="{{asset('storage/library/bootstrap.min.js')}}"></script>
</head>

<body>
   <div class="container">
      <style>
         .container {
            background-color: #676FA3;
            width: auto;
            height: auto;
            box-sizing: border-box;
         }

         .btn-signup {      /untuk sign up button/
         padding: 8px 20px;
         background-color: #FF5959;
         margin-top: 20px;
         color:#FFFFFF;
         border:none;
         cursor:pointer;     /ngerubah bentuk kursor pas nyampe di tombol sign up/
}
      </style>
      
   <div class="container my-5">  
      <div class="card-body">
            <h2 class="card-title text-center">Let's create an account</h2>
         </div>
          <form action="/register" method="post">
      </div>
      <form>
         <!--
         <div class="dropdown row justify-content-center">
            <div class="col-3">
               <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">Select Role</button>
               <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Admin</a></li>
                  <li><a class="dropdown-item" href="#">Staff</a></li>
                  <li><a class="dropdown-item" href="#">User</a></li>
               </ul>
            </div>
         </div>
      -->
         
         <!--Username-->
         <div class="row justify-content-center">
            <div class="col-lg-3">
               <label for="Username" class="form-label">Username</label>
               <input type="text" class="form-control" name="username" placeholder="*Enter Your Username Here" id="username" />
               @error('username')
                  <div class ="invalid-feedback">
                     {{$message}}
                  </div>
                  
               @enderror   
            </div>
         </div>

         <!--Password-->
         <div class="row justify-content-center py-3" px="3">
            <div class="col-lg-3">
               <label for="Password" class="form-label">Password</label>
               <input type="password" class="form-control" name="password" placeholder="*Enter Your Password Here" id="password" />
            </div>
         </div>

         <!--Confirm Password-->
         <div class="row justify-content-center py-3" px="3">
            <div class="col-lg-3">
               <label for="ConfirmPassword" class="form-label">Confirm Password</label>
               <input type="password" class="form-control" name="confirmpassword" placeholder="*Confirm Your Password Here" id="confirmpassword" />
            </div>
         </div>
 
         <!--Text Forgot Password-->
         <div class="row justify-content-center">
            <div class="col-lg-3">
               <label for="ForgotPassword" class="form-label"><a href="# "style="color:#000000">Forgot Password</a></label>
            </div>

         <!--Button Sign Up-->
         <div class="row justify-content-center py-3">
          <div class="text-center col-10">
            <button type="submit" class="btn btn-signup">Sign Up</button>
         </div>
         </div>
      </form> 
      
    <div class="container mx-5"> 
      <div align="center">
         <small>Already have an account? <a href ="/sign-in" style="color:#000000">Sign in</a></small>
      </div>
    </div>

   </div>
</body>

</html>