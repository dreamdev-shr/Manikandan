<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
    <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }

        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }

        .b-example-divider {
          width: 100%;
          height: 3rem;
          background-color: rgba(0, 0, 0, .1);
          border: solid rgba(0, 0, 0, .15);
          border-width: 1px 0;
          box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
          flex-shrink: 0;
          width: 1.5rem;
          height: 100vh;
        }

        .bi {
          vertical-align: -.125em;
          fill: currentColor;
        }

        .nav-scroller {
          position: relative;
          z-index: 2;
          height: 2.75rem;
          overflow-y: hidden;
        }

        .nav-scroller .nav {
          display: flex;
          flex-wrap: nowrap;
          padding-bottom: 1rem;
          margin-top: -1px;
          overflow-x: auto;
          text-align: center;
          white-space: nowrap;
          -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
          --bd-violet-bg: #712cf9;
          --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

          --bs-btn-font-weight: 600;
          --bs-btn-color: var(--bs-white);
          --bs-btn-bg: var(--bd-violet-bg);
          --bs-btn-border-color: var(--bd-violet-bg);
          --bs-btn-hover-color: var(--bs-white);
          --bs-btn-hover-bg: #6528e0;
          --bs-btn-hover-border-color: #6528e0;
          --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
          --bs-btn-active-color: var(--bs-btn-hover-color);
          --bs-btn-active-bg: #5a23c8;
          --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
          z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
          display: block !important;
        }



      </style>

</head>

<body >

    {{-- <div class="p-3 mb-2 bg-primary"> --}}
    <nav class="navbar navbar-expand-lg  bg-black" aria-label="Thirteenth navbar example">
        <div class="container-fluid bg-black">
          <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
          </button>

          <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
            <img src={{asset('image/logo8.jpg')}} style="width:100px;height:25%">
            <ul class="navbar-nav col-lg-12 justify-content-lg-center">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="#"><strong>Home</strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page"><strong>Live Score</strong></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle text-white " href="#" data-bs-toggle="dropdown" aria-expanded="false"><strong>Teams</strong></a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#"><strong>India</strong></a></li>
                  <li><a class="dropdown-item" href="#"><strong>Australia</strong></a></li>
                  <li><a class="dropdown-item" href="#"><strong>South Africa</strong></a></li>
                  <li><a class="dropdown-item" href="#"><strong>Pakistan</strong></a></li>
                  <li><a class="dropdown-item" href="#"><strong>New Zealand</strong></a></li>

                </ul>
              </li>
            </ul>


          </div>

          <div class="d-flex" >

            <label class="text-white " style="margin-right: 5px; margin-top:8px;"><strong>Search</strong></label>
            <input type="email" class="form-control border-dark " id="exampleFormControlInput1" >
          </div>

            <div class="d-lg-flex col-lg-3 justify-content-lg-end">
              <img src="{{asset('image/logo4.jpg')}}" style="width:30% ;height:80px;">
            </div>
          </div>

    </nav>

{{-- navbar --}}

<div class="col-12">

    {{-- CAROSEL --}}

    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner ">
          <div class="carousel-item active" >
            <img src="{{asset('image/carosel1.webp')}}" class="carouselphoto" id='caro1'>
            <div class="container">
              <div class="carousel-caption text-start">



              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('image/carosel2.jpg')}}"  class="carouselphoto" id='caro2' >
            <div class="container">
              <div class="carousel-caption">

              </div>
            </div>
          </div>
          <div class="carousel-item">
          <img src="{{asset('image/carosel3.jpg')}}" class="carouselphoto" id='caro3' >
            <div class="container">
              <div class="carousel-caption text-end">

              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: black;"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: black;"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    </div>
    {{-- CAROSEL --}}


{{-- MODAL --}}
<!-- Button trigger modal -->
<div class=" d-flex justify-content-center">
    <div class="modalcenter d-flex justify-content-center">
        <div class="d-flex justify-content-center">
    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Cricket facts
        <img src="{{asset('image/lightbulb.png')}}" class='lightbulb'>
    </button>
    </div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">fact 1</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          1.Cricket is the second most popular sport in the world<br>
          2.Sachin Tendulkar played for Pakistan once!<br>
          3.111 is considered to be an unlucky score<br>
          4.Cricket wickets originally only had two stumps <br>
          5.Sachin Tendulkar played for Pakistan before making his international debut for India
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">That's crazy</button>
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Thanks</button>
        </div>
      </div>
    </div>
  </div>
  <hr>
  {{-- Modal --}}
</div>


<div class="col-12">

<h2  class='buyjersey text-white bg-dark'>Buy Jersey Online<h2>
 <div class="card-group">
    <div class="card">
      <img src="{{asset('image/indjer.webp')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">INDIAN JERSEY</h5>
        <p class="card-text">Indian Team T-shirts with low price and High quality</p>
        <p class="card-text"><small class="text-muted"><button type="button" class="btn btn-dark " id="eff1" onclick=effect()><strong>BUY NOW</strong></button></small></p>
      </div>
    </div>
    <div class="card">
      <img src="{{asset('image/ausjersey.webp')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">AUSTRALIAN JERSEY</h5>
        <p class="card-text">Mighty Aussies Jersey will boost your Confidence</p>
        <p class="card-text text-white"><small class="text-muted"><button type="button" class="btn btn-dark " id="eff2" onclick=effect2()><strong>BUY NOW</strong></button></small></p>
      </div>
    </div>
    <div class="card">
      <img src="{{asset('image/franchisejersey.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">FRANCHISE JERSEY</h5>
        <p class="card-text">Divided by franchise and United by Cricket</p>
        <p class="card-text"><small class="text-muted"><button type="button" class="btn btn-dark" id="eff3" onclick=effect3()><strong>BUY NOW</strong></button></small></p>
      </div>
    </div>
  </div>
<div>

      </div>

      </div>
    </div>


  </footer>
<hr>
<div class="col-12">
{{-- card --}}
<div  class="d-flex justify-content-center bg-dark">
<h2 class="text-white">Trending Buys <img src="{{asset('image/trending2.jpg')}}" style="width:80px;height:70px; "></h2>
</div>
<div class="d-flex justify-content-center">

    <div class="card" style="width: 18rem;">
        <img src="{{asset('image/card.webp')}}" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title" style="background-color: black;color:whitesmoke">Adidas</h5>
        <p class="card-text">""This Jersey is highly selling in this week..Go and Buy"" </p>
        <a href="#" class="btn btn-dark" id="eff4" onclick=effect4()><strong>Buy it now!</strong></a>
    </div>
  </div>

</div>



</div>



  {{-- footer --}}
  <div class="col-12">
  <div class='footer' >
    <div class="text-bg-dark bg-black p-3">
  <div class="b-example-divider"></div>

<div class="container">
  <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
    <div class="col mb-3">
      <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
        <img src="{{asset('image/india-flag-icon.svg')}}" style="width:60px;height:60px;">

      </a>
      <p class="text-body-light">&copy; 2023</p>
      <img src="{{asset('image/twitter-instagram.avif')}}" style="width:150px;height:60px; ">
    </div>

    <div class="col mb-3">

    </div>

    <div class="col mb-3">


      <img src="{{asset('image/donation.png')}}" style="width:100px;height:100px">
      <h2 style="background-color:white; color:green;width:100px;">Grow Trees</h2>
    </div>

    <div class="col mb-3">
      <h5>Section</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-light">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-light">Features</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-light">Pricing</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-light">FAQs</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-light">About</a></li>
      </ul>
    </div>

    <div class="col mb-3">
        <h5>Win Tickets and gifts</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-light">Quizzes</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-light">offers</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-light">Leaderboard</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-light">Complaince</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-light">Policy</a></li>
          {{-- <img src="{{asset('image/footerbatsman.avif')}}" style="width:150px;height:150px;"> --}}
        </ul>
      </div>

  </footer>
</div>
    </footer>
</div>
</div>
</div>
    </div>

<script src="{{asset('js/task1.js')}}";></script>
</body>

</html>
