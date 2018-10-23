@extends('master')
@section('content')
  <!--Facebook like script-->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.1';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <!--Contact Us-->
  <section class="">
    <div class="container-fluid mt-4">
      <div class="row">
        <div class="col-12 mb-3">
          <h1 class="text-center display-1">Contact us</h1>
          <p class="text-center">We're here to help, so please find the most relevant way to get in touch below for help with your order and after-sales care.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
          <div class="col-12 text-center">
            <img style="height:60px" src="{{asset('images/icons8-phone-filled-black-50.png')}}" alt="Phone">
          </div>
          <div class="col-12 text-center">
            <p class="mb-3">Call us</p>
            <h3 class="mb-0" style="font-family: numberfont, serif !important;">01603 443830</h3>
            <h3 class="mb-0" style="font-family: numberfont, serif !important;">07890 534281</h3>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
          <div class="col-12 text-center">
            <img style="height:60px" src="{{asset('images/icons8-new-message-filled-50.png')}}" alt="Email">
          </div>
          <div class="col-12 text-center">
            <p class="mb-3">Email us</p>
            <p class="mb-0">Click <span><a class="mb-0 mt-0 text-center" href="mailto:enquiries@eastanglianfasciaandguttering.com">here </a></span>to send us an email at </p>
            <a class="mb-0 mt-0 text-center" href="mailto:enquiries@eastanglianfasciaandguttering.com">enquiries@eastanglianfasciaandguttering.com</a>
            <p>please enclude the details of your query, your name, and your phone number.</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
          <div class="col-12 text-center">
            <img style="height:60px" src="{{asset('images/icons8-facebook-like-filled-50.png')}}" alt="Email">
          </div>
          <div class="col-12 text-center">
            <p class="mb-3">Like us on facebook</p>
            <div class="fb-like" data-href="https://www.facebook.com/eastanglianfasciaandgutteringLtd/" data-layout="box_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
          </div>
        </div>
      </div>
      <div class="row justify-content-md-center">
        <hr style="width:100%; height:2px; border-top: 2px solid #cf1f2e;">
        <div class="col-md-3 col-sm-12 col-xs-12 mb-3">
          <div class="col-12">
            <p class="mb-4 text-danger w-100">By Appointment Only</p>
            <p class="m-0">East anglia fascia and guttering Ltd</p>
            <p class="m-0">St Marys Grove</p>
            <p class="m-0">Norwich</p>
            <p class="m-0">Norfolk</p>
            <p class="m-0" style="font-family: numberfont, serif !important;">NR7 8DL</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
          <div class="col-12">
            <p class="mb-3 text-danger">Company Information</p>
            <p class="m-0 mb-1">Company No. <span style="font-family: numberfont, serif !important;">11587834</span></p>
            <p class="m-0 text-danger">Registered Office:</p>
            <p class="m-0">East anglia fascia and guttering Ltd</p>
            <p class="m-0">St Marys Grove, Norwich, Norfolk, <span style="font-family: numberfont, serif !important;">NR7 8DL</span></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Google Map-->
  <section>
    <div class="container-fluid">
    </div>
    <div>
      <iframe class="googlemap" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9679.370520157336!2d1.329631!3d52.66282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d9e2508750178b%3A0x10ac471a775198f6!2sSt+Marys+Grove%2C+Norwich+NR7+8DL!5e0!3m2!1sen!2suk!4v1539951013342" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </section>
@endsection
