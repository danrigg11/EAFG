@extends('master')
@section('content')

  <div class="container-fluid">

    <div class="row">

      <div class="col-md-8 col-sm-12 m-auto">
        <div class="">
          <h1 class="text-center display-1">Services</h1>
          <h1>Replacing The Roofline</h1>
          <p>How do you decide when it is time to think about replacing your fascia and guttering? After an inspection of your guttering you may need to think about replacing your roofline. Here are some signs when your Fascia, soffit and gutters may need replacing.</p>
          <ul>
            <li>Peeling paint— this exposes timber to the elements.</li>
            <li>Rotten timbers—Very hard to check but important, if they are rotten it may allow water back into your house and un-secure fascia.</li>
            <li>Guttering— it gets blocked! Check to see if the water is running free and not backing up (due to leaves and twigs, we have a few new products that can prevent this.</li>
            <li>Old guttering and fascia - Sometimes it is just time to replace.</li>
          </ul>
          <h5><u>Here is a cateloge of the types of fascia and guttering we can install.</u></h5>

          <h2 class="text-center mb-0 pb-2">Fascia Boards</h2>
        </div>
        <div class="text-center">
          <div class="container1">
            <img id="expandedImg1" style="width:35%" src="{{asset('images/FasciaBoardCream.jpg')}}" >
            <div id="imgtext1">Cream</div>
          </div>
        </div>
      </div>
      <hr style="width:50%; height:2px; border-top: 2px solid #cf1f2e;">



        <div class="col-7 m-auto">
          <!-- The four columns -->
          <div class="row">
            <div class="col text-center" style="padding:0px">
              <img src="{{asset('images/FasciaBoardWhite.jpg')}}" alt="White" style="width:100%" onclick="myFunction1(this);">
            </div>
            <div class="col text-center" style="padding:0px">
              <img src="{{asset('images/FasciaBoardRosewood.jpg')}}" alt="Rosewood" style="width:100%" onclick="myFunction1(this);">
            </div>
            <div class="col text-center" style="padding:0px">
              <img src="{{asset('images/FasciaBoardOak.jpg')}}" alt="Oak" style="width:100%" onclick="myFunction1(this);">
            </div>
            <div class="col text-center" style="padding:0px">
              <img src="{{asset('images/FasciaBoardCream.jpg')}}" alt="Cream" style="width:100%" onclick="myFunction1(this);">
            </div>
            <div class="col text-center" style="padding:0px">
              <img src="{{asset('images/FasciaBoardBlack.jpg')}}" alt="Black" style="width:100%" onclick="myFunction1(this);">
            </div>
            <div class="col text-center" style="padding:0px">
              <img src="{{asset('images/FasciaBoardAnthraciteGrey.jpg')}}" alt="Anthracite Grey" style="width:100%" onclick="myFunction1(this);">
            </div>
            <div class="col text-center" style="padding:0px">
              <img src="{{asset('images/FasciaBoardIrishOak.jpg')}}" alt="Irish Oak" style="width:100%" onclick="myFunction1(this);">
            </div>
          </div>
          <p>Ideal for both new homes and replacement projects.</p>
          <ul>
            <li>Available in a standard flat profile or a distinctive sculpted ‘ogee’ style, our fascia can make a smart improvement to your home.</li>
            <li>Low maintenance, product will not crack or warp and require little maintenance.</li>
          </ul>
        </div>




        <hr style="width:50%; height:2px; border-top: 2px solid #cf1f2e; margin-top:05%">
        <div class="col-md-8 col-sm-12 m-auto">
          <div class="">
            <h2 class="text-center">Guttering Styles</h2>
          </div>
          <div class="text-center">
            <div class="container2">
              <img id="expandedImg2" style="width:35%" src="{{asset('images/GutteringDeepFlow.jpg')}}" >
              <div id="imgtext2">Deep Flow</div>
            </div>
          </div>
        </div>
        <hr style="width:50%; height:2px; border-top: 2px solid #cf1f2e;">

          <div class="col-7 m-auto">
            <!-- The four columns -->
            <div class="row">
              <div class="col text-center" style="padding:0px">
                <img src="{{asset('images/GutteringDeepFlow.jpg')}}" alt="Deep Flow" style="width:100%" onclick="myFunction2(this);">
              </div>
              <div class="col text-center" style="padding:0px">
                <img src="{{asset('images/GutteringHalfRound.jpeg')}}" alt="Half Round" style="width:100%" onclick="myFunction2(this);">
              </div>
              <div class="col text-center" style="padding:0px">
                <img src="{{asset('images/GutteringOgee.jpg')}}" alt="Ogee" style="width:100%" onclick="myFunction2(this);">
              </div>
              <div class="col text-center" style="padding:0px">
                <img src="{{asset('images/GutteringSquare.jpeg')}}" alt="Square" style="width:100%" onclick="myFunction2(this);">
              </div>
            </div>
            <p>Our guttering not only ensures efficient drainage of your roof, but can add to the appearance of your home.</p>
            <p style="margin-bottom:0px">Square & Half Round Guttering.</p>
            <ul>
              <li>Both rainwater systems are suited to residential applications, and are compatible with many other existing systems.</li>
            </ul>
            <p style="margin-bottom:0px">Deep Flow Guttering.</p>
            <ul>
              <li>Designed to aesthetically complement any property, this system is ideal for use on larger residential buildings, smaller commercial premises and conservatory roof applications, as the system is sturdier due to the thick gutter extrusion.</li>
            </ul>
          </div>

          <hr style="width:100%; height:2px; border-top: 2px solid #cf1f2e; margin-bottom:0px;">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-bottom:40px;">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner sliderh">
              <div class="carousel-item active">
                <img class="d-block img-slider" src="{{asset('images/img_roofline.jpg')}}" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-slider" src="{{asset('images/img_roofline_2.jpg')}}" alt="Third slide">
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
    <div class="row">
      <div class="col-md-8 col-sm-12 m-auto">
        <h1>Soffit Boards</h1>
        <p>UPVC Soffit Boards can enhance and refresh the appearance of your home. It provides an attractive, low-maintenance and weather-resistant solution.</p>
        <ul>
          <li>low-maintenance, weather-resistant</li>
          <li>Will give your new roofline an attractive, clean-edged finish</li>
          <li>Can be used to cover all types of walls & surfaces.</li>
        </ul>
      </div>

      <div class="col-md-8 col-sm-12 m-auto">
        <div class="">
          <h2 class="text-center">Soffit Styles</h2>
        </div>
        <div class="text-center">
          <div class="container2">
            <img id="expandedImg3" style="width:35%" src="{{asset('images/soffit_Board_White.jpg')}}" >
            <div id="imgtext3">White</div>
          </div>
        </div>
      </div>
      <hr style="width:50%; height:2px; border-top: 2px solid #cf1f2e;">

        <div class="col-7 m-auto">
          <!-- The four columns -->
          <div class="row">
            <div class="col text-center" style="padding:0px">
              <img src="{{asset('images/soffit_Board_White.jpg')}}" alt="White" style="width:100%" onclick="myFunction3(this);">
            </div>
            <div class="col text-center" style="padding:0px">
              <img src="{{asset('images/soffit_Board_Rosewood.jpg')}}" alt="Rosewood" style="width:100%" onclick="myFunction3(this);">
            </div>
            <div class="col text-center" style="padding:0px">
              <img src="{{asset('images/soffit_Board_Irish_Oak.jpg')}}" alt="Irish Oak" style="width:100%" onclick="myFunction3(this);">
            </div>
            <div class="col text-center" style="padding:0px">
              <img src="{{asset('images/soffit_Board_Golden_Oak.jpg')}}" alt="Golden Oak" style="width:100%" onclick="myFunction3(this);">
            </div>
            <div class="col text-center" style="padding:0px">
              <img src="{{asset('images/soffit_Board_Cream.jpg')}}" alt="Cream" style="width:100%" onclick="myFunction3(this);">
            </div>
            <div class="col text-center" style="padding:0px">
              <img src="{{asset('images/soffit_Board_White_Ash.jpg')}}" alt="White Ash" style="width:100%" onclick="myFunction3(this);">
            </div>
            <div class="col text-center" style="padding:0px">
              <img src="{{asset('images/soffit_Board_Black.jpg')}}" alt="Black" style="width:100%" onclick="myFunction3(this);">
            </div>
            <div class="col text-center" style="padding:0px">
              <img src="{{asset('images/soffit_Board_Anthracite_Grey.jpg')}}" alt="Anthracite Grey" style="width:100%" onclick="myFunction3(this);">
            </div>
          </div>
          </div>

      <hr style="width:100%; height:2px; border-top: 2px solid #cf1f2e; margin-bottom:0px;">
      <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel" style="margin-bottom:40px;">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner sliderh">
          <div class="carousel-item active">
            <img class="d-block img-slider" src="{{asset('images/img_soffit_board.jpg')}}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block img-slider" src="{{asset('images/img_soffit_board_2.jpg')}}" alt="Second slide">
          </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>






  </div>
  <script>
  function myFunction1(imgs) {
    var expandImg1 = document.getElementById("expandedImg1");
    var imgText1 = document.getElementById("imgtext1");
    expandImg1.src = imgs.src;
    imgText1.innerHTML = imgs.alt;
    expandImg1.parentElement.style.display = "block";
  }
</script>
<script>
function myFunction2(imgs) {
  var expandImg2 = document.getElementById("expandedImg2");
  var imgText2 = document.getElementById("imgtext2");
  expandImg2.src = imgs.src;
  imgText2.innerHTML = imgs.alt;
  expandImg2.parentElement.style.display = "block";
}
</script>
<script>
function myFunction3(imgs) {
  var expandImg3 = document.getElementById("expandedImg3");
  var imgText3 = document.getElementById("imgtext3");
  expandImg3.src = imgs.src;
  imgText3.innerHTML = imgs.alt;
  expandImg3.parentElement.style.display = "block";
}
</script>


@endsection
