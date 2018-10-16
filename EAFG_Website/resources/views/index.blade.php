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
      <div class="container">
        <div class="row">
          <div class="col-3">

            <h3 class="mb-0"><img style="height:30px" src="{{asset('images/icons8-phone-filled-50.png')}}" alt="Email">01603 443830</h3>
          </div>
          <div class="ml-auto col-7">
            <ul class="float-right">
              <li><img style="height:20px" src="{{asset('images/icons8-new-post-50.png')}}" alt="Email"></li>
              <li><h5 class="m-auto pt-1">enquiries@eastanglianfasciaandguttering.com</h5></li>
              <li><img style="height:20px; padding-left:30px" src="{{asset('images/icons8-facebook-filled-50.png')}}" alt="Facebook"></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Navbar-->
  <section class="sticky-top">
    <div class="sectionNavbar">
      <div class="container">
        <div class="row">
          <div class="col-3">
            <h2 class="mb-0 pb-0">EAFG</h2>
            <p class="pl-0 mb-0 titletext">East Anglia Fascia & Guttering Ltd</p>
          </div>
          <div class="col-9 pt-2 pr-2 pl-0 align-self-center">
            <div class="row">
              <div class="col p-0 text-center align-self-center">
                <a href="#">Home</a>
              </div>
              <div class="col p-0 text-center align-self-center">
                <a href="#">Our Services</a>
              </div>
              <div class="col p-0 text-center align-self-center">
                <a href="#">Project Gallery</a>
              </div>
              <div class="col p-0 text-center align-self-center">
                <a href="#">Composite Doors</a>
              </div>
              <div class="col p-0 text-center align-self-center">
                <a href="#">Contact Us</a>
              </div>
              <div class="col p-0 text-center align-self-center">
                <button class="outlinebutton" type="button" name="button">Book an appointment</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Slidebar-->
  <section>
    <div class="sectionSlidebar">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner sliderh">
          <div class="carousel-item active">
            <img class="d-block w-100 img-h" src="{{asset('images/slide_gutter.jpg')}}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-h" src="{{asset('images/slide_fascia_boards.png')}}" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-h" src="{{asset('images/slide_waterandwaste.png')}}" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>

  <!--ScrollBar-->
  <section class="sectionScrollBar">
    <div class="">
      <div class="container">
        <h3>Scroll down for more information on East Anglia Fascia & Guttering Ltd<span style="position:relative;left:30px"><img style="height:50px" src="{{asset('images/icons8-down-button-50.png')}}" alt="Email"></a></span></h3>
      </div>
    </div>
  </section>

  <!--Image collom-->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-3">
          <img class="img-fluid onHover" src="{{asset('images/img_fascia.png')}}">
        </div>
        <div class="col-3">
          <img class="img-fluid onHover" src="{{asset('images/img_repair.png')}}">
        </div>
        <div class="col-3">
          <img class="img-fluid onHover" src="{{asset('images/img_door.png')}}">
        </div>
        <div class="col-3">
          <img class="img-fluid onHover" src="{{asset('images/img_request.png')}}">
        </div>
      </div>
      <div class="row">
        <div class="col-3">
          <hr style="width:50%; height:2px; border-top: 2px solid #cf1f2e;">
          <h4 class="text-center">Replacing</h4>
        </div>
        <div class="col-3">
          <hr style="width:50%; height:2px; border-top: 2px solid #cf1f2e;">
          <h4 class="text-center">Repairing</h4>
        </div>
        <div class="col-3">
          <hr style="width:50%; height:2px; border-top: 2px solid #cf1f2e;">
          <h4 class="text-center">Doors</h4>
        </div>
        <div class="col-3">
          <hr style="width:50%; height:2px; border-top: 2px solid #cf1f2e;">
          <h4 class="text-center">Online Quote</h4>
        </div>
      </div>
      <div style="margin-top:20px" class="">
        <h2>Individualized Roofing and Roofline Options</h2>
        <p>At East Anglian Fascia and Guttering ltd We will provide you with a full consultation to explain all of your available options so that you can choose the roofing or roofline plan that’s right for your home or business. We will work with you and adhere to your personal needs. 99% of the time you will deal with one person from start to finish!  That person will visit, quote, meet and fit your requirements! This cuts out the need for expensive commission based sales people.</p>
      </div>
    </div>
  </section>

  <!--Reviews-->
  <section>
    <div class="container">
      <hr style="height:2px; border-top: 2px solid #cf1f2e;">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="w-100 pt-3 pb-4" style="padding-left:30px;">
              <h5 class="text-dark p-0 m-0">Mr White, Norwich</h5>
              <p class="text-dark font-italic p-0 m-0">Excellent job, total satisfaction. The attention to details by your installer was exceptional.</p>
            </div>
          </div>

          <div class="carousel-item ">
            <div class="w-100 pt-3 pb-4" style="padding-left:30px;">
              <h5 class="text-dark p-0 m-0">Mr White, Norwich</h5>
              <p class="text-dark font-italic p-0 m-0">Excellent job, total satisfaction. The attention to details by your installer was exceptional.</p>
            </div>
          </div>

          <div class="carousel-item ">
            <div class="w-100 pt-3 pb-4" style="padding-left:30px;">
              <h5 class="text-dark p-0 m-0">Mr White, Norwich</h5>
              <p class="text-dark font-italic p-0 m-0">Excellent job, total satisfaction. The attention to details by your installer was exceptional.</p>
            </div>
          </div>
        </div>
      </div>
      <hr style="height:2px; border-top: 2px solid #cf1f2e;">
    </div>
  </section>

  <!--Company advice-->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2>Professional Installation</h2>
        </div>
        <div class="col-12">
          <p>We strive to save you both time and money by combining our use of roofing  and roofline  knowledge, the highest quality parts and equipment, and our dedication to delivering exceptional service. We will not leave the job until it is finished and you are 100% satisfied. Our white coloured fascia and guttering comes with a  10 years guarantee our foiled products come with a 5 year guarantee.</p>
        </div>
        <div class="col-12">
          <h2>Expert Advice</h2>
        </div>
        <div class="col-12">
          <p>Our friendly and experienced estimators are on hand to discuss your enquiry in the comfort of your own home. Giving expert advice on styles and colour options to complement your home, we will work with you to ensure that you select the right products to make your home safe, energy efficient and fully compliant with current regulations.</p>
        </div>
      </div>
    </div>
  </section>

  <!--Company Accreditations-->
  <section>
    <div class="container">
      <div class="">
        <hr style="height:2px; border-top: 2px solid #cf1f2e;">
        <h2>Accreditations</h2>
        <hr style="height:2px; border-top: 2px solid #cf1f2e;">
      </div>
    </div>
  </section>

  <!--Google Map-->
  <section>
    <div class="container">
      <div class="">
        <p>East Anglian Fascia and Guttering ltd based in Norwich, provides quality home improvements throughout Norfolk & Suffolk, Saint Marys Grove , Sprowston, Norwich, NR7 8DL, United Kingdom</p>
      </div>
    </div>
    <div>
      <iframe class="googlemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2419.842451025842!2d1.3274372514368538!3d52.66282323328814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d9e250990b3365%3A0x7a489f8684a92c6e!2sSt+Marys+Grove%2C+Norwich+NR7+8DL!5e0!3m2!1sen!2suk!4v1539683894312" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </section>

  <!--Contact Us Container-->
  <section class="sectionContactUsContainer">
    <div class="container">
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
              <p class="mb-0 footerEmailText">01603 443830</p>
              <p class="mb-0 footerEmailText">enquiries@eastanglianfasciaandguttering.com</p>
            </div>
          </div>
        </div>
        <div class="col-3 align-self-center text-center">
          <img class="" style="height:30px" src="{{asset('images/icons8-facebook-filled-grey-50.png')}}" alt="facebook">
        </div>
        <div class="col-3 align-self-center">
          <button class="outlinebutton" type="button" name="button">Book an appointment</button>
        </div>
      </div>
    </div>
  </section>

  <!--Footer-->
  <section class="sectionPrimaryFooter">
    <div class="container">
      <div class="row pt-5 pb-5">
        <div class="col-3">
          <h4 class="mb-0">ABOUT US</h4>
          <hr style="height:2px; border-top: 3px solid #cf1f2e; width:25%; margin-top:0px; padding-bottom: 05px; float:left">
          <div class="float-left">
            <p>With over 40 years of fitting experience the Father and Son team at East Anglian Fascia and Guttering provide a premier service specializing in residential and commercial roofing and roofline services, we are dedicated to providing customer service that is second to none.</p>
          </div>
        </div>
        <div class="col-3">
          <h4 class="mb-0">INSTANT ONLINE</h4>
          <hr style="height:2px; border-top: 3px solid #cf1f2e; width:25%; margin-top:0px; float:left">
          <div class="float-left">
            <p>Book an appointment today to transform your roofline.</p>
            <button class="outlinebutton" type="button" name="button">Book an appointment</button>
            <div class="row">
              <div class="col mt-1">
                <span style="color:#cf1f2e" class="float-left align-baseline">4.6<img class="mb-1 pl-1" style="height:20px" src="{{asset('images/icons8-star-filled-50.png')}}" alt="starRatings">
                <img class="mb-1" style="height:20px" src="{{asset('images/icons8-star-filled-50.png')}}" alt="starRatings">
                <img class="mb-1" style="height:20px" src="{{asset('images/icons8-star-filled-50.png')}}" alt="starRatings">
                <img class="mb-1" style="height:20px" src="{{asset('images/icons8-star-filled-50.png')}}" alt="starRatings">
                <img class="mb-1" style="height:20px" src="{{asset('images/icons8-star-half-filled-50.png')}}" alt="starRatings"></span>
              </div>
            </div>
            <p><a href="#" style="color:white">View all our Reviews</a></p>
          </div>
        </div>
        <div class="col-3">
          <h4 class="mb-0">QUICK LINKS</h4>
          <hr style="height:2px; border-top: 3px solid #cf1f2e; width:25%; margin-top:0px; margin-right:100%;float:left">
          <div class="float-left">
            <p class="mb-1">Home</p>
            <p class="mb-1">Roofline</p>
            <p class="mb-1">Doors</p>
            <p class="mb-1">Project Gallery</p>
            <p class="mb-1">Cookie Policy</p>
          </div>
        </div>
        <div class="col-3">
          <h4 class="mb-0">OPENING HOURS</h4>
          <hr style="height:2px; border-top: 3px solid #cf1f2e; width:25%; margin-top:0px; margin-right:100%;float:left">
          <div class="float-left">
            <p class="mb-1">Mon: 08:00-17:00</p>
            <p class="mb-1">Tues: 08:00-17:00</p>
            <p class="mb-1">Wed: 08:00-17:00</p>
            <p class="mb-1">Thur: 08:00-17:00</p>
            <p class="mb-1">Fri: 08:00-17:00</p>
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
  <li class="list-inline-item float-right">Icons by <a href="#">Icons8</a></li>
</ul>
        </div>
      </div>
    </div>
  </section>







  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
