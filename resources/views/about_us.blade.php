<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blieblue - About Us</title>

    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/about-us-style.css')}}"/>
    <link rel="stylesheet" href="{{asset('library/bootstrap.min.css')}}"/>
    <script async src="{{asset('storage/library/bootstrap.min.js')}}"></script>
  </head>
  <body>
    <header>
      {{view('parts.header')}}

      <!-- banner -->
      <section id="banner" class="m-0">
          <div class="row text-center py-5">
            <h1>ABOUT US</h1>

            <nav aria-label="col breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="/about">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
              </ol>
            </nav>
          </div>
        </section>
    </header>
    <main>
      <!-- body container used as content padding -->
      <div class="container-fluid m-0 main-box p-5 bg-light justify-content-center">

        <!-- get to know us -->
        <section id="get-to-know-us">
          <div class="row justify-content-center text-center py-5">
            <div class="col-md-8">
              <h1 class="section-title text-center">Get to Know Us</h1>
              <p>BlieBlue PetShop gives pet services for dog, cat, bird, and rabbit. We also provides products to support your pet treatment experience.</p>
            </div>
          </div>
        </section>

        <!-- our products -->
        <section id="product">
          <div class="row justify-content-center text-center py-5">
            <div class="col-md-8">
              <h1 class="section-title text-center">Our Products</h1>
              <p>We passionate to provide the best product for your pets</p>
            </div>
          </div>

        <!-- product cards -->
          <div class="row justify-content-center">
            <div class="col-md-4">
              <div class="card my-4 mx-2">
                <div class="img-box">
                  <img src="{{asset('storage/about-us-images/whiskas.png')}}" class="card-img-top transparent-bg-img" alt="..." />
                </div>
                <div class="card-body mx-2 mb-2">
                  <h5 class="card-title">Pet Food</h5>
                  <p class="card-text">Multiple choices of food for your dogs and cats</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card my-4 mx-2">
                <div class="img-box">
                  <img src="{{asset('storage/about-us-images/food-dispenser.jpg')}}" class="card-img-top" alt="..." />
                </div>
                <div class="card-body mx-2 mb-2">
                  <h5 class="card-title">Support Tools</h5>
                  <p class="card-text">Useful tools to support your pet treatment</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card my-4 mx-2">
                <div class="img-box">
                  <img src="{{asset('storage/about-us-images/cat-blanket.jpg')}}" class="card-img-top" alt="..." />
                </div>
                <div class="card-body mx-2 mb-2">
                  <h5 class="card-title">Pet Accessories</h5>
                  <p class="card-text">Variates of additional accessories for your pets</p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- link to product page -->
        <div class="d-flex align-items-end flex-column pg-link">
          <a href="products.blade.php" class="text-decoration-none">
            <p>Check out our Products</p>
            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#FF5959"><g><rect fill="none" height="24" width="24"/></g><g><g><polygon points="6.41,6 5,7.41 9.58,12 5,16.59 6.41,18 12.41,12"/><polygon points="13,6 11.59,7.41 16.17,12 11.59,16.59 13,18 19,12"/></g></g></svg>
          </a>
        </div>

        <!-- our services -->
        <section id="service">
          <div class="row justify-content-center text-center py-5">
            <div class="col-md-8">
              <h1 class="section-title text-center">Our Services</h1>
            </div>
          </div>


        <!-- services -->
          <div class="row service-item mx-0 justify-content-start">
            <div class="col-md-6 service-img text-center">
              <img src="{{asset('storage/about-us-images/pet-taking-bath.png')}}" alt="Pet Taking Bath" />
            </div>
            <div class="col-md-4 align-self-center">
              <h3>Grooming</h3>
              <p>Responsibilities can include washing and styling a pet's hair, brushing their teeth, trimming their nails, and delivering excellent customer service to pet owners.</p>
            </div>
          </div>
          <div class="row service-item my-5 mx-0 justify-content-end">
            <div class="col-md-4 align-self-center desc-start">
              <h3>Pet Training</h3>
              <p>We train your pet with various approaches with our proffesional pet trainer</p>
            </div>
            <div class="col-md-6 service-img text-center swappped-img">
              <img src="{{asset('storage/about-us-images/dog-jumping.png')}}" alt="Dog Jumping" />
            </div>
          </div>
          <div class="row service-item mt-5 mx-0 justify-content-start">
            <div class="col-md-6 service-img text-center">
              <img src="{{asset('storage/about-us-images/pet-hotel.jpg')}}" alt="Pet Hotel" />
            </div>
            <div class="col-md-4 align-self-center">
              <h3>Pet Hotel</h3>
              <p>Our pet care specialists can take care of your pets while you’re away</p>
            </div>
          </div>
        </section>


        <!-- link to service page -->
        <div class="d-flex align-items-end flex-column pg-link">
          <a href="services.blade.php" class="text-decoration-none">
            <p>Check out our Services</p>
            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#FF5959"><g><rect fill="none" height="24" width="24"/></g><g><g><polygon points="6.41,6 5,7.41 9.58,12 5,16.59 6.41,18 12.41,12"/><polygon points="13,6 11.59,7.41 16.17,12 11.59,16.59 13,18 19,12"/></g></g></svg>
          </a>
        </div>

        <!-- our journey -->
        <section id="journey">
          <div class="row justify-content-center text-center mx-0 py-5">
            <div class="col-md-8">
              <h1 class="section-title text-center">Our Journey</h1>
            </div>
          </div>
          <div class="col-md-9 mx-auto">
            <div class="row my-5 justify-content-start">
              <h2>2022</h2>
              <div class="row journey-item rounded-3">
                <div class="col-md-10 mx-auto px-3 py-5">
                  <h3>EXPANSION</h3>
                  <h5>We achieved 1000+ customers and opening our first branch</h5>
                </div>
              </div>
            </div>
            <div class="row my-5">
              <h2>2021</h2>
              <div class="row journey-item rounded-3">
                <div class="col-md-10 mx-auto px-3 py-5">
                  <h3>PRODUCTS ADDITION</h3>
                  <h5>We expand our service by providing support tool, pet food, pet accessory and pet care item.</h5>
                </div>
              </div>
            </div>
            <div class="row my-5">
              <h2>2020</h2>
              <div class="row journey-item rounded-3">
                <div class="col-md-10 mx-auto px-3 py-5">
                  <h3>OPENING</h3>
                  <h5>BlieBlue PetShop opening as a veterinary service provider including grooming, pet training, and pet hotels</h5>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- our gallery -->
        <section id="gallery">
          <div class="row justify-content-center text-center mx-0 py-5">
            <div class="col-md-8">
              <h1 class="section-title text-center">Our Gallery</h1>
            </div>
          </div>

          <div id="petImageCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#petImageCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#petImageCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#petImageCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('storage/about-us-images/corgi.jpg')}}" class="d-block" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('storage/about-us-images/white-cat.jpg')}}" class="d-block" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('storage/about-us-images/golden-retriever.jpg')}}" class="d-block" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#petImageCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#petImageCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </section>

        <!-- our team -->
        <section id="team">
          <div class="row justify-content-center py-5 m-5">
            <div class="col-lg-4 align-self-center text-center">
              <h1 class="section-title text-center">Our Team</h1>
            </div>

            <!-- team cards -->
            <div class="col-lg-4">
              <div class="card px-5 m-3 pt-3 pb-1">
                <h4>Erick Julvan</h4>
                <p>32200036</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card px-5 m-3 pt-3 pb-1">
                <h4>Vannes Cristian</h4>
                <p>32200037</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card px-5 m-3 pt-3 pb-1">
                <h4>Kitbert</h4>
                <p>32200038</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card px-5 m-3 pt-3 pb-1">
                <h4>Eric Wiyanto</h4>
                <p>32200039</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card px-5 m-3 pt-3 pb-1">
                <h4>Janice Claresta Lingga</h4>
                <p>32200041</p>
              </div>
            </div>
          </div>
        </section>
      </div>
    </main>
    <footer>
      {{view('parts.footer')}}
    </footer>
  </body>
</html>
