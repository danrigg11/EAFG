<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" href="{{asset('css/master.css')}}">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

</head>
<body>

  <!--Header-->
  <section>
    <div class="sectionHeader">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-2 col-sm-3">

            <h3 class="mb-0" style="font-family: numberfont, serif !important;"><img style="height:30px" src="{{asset('images/icons8-phone-filled-white-50.png')}}" alt="Email">01603 443830</h3>
          </div>
          <div class="ml-auto col-xs-10 col-sm-9">
            <ul class="float-right">
              <li><img style="height:20px" src="{{asset('images/icons8-new-post-50.png')}}" alt="Email"></li>
              <li><a class="m-auto pt-1 text-center text-white" href="mailto:enquiries@eastanglianfasciaandguttering.com">enquiries@eastanglianfasciaandguttering.com</a></li>
              <li><a href="https://www.facebook.com/eastanglianfasciaandgutteringLtd/" target="_blank"><img class="" style="height:30px" src="{{asset('images/icons8-facebook-filled-grey-50.png')}}" alt="facebook"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Navbar-Large-->
  <section class="sticky-top sectionNavbarLarge" style="border-bottom: 2px solid #cf1f2e">
    <div class="sectionNavbar">
      <div class="container-fluid">
        <div class="row">
          <div class="col-3">
            <a href="{{ url('/') }}"><h2 class="mb-0 pb-0"style="font-family: titlefont, serif !important;">EAFG</h2></a>
            <a href="{{ url('/') }}"><p class="pl-0 mb-0 titletext"style="font-family: titlefont, serif !important;">East Anglia Fascia & Guttering Ltd</p></a>
          </div>
          <div class="col-8 pt-2 pr-2 pl-0 align-self-center">
            <div class="row">
              <div class="col p-0 text-center align-self-center">
                <a class="" href="{{ url('/') }}">Home</a>
              </div>
              <div class="col p-0 text-center align-self-center">
                <a href="{{ url('/services') }}">Our Services</a>
              </div>
              <div class="col p-0 text-center align-self-center">
                <a href="{{ url('/projects') }}">Project Gallery</a>
              </div>

              <div class="col p-0 text-center align-self-center">
                <a href="{{ url('/contact') }}">Contact Us</a>
              </div>
              <div class="col p-0 text-center align-self-center sectionNavbarButton">
                <button onclick="window.location.href='{{ url('contact') }}'" class="outlinebutton" type="button" name="button">Book an appointment</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Navbar-Small-->
  <section class="sticky-top sectionNavbarSmall" style="border-bottom: 2px solid #cf1f2e">
    <nav class="navbar navbar-expand-xs navbar-light sticky-top sectionNavbar">
      <div class="row">
        <div class="col-12">
          <h2 class="mb-0 pb-0"style="font-family: titlefont, serif !important;">EAFG</h2>
        </div>
        <div class="col-12">
          <p class="pl-0 mb-0 titletext"style="font-family: titlefont, serif !important;">East Anglia Fascia & Guttering Ltd</p>
        </div>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mt-3">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('services') }}">Our Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('projects') }}">Project Gallery</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ url('contact') }}">Contact Us</a>
          </li>
        </ul>
      </div>
    </nav>
  </section>
  @yield('content')

  <!--Contact Us Container-->
  <section class="sectionContactUsContainer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-3 align-self-center">
          <p class="mb-0 footerEmailText">Saint Marys Grove , Sprowston, Norwich, NR7 8DL, United Kingdom</p>
        </div>
        <div class="col-3 pr-0">
          <div class="row">
            <div class="col-1 pl-0 pr-0">
              <img class="" style="height:20px" src="{{asset('images/icons8-phone-filled-grey-50.png')}}" alt="Email">
            </div>
            <div class="col-10 pl-0">
              <p class="mb-0 footerEmailText" style="font-family: numberfont, serif !important;">01603 443830</p>
              <a class="m-auto pt-1 text-center footerEmailText" href="mailto:enquiries@eastanglianfasciaandguttering.com">enquiries@eastanglianfasciaandguttering.com</a>
            </div>
          </div>
        </div>
        <div class="col-3 align-self-center text-center">
          <a href="https://www.facebook.com/eastanglianfasciaandgutteringLtd/" target="_blank"><img class="" style="height:30px" src="{{asset('images/icons8-facebook-filled-grey-50.png')}}" alt="facebook"></a>
        </div>
        <div class="col-3 align-self-center">
          <button onclick="window.location.href='{{ url('contact') }}'" class="outlinebutton" type="button" name="button">Book an appointment</button>
        </div>
      </div>
    </div>
  </section>

  <!--Footer-->
  <section class="sectionPrimaryFooter">
    <div class="container-fluid">
      <div class="row pt-5 pb-5">

        <div class="col-3" onmouseover="mouseOverAbout()" onmouseout="mouseOutAbout()">
          <h4 class="mb-0">ABOUT US</h4>
          <hr id="OverAbout" style="height:2px; border-top: 3px solid #cf1f2e; width:25%; margin-top:0px; margin-right:100%;float:left;-webkit-transition-property: width; /* Safari */
    -webkit-transition-duration: 2s; /* Safari */
    -webkit-transition-delay: 0s; /* Safari */
    transition-property: width;
    transition-duration: 2s;">
          <div class="float-left">
            <p>With over 40 years of fitting experience the Father and Son team at East Anglian Fascia and Guttering provide a premier service specializing in residential and commercial roofing and roofline services, we are dedicated to providing customer service that is second to none.</p>
          </div>
        </div>
        <div class="col-3" onmouseover="mouseOverBook()" onmouseout="mouseOutBook()">
          <h4 class="mb-0">INSTANT ONLINE</h4>
          <hr id="OverBook" style="height:2px; border-top: 3px solid #cf1f2e; width:25%; margin-top:0px; margin-right:100%;float:left;-webkit-transition-property: width; /* Safari */
    -webkit-transition-duration: 2s; /* Safari */
    -webkit-transition-delay: 0s; /* Safari */
    transition-property: width;
    transition-duration: 2s;">
          <div class="float-left">
            <p>Book an appointment today to transform your roofline.</p>
            <button onclick="window.location.href='{{ url('contact') }}'" class="outlinebutton" type="button" name="button">Book an appointment</button>
            <div class="row">
              <div class="col mt-1">
                <span style="color:#cf1f2e" class="float-left align-baseline">4.6<img class="mb-1 pl-1" style="height:20px" src="{{asset('images/icons8-star-filled-50.png')}}" alt="starRatings">
                  <img class="mb-1" style="height:20px" src="{{asset('images/icons8-star-filled-50.png')}}" alt="starRatings">
                  <img class="mb-1" style="height:20px" src="{{asset('images/icons8-star-filled-50.png')}}" alt="starRatings">
                  <img class="mb-1" style="height:20px" src="{{asset('images/icons8-star-filled-50.png')}}" alt="starRatings">
                  <img class="mb-1" style="height:20px" src="{{asset('images/icons8-star-half-filled-50.png')}}" alt="starRatings"></span>
                </div>
              </div>
              <p><a href="https://maps.google.com/?cid=6855326840263418360" target="_blank" style="color:white">View all our Reviews</a></p>
            </div>
          </div>
          <div class="col-3" onmouseover="mouseOverLinks()" onmouseout="mouseOutLinks()">
            <h4 class="mb-0">QUICK LINKS</h4>
            <hr id="OverLinks" style="height:2px; border-top: 3px solid #cf1f2e; width:25%; margin-top:0px; margin-right:100%;float:left;-webkit-transition-property: width; /* Safari */
      -webkit-transition-duration: 2s; /* Safari */
      -webkit-transition-delay: 0s; /* Safari */
      transition-property: width;
      transition-duration: 2s;">
            <div class="float-left">
              <a style="text-decoration: none;" href="{{ url('/') }}"><p class="mb-1">Home</p></a>
              <a style="text-decoration: none;" href="{{ url('/services') }}"><p class="mb-1">Roofline</p></a>
              <a style="text-decoration: none;" href="{{ url('/services') }}"><p class="mb-1">EPDM</p></a>
              <a style="text-decoration: none;" href="{{ url('/projects') }}"><p class="mb-1">Project Gallery</p></a>
              <a style="text-decoration: none;" href="{{ url('contact') }}"><p class="mb-1">Contact</p></a>
              <a style="text-decoration: none;" href="{{ url('/') }}"><p class="mb-1">Cookie Policy</p></a>
            </div>
          </div>
          <div class="col-3" onmouseover="mouseOverHours()" onmouseout="mouseOutHours()">
            <h4 class="mb-0">OPENING HOURS</h4>
            <hr id="OverHours" style="height:2px; border-top: 3px solid #cf1f2e; width:25%; margin-top:0px; margin-right:100%;float:left;-webkit-transition-property: width; /* Safari */
      -webkit-transition-duration: 2s; /* Safari */
      -webkit-transition-delay: 0s; /* Safari */
      transition-property: width;
      transition-duration: 2s;">
            <div class="float-left">
              <p class="mb-1" style="font-family: numberfont, serif !important;">Mon: <span>08:00 -17:00</span></p>
              <p class="mb-1" style="font-family: numberfont, serif !important;">Tues: <span>08:00 -17:00</span></p>
              <p class="mb-1" style="font-family: numberfont, serif !important;">Wed: <span>08:00 -17:00</span></p>
              <p class="mb-1" style="font-family: numberfont, serif !important;">Thur: <span>08:00 -17:00</span></p>
              <p class="mb-1" style="font-family: numberfont, serif !important;">Fri: <span>08:00 -17:00</span></p>
              <p class="mb-1">Sat: Closed</p>
              <p class="mb-1">Sun: Closed</p>
            </div>
          </div>
          <div class="col-12">
            <hr style="height:2px; border-top: 2px solid #aaa;">
          </div>
          <div class="col-12">
            <ul class="list-inline">
              <li class="list-inline-item">© 2018 East Anglian Fascia and Guttering (UK) Ltd | Daniel Rigg Services</li>
              <li class="list-inline-item float-right">Icons by <a target="_blank" href="https://icons8.com/">Icons8</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <script>
function mouseOverAbout() {
    document.getElementById("OverAbout").style.width = "100%";
}

function mouseOutAbout() {
    document.getElementById("OverAbout").style.width = "25%";
}
function mouseOverBook() {
    document.getElementById("OverBook").style.width = "100%";
}

function mouseOutBook() {
    document.getElementById("OverBook").style.width = "25%";
}
function mouseOverLinks() {
    document.getElementById("OverLinks").style.width = "100%";
}

function mouseOutLinks() {
    document.getElementById("OverLinks").style.width = "25%";
}
function mouseOverHours() {
    document.getElementById("OverHours").style.width = "100%";
}

function mouseOutHours() {
    document.getElementById("OverHours").style.width = "25%";
}
</script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
  </html>
