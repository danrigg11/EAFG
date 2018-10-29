@extends('master')
@section('content')
    <!--Slidebar-->
    <section>
      <div class="sectionSlidebar">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>

          </ol>
          <div class="carousel-inner sliderh">
            <div class="carousel-item active">
              <img class="d-block w-100 img-slider" src="{{asset('images/slide_gutter.png')}}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 img-slider" src="{{asset('images/slide_house_fascia_boards.png')}}" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 img-slider" src="{{asset('images/slide_fascia_boards.png')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 img-slider" src="{{asset('images/slide_fascia_boards_2.png')}}" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 img-slider" src="{{asset('images/slide_waterandwaste.png')}}" alt="Third slide">
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
        <div class="container-fluid text-center">
          <h3 class="sectionScrollBarText">Scroll down for more information on East Anglia Fascia & Guttering Ltd<span style="position:relative;left:30px"><img style="height:50px" src="{{asset('images/icons8-down-button-50.png')}}" alt="Email"></a></span></h3>
        </div>
      </div>
    </section>

    <!--Image collom-->
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-3">
            <a href="{{ url('/services') }}"><img class="img-fluid onHover" src="{{asset('images/img_fascia_2.png')}}"></a>
          </div>
          <div class="col-3">
            <a href="{{ url('/services') }}"><img class="img-fluid onHover" src="{{asset('images/img_repair.png')}}"></a>
          </div>
          <div class="col-3">
            <a href="{{ url('/services') }}"><img class="img-fluid onHover" src="{{asset('images/img_EPDM_1.png')}}"></a>
          </div>
          <div class="col-3">
            <a href="{{ url('/contact') }}"><img class="img-fluid onHover" src="{{asset('images/img_request.png')}}"></a>
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
            <h4 class="text-center">EPDM Roof</h4>
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
      <div class="container-fluid">
        <hr style="height:2px; border-top: 2px solid #cf1f2e;">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="w-100 pt-3 pb-4" style="padding-left:30px;">
                <h5 style="font-family: Raleway, serif !important;" class="text-dark p-0 m-0">Mr White, Norwich</h5>
                <p style="font-family: RalewayItalic, serif!important;" class="text-dark p-0 m-0">Excellent job, total satisfaction. The attention to details by your installer was exceptional.</p>
              </div>
            </div>

            <div class="carousel-item ">
              <div class="w-100 pt-3 pb-4" style="padding-left:30px;">
                <h5 style="font-family: Raleway, serif !important;" class="text-dark p-0 m-0">Mr White, Norwich</h5>
                <p style="font-family: RalewayItalic, serif!important;" class="text-dark p-0 m-0">Excellent job, total satisfaction. The attention to details by your installer was exceptional.</p>
              </div>
            </div>

            <div class="carousel-item ">
              <div class="w-100 pt-3 pb-4" style="padding-left:30px;">
                <h5 style="font-family: Raleway, serif !important;" class="text-dark p-0 m-0">Mr White, Norwich</h5>
                <p style="font-family: RalewayItalic, serif!important;" class="text-dark p-0 m-0">Excellent job, total satisfaction. The attention to details by your installer was exceptional.</p>
              </div>
            </div>
          </div>
        </div>
        <hr style="height:2px; border-top: 2px solid #cf1f2e;">
      </div>
    </section>

    <!--Company advice-->
    <section>
      <div class="container-fluid">
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

    <!--Google Map-->
    <section>
      <div class="container-fluid">
        <div class="">
          <p>East Anglian Fascia and Guttering ltd based in Norwich, provides quality home improvements throughout Norfolk & Suffolk, Saint Marys Grove , Sprowston, Norwich, <span style="font-family: numberfont, serif !important;">NR7 8DL</span>, United Kingdom</p>
        </div>
      </div>
      <div>
        <iframe class="googlemap" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9679.370520157336!2d1.329631!3d52.66282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d9e2508750178b%3A0x10ac471a775198f6!2sSt+Marys+Grove%2C+Norwich+NR7+8DL!5e0!3m2!1sen!2suk!4v1539951013342" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </section>
@endsection
