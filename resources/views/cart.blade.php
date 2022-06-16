<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart Items</title>

  <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
  <link rel="stylesheet" href="{{asset('library/bootstrap.min.css')}}"/>
  <script async src="{{asset('storage/library/bootstrap.min.js')}}"></script>
</head>

<style>
  #base {
    background-color: #F4F7F8;
    overflow-y: hidden;
    height: 500px !important;
  }

  .cart-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
  }

  #item-base {
      background-color: #F4F7F8;
  }

  .cart-link {
      text-decoration: none;
  }

  #base-2 {
      overflow-y: scroll;
      object-fit: contain;
      
  }

  .button-primary {
      background-color: #FF5959;
      color: white;
  }

  .button-secondary {
      background-color: #EEF2FF;
  }

  .button-primary, .button-secondary, #base {
      box-shadow: 0px 0.68px 1.36px 0px rgba(0,0,0,0.3);
  }
</style>

<body>
  <main class="container-md mx-auto p-5">
    <div class="container-md">
      
      <!-- title -->
      <div class="justify-content-center row my-3">
        <div class="justify-content-start col-md-12 d-inline-flex align-items-center">
          <a class="cart-link button-secondary rounded-circle btn me-3" href="products" role="button"><</a>
          <h1>Cart Items</h1>
        </div>
      </div>
      
      <!-- base -->
      <div class="col-xl-12">
        <div class="row rounded border overflow-hidden" id="base">
          <div class="col-xl-9 bg-white rounded overflow-hidden" id="base-2">
            
            <!-- item list base (repeatable) -->
            <div class="row row-cols-1 justify-content-center my-4">
              <div class="col-sm-12 overflow-hidden w-75 card" id="item-base">

                <!-- item details row-->
                <div class="row p-3">
                  
                  <!-- img -->
                  <div class="col-lg-3">
                    <img class="rounded cart-img" src="{{asset('storage/about-us-images/cat-blanket.jpg')}}" alt="">
                  </div>

                  <!-- desc -->
                  <div class="col-lg-5 p-3">
                    <div class="row">
                      <div class="col-md-12">
                        <p>Cat Sweater</p>
                      </div>
                    </div>
  
                    <div class="row">
                      <div class="col-12">
                        <p>Rating</p>
                      </div>
                    </div>
  
                    <div class="row">
                      <div class="col-12">
                        <h5>$5</h5>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 d-flex align-self-end">
                    <button type="button" class="mx-2  btn button-secondary">-</button>
                    <span class="mx-2 align-self-center">1</span>
                    <button type="button" class="mx-2  btn button-secondary">+</button>
                  </div>
  
                  <div class="col-lg-1 d-flex justify-content-end">
                    <a href="/cart/items/delete/{items_id}" class="cart-link link-danger">Remove</a>
                  </div>
              </div>
            </div>
  
          </div>
          
        </div>

        <!-- payment details -->
        <div class="col-xl-3 p-5 rounded-end">
          <div class="row">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <div class="row justify-content-between">
                    <div class="col-6">
                      <p>Subtotal</p>
                    </div>
                    <div class="col-6">
                      <p class="text-end">15</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="row justify-content-between">
                    <div class="col-6">
                      <p>Tax</p>
                    </div>
                    <div class="col-6">
                      <p class="text-end">1.65</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="row justify-content-between">
                    <div class="col-6">
                      <p>Shipment</p>
                    </div>
                    <div class="col-6">
                      <p class="text-end">15</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="row justify-content-between">
              <div class="col-6">
                <h4>Total</h4>
              </div>
              <div class="col-6">
                <h4 class="text-end">31.65</h4>
              </div>
            </div>
          </div>
  
          <div class="col-12">
            <div class="row my-2">
              <div class="card col-6 p-0">
                <button type="button" class="btn btn-light">Master</button>
              </div>
              <div class="card col-6 p-0">
                <button type="button" class="btn btn-light">PayPal</button>
              </div>
            </div>
            <div class="row">
              <input type="text" class="form-control" placeholder="Address" aria-label="Address" aria-describedby="basic-addon1">
            </div>
          </div>
  
        </div>
  
      </div>

    </div>
      

    <div class="container justify-content-end my-3">
      <div class="row justify-content-end">
        <div class="col-2">
          <form action="" method="get">
            <button type="button" class="btn button-primary px-4" >Checkout</button>
          </form>
        </div>
      </div>
    </div>
  </main>
  <footer>
    {{view('parts.footer')}}
  </footer>
</body>
</html>