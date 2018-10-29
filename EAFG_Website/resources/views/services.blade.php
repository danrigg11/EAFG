@extends('master')
@section('content')
  <script>
  function rooflineOptionFunction() {
    document.getElementById("backSection").style.display = "block";

    document.getElementById("rooflineSection").style.display = "block";
    document.getElementById("rooflineRepairSection").style.display = "none";
    document.getElementById("epdmSection").style.display = "none";
    document.getElementById("menuSection").style.display = "none";
  }
  function rooflineRepairOptionFunction() {
    document.getElementById("backSection").style.display = "block";

    document.getElementById("rooflineSection").style.display = "none";
    document.getElementById("rooflineRepairSection").style.display = "block";
    document.getElementById("epdmSection").style.display = "none";
    document.getElementById("menuSection").style.display = "none";
  }
  function epdmOptionFunction() {
    document.getElementById("backSection").style.display = "block";

    document.getElementById("rooflineSection").style.display = "none";
    document.getElementById("rooflineRepairSection").style.display = "none";
    document.getElementById("epdmSection").style.display = "block";
    document.getElementById("menuSection").style.display = "none";
  }

  function backOptionFunction() {
    document.getElementById("backSection").style.display = "none";

    document.getElementById("rooflineSection").style.display = "none";
    document.getElementById("rooflineRepairSection").style.display = "none";
    document.getElementById("epdmSection").style.display = "none";
    document.getElementById("menuSection").style.display = "block";
  }

  function myFunction1(imgs) {
    var expandImg1 = document.getElementById("expandedImg1");
    var imgText1 = document.getElementById("imgtext1");
    expandImg1.src = imgs.src;
    imgText1.innerHTML = imgs.alt;
    expandImg1.parentElement.style.display = "block";
  }

  function myFunction2(imgs) {
    var expandImg2 = document.getElementById("expandedImg2");
    var imgText2 = document.getElementById("imgtext2");
    expandImg2.src = imgs.src;
    imgText2.innerHTML = imgs.alt;
    expandImg2.parentElement.style.display = "block";
  }

  function myFunction3(imgs) {
    var expandImg3 = document.getElementById("expandedImg3");
    var imgText3 = document.getElementById("imgtext3");
    expandImg3.src = imgs.src;
    imgText3.innerHTML = imgs.alt;
    expandImg3.parentElement.style.display = "block";
  }

  function myFunction4(imgs) {
    var expandImg4 = document.getElementById("expandedImg4");
    var imgText4 = document.getElementById("imgtext4");
    expandImg4.src = imgs.src;
    imgText4.innerHTML = imgs.alt;
    expandImg4.parentElement.style.display = "block";
  }
</script>

<div class="container-fluid">
  <h1 class="text-center display-1">Services</h1>
  <!--Back Section-->
  <div id="backSection" style="display: none;">
    <button type="button" onclick="backOptionFunction()" class="btn btn-primary ml-3">Back</button>
  </div>

  <!--Menu Tabs-->
  <div id="menuSection">
    <div class="row">

      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="card" style="width: 18rem; margin-bottom:30px; width:100%">
          <img class="card-img-top" src="{{asset('images/img_roofline_menu_2.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Roofline</h5>
            <p class="card-text">Ideal for both new homes and replacement projects.</p>
            <div class="d-flex justify-content-between">
              <button type="button" onclick="rooflineOptionFunction()" class="btn btn-primary">View</button>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bd-example-modal-lg">
                Roofline Explained
              </button>

              <!-- Modal -->
              <div class="modal fade bd-example-modal-lg" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Roofline Explained</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <img src="{{asset('images/roofline-explained.jpg')}}" alt="roofline Drawing" class="img-fluid">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="card" style="width: 18rem; margin-bottom:30px; width:100%">
          <img class="card-img-top" src="{{asset('images/img_roofline_Menu.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Roofline Repair</h5>
            <p class="card-text">Ideal for both new homes and replacement projects.</p>
            <button type="button" onclick="rooflineRepairOptionFunction()" class="btn btn-primary">View</button>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="card" style="width: 18rem; margin-bottom:30px; width:100%">
          <img class="card-img-top" src="{{asset('images/img_EPDM_Menu.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">EPDM Roofs</h5>
            <p class="card-text">Ideal for both new homes and replacement projects.</p>
            <button type="button" onclick="epdmOptionFunction()" class="btn btn-primary">View</button>
          </div>
        </div>
      </div>


    </div>
  </div>
</div>

<div class="container">
  <!--Roofline Section-->
  <div id="rooflineSection" style="display: none;">
    <div class="row">
      <div class="col-md-12 m-auto">
        <h1>Replacing The Roofline</h1>
        <p>How do you decide when it is time to think about replacing your fascia and guttering? After an inspection of your guttering you may need to think about replacing your roofline. Here are some signs when your Fascia, soffit and gutters may need replacing.</p>
        <ul>
          <li>Peeling paint— this exposes timber to the elements.</li>
          <li>Rotten timbers—Very hard to check but important, if they are rotten it may allow water back into your house and un-secure fascia.</li>
          <li>Guttering— it gets blocked! Check to see if the water is running free and not backing up (due to leaves and twigs, we have a few new products that can prevent this.</li>
          <li>Old guttering and fascia - Sometimes it is just time to replace.</li>
        </ul>
        <h5><u>Here is a cateloge of the types of fascia and guttering we can install.</u></h5>
      </div>
    </div>


    <div class="row">
      <!--Fascia Board-->
      <div class="col-sm-12 col-md-6" style="padding-right:40px;">
        <hr style="width:100%; height:2px; border-top: 2px solid #cf1f2e;">
        <div class="text-center">
          <div class="container1">
            <h2>Fascia Board</h2>
            <img id="expandedImg1" style="width:50%" src="{{asset('images/FasciaBoardCream.jpg')}}" >
            <div id="imgtext1">Cream</div>
          </div>
        </div>

        <div class="col m-auto">
          <div class="row">
            <div class="col-3 text-center" style="padding:0px">
              <img src="{{asset('images/FasciaBoardWhite.jpg')}}" alt="White" style="width:100%" onclick="myFunction1(this);">
            </div>
            <div class="col-3 text-center" style="padding:0px">
              <img src="{{asset('images/FasciaBoardRosewood.jpg')}}" alt="Rosewood" style="width:100%" onclick="myFunction1(this);">
            </div>
            <div class="col-3 text-center" style="padding:0px">
              <img src="{{asset('images/FasciaBoardIrishOak.jpg')}}" alt="Irish Oak" style="width:100%" onclick="myFunction1(this);">
            </div>
            <div class="col-3 text-center" style="padding:0px">
              <img src="{{asset('images/FasciaBoardOak.jpg')}}" alt="Oak" style="width:100%" onclick="myFunction1(this);">
            </div>
            <div class="col-3 text-center" style="padding:0px">
              <img src="{{asset('images/FasciaBoardCream.jpg')}}" alt="Cream" style="width:100%" onclick="myFunction1(this);">
            </div>
            <div class="col-3 text-center" style="padding:0px">
              <img src="{{asset('images/FasciaBoardBlack.jpg')}}" alt="Black" style="width:100%" onclick="myFunction1(this);">
            </div>
            <div class="col-3 text-center" style="padding:0px">
              <img src="{{asset('images/FasciaBoardAnthraciteGrey.jpg')}}" alt="Anthracite Grey" style="width:100%" onclick="myFunction1(this);">
            </div>
          </div>
        </div>
      </div>



      <!--Soffit Board-->
      <div class="col-sm-12 col-md-6" style="padding-right:40px;">
        <hr style="width:100%; height:2px; border-top: 2px solid #cf1f2e;">
        <div class="text-center">
          <div class="container2">
            <h2>Soffit Board</h2>
            <img id="expandedImg2" style="width:50%" src="{{asset('images/soffit_Board_Anthracite_Grey.jpg')}}" >
            <div id="imgtext2">Anthracite Grey</div>
          </div>
        </div>

        <div class="col m-auto">
          <div class="row">
            <div class="col-3 text-center" style="padding:0px">
              <img src="{{asset('images/soffit_Board_White.jpg')}}" alt="White" style="width:100%" onclick="myFunction2(this);">
            </div>
            <div class="col-3 text-center" style="padding:0px">
              <img src="{{asset('images/soffit_Board_Anthracite_Grey.jpg')}}" alt="Anthracite Grey" style="width:100%" onclick="myFunction2(this);">
            </div>
            <div class="col-3 text-center" style="padding:0px">
              <img src="{{asset('images/soffit_Board_Black.jpg')}}" alt="Black" style="width:100%" onclick="myFunction2(this);">
            </div>
            <div class="col-3 text-center" style="padding:0px">
              <img src="{{asset('images/soffit_Board_White_Ash.jpg')}}" alt="White Ash" style="width:100%" onclick="myFunction2(this);">
            </div>
            <div class="col-3 text-center" style="padding:0px">
              <img src="{{asset('images/soffit_Board_Cream.jpg')}}" alt="Cream" style="width:100%" onclick="myFunction2(this);">
            </div>
            <div class="col-3 text-center" style="padding:0px">
              <img src="{{asset('images/soffit_Board_Golden_Oak.jpg')}}" alt="Golden Oak" style="width:100%" onclick="myFunction2(this);">
            </div>
            <div class="col-3 text-center" style="padding:0px">
              <img src="{{asset('images/soffit_Board_Irish_Oak.jpg')}}" alt="Irish Oak" style="width:100%" onclick="myFunction2(this);">
            </div>
            <div class="col-3 text-center" style="padding:0px">
              <img src="{{asset('images/soffit_Board_Rosewood.jpg')}}" alt="Rosewood" style="width:100%" onclick="myFunction2(this);">
            </div>
          </div>
        </div>
      </div>



      <!--Cladding-->
      <div class="col-sm-12 col-md-6" style="padding-right:40px;">
        <hr style="width:100%; height:2px; border-top: 2px solid #cf1f2e;">
        <div class="text-center">
          <div class="container3">
            <h2>Cladding</h2>
            <img id="expandedImg3" style="width:50%" src="{{asset('images/Shiplap-cladding_White.jpg')}}" >
            <div id="imgtext3">White</div>
          </div>
        </div>

        <div class="col m-auto">
          <div class="row">
            <div class="col-4 text-center" style="padding:0px">
              <img src="{{asset('images/Shiplap-cladding_White.jpg')}}" alt="White" style="width:100%" onclick="myFunction3(this);">
            </div>
            <div class="col-4 text-center" style="padding:0px">
              <img src="{{asset('images/shiplap-cladding_Light-oak.jpg')}}" alt="Light Oak" style="width:100%" onclick="myFunction3(this);">
            </div>
            <div class="col-4 text-center" style="padding:0px">
              <img src="{{asset('images/shiplap-cladding_Rosewood.jpg')}}" alt="Rosewood" style="width:100%" onclick="myFunction3(this);">
            </div>
          </div>
        </div>
      </div>


      <!--Guttering-->
      <div class="col-sm-12 col-md-6" style="padding-right:40px;">
        <hr style="width:100%; height:2px; border-top: 2px solid #cf1f2e;">
        <div class="text-center">
          <div class="container4">
            <h2>Guttering</h2>
            <img id="expandedImg4" style="width:50%" src="{{asset('images/GutteringDeepFlow.jpg')}}" >
            <div id="imgtext4">Deep Flow</div>
          </div>
        </div>

        <div class="col m-auto">
          <div class="row">
            <div class="col-3 text-center" style="padding:0px">
              <img src="{{asset('images/GutteringDeepFlow.jpg')}}" alt="Deep Flow" style="width:100%" onclick="myFunction4(this);">
            </div>
            <div class="col-3 text-center" style="padding:0px">
              <img src="{{asset('images/GutteringHalfRound.jpeg')}}" alt="Half Round" style="width:100%" onclick="myFunction4(this);">
            </div>
            <div class="col-3 text-center" style="padding:0px">
              <img src="{{asset('images/GutteringOgee.jpg')}}" alt="Ogee" style="width:100%" onclick="myFunction4(this);">
            </div>
            <div class="col-3 text-center" style="padding:0px">
              <img src="{{asset('images/GutteringSquare.jpeg')}}" alt="Square" style="width:100%" onclick="myFunction4(this);">
            </div>
          </div>
        </div>
      </div>


    </div>

  </div>
</div>

<!--Roofline Repair Section-->
<div id="rooflineRepairSection" style="display: none;">
  <div class="container">
    <h1>Roofline Repair</h1>
    <p>If you live in East Anglia and are looking to repair, replace or upgrade your existing roofline, our team of professional installers with <span style="font-family: numberfont, serif !important;">30+</span> years experience are here to help. Not only will a new roofline from EAFG increase the weatherproofing of your home, our long lasting materials require very little maintenance, a roofline from EAFG is a possitive investment for your property.</p>
    <p>We can install everything from uPVC fascias and soffits to guttering and rainwater systems, helping your roofline run properly.</p>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('images/img_roofline_2.jpg')}}" alt="First slide roofline"style="background-size:cover">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/img_roofline.jpg')}}" alt="Second slide roofline"style="background-size:cover;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/img_roofline_3.jpg')}}" alt="Third slide"style="background-size:cover">
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

<!--EPDM Section-->
<div id="epdmSection" style="display: none;">
  <div class="container">
    <h1>EPDM</h1>
    <p>Our flat roofs are manufactured by one of the largest EPDM manufacturers in the world with upto a 50 year life expectancy.</p>
    <p>The EPDM membraine is strong, lightweight and a great solution for a flat roof renovation or a new flat roof installations. It is completely UV stable which means there is no requirement for a top coat.</p>
    <ul>
      <li>Little or no maintenance roofing system</li>
      <li>Highly flexible</li>
      <li>Economical</li>
      <li>No moss or algae growth</li>
    </ul>

      <img class="d-block w-100 mb-3" src="{{asset('images/img_EPDM_2.jpg')}}" alt="EPDM Roof 1">

      <img class="d-block w-100 mb-3" src="{{asset('images/img_EPDM_1.png')}}" alt="Second slide roofline">



  </div>
  </div>






@endsection
