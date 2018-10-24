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
</script>

<div class="container-fluid">
  <h1 class="text-center display-1">Services</h1>
  <!--Back Section-->
  <div id="backSection" style="display: none;">
    <button type="button" onclick="backOptionFunction()" class="">Back</button>
  </div>

  <!--Menu Tabs-->
  <div id="menuSection">
    <div class="row">

      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="card" style="width: 18rem; margin-bottom:30px; width:100%">
          <img class="card-img-top" src="{{asset('images/img_roofline_2.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Roofline</h5>
            <p class="card-text">Ideal for both new homes and replacement projects.</p>
            <button type="button" onclick="rooflineOptionFunction()" class="">View cateloge</button>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="card" style="width: 18rem; margin-bottom:30px; width:100%">
          <img class="card-img-top" src="{{asset('images/img_roofline_Menu.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Roofline Repair</h5>
            <p class="card-text">Ideal for both new homes and replacement projects.</p>
            <button type="button" onclick="rooflineRepairOptionFunction()" class="">View cateloge</button>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="card" style="width: 18rem; margin-bottom:30px; width:100%">
          <img class="card-img-top" src="{{asset('images/img_EPDM_Menu.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">EPDM Roofs</h5>
            <p class="card-text">Ideal for both new homes and replacement projects.</p>
            <button type="button" onclick="epdmOptionFunction()" class="">View cateloge</button>
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
        <hr style="width:50%; height:2px; border-top: 2px solid #cf1f2e;">
        <div class="text-center">
          <div class="container1">
            <h2>Fascia Board</h2>
            <img id="expandedImg1" style="width:35%" src="{{asset('images/FasciaBoardCream.jpg')}}" >
            <div id="imgtext1">Cream</div>
          </div>
        </div>

        <div class="col m-auto">
          <div class="row">
            <div class="col text-center" style="padding:0px">
              <img src="{{asset('images/FasciaBoardWhite.jpg')}}" alt="White" style="width:100%" onclick="myFunction1(this);">
            </div>
            <div class="col text-center" style="padding:0px">
              <img src="{{asset('images/FasciaBoardRosewood.jpg')}}" alt="Rosewood" style="width:100%" onclick="myFunction1(this);">
            </div>
            <div class="col text-center" style="padding:0px">
              <img src="{{asset('images/FasciaBoardIrishOak.jpg')}}" alt="Irish Oak" style="width:100%" onclick="myFunction1(this);">
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
          </div>
        </div>
      </div>



      <!--Soffit Styles-->
      <div class="col-sm-12 col-md-6" style="padding-right:40px;">
        <hr style="width:50%; height:2px; border-top: 2px solid #cf1f2e;">
        <div class="text-center">
          <div class="container2">
            <h2>Soffit Styles</h2>
            <img id="expandedImg2" style="width:35%" src="{{asset('images/soffit_Board_Anthracite_Grey.jpg')}}" >
            <div id="imgtext2">Anthracite Grey</div>
          </div>
        </div>

        <div class="col m-auto">
          <div class="row">
            <div class="col text-center" style="padding:0px">
              <img src="{{asset('images/soffit_Board_White.jpg')}}" alt="White" style="width:100%" onclick="myFunction2(this);">
            </div>
            <div class="col text-center" style="padding:0px">
              <img src="{{asset('images/soffit_Board_Anthracite_Grey.jpg')}}" alt="Anthracite Grey" style="width:100%" onclick="myFunction2(this);">
            </div>
            <div class="col text-center" style="padding:0px">
              <img src="{{asset('images/soffit_Board_Black.jpg')}}" alt="Black" style="width:100%" onclick="myFunction2(this);">
            </div>
            <div class="col text-center" style="padding:0px">
              <img src="{{asset('images/soffit_Board_White_Ash.jpg')}}" alt="White Ash" style="width:100%" onclick="myFunction2(this);">
            </div>
            <div class="col text-center" style="padding:0px">
              <img src="{{asset('images/soffit_Board_Cream.jpg')}}" alt="Cream" style="width:100%" onclick="myFunction2(this);">
            </div>
            <div class="col text-center" style="padding:0px">
              <img src="{{asset('images/soffit_Board_Golden_Oak.jpg')}}" alt="Golden Oak" style="width:100%" onclick="myFunction2(this);">
            </div>
            <div class="col text-center" style="padding:0px">
              <img src="{{asset('images/soffit_Board_Irish_Oak.jpg')}}" alt="Irish Oak" style="width:100%" onclick="myFunction2(this);">
            </div>
            <div class="col text-center" style="padding:0px">
              <img src="{{asset('images/soffit_Board_Rosewood.jpg')}}" alt="Rosewood" style="width:100%" onclick="myFunction2(this);">
            </div>
          </div>
        </div>
      </div>

      <!--Cladding Styles-->
      <div class="col-sm-12 col-md-6" style="padding-right:40px;">
        <hr style="width:50%; height:2px; border-top: 2px solid #cf1f2e;">
        <div class="text-center">
          <div class="container2">
            <h2>Soffit Styles</h2>
            <img id="expandedImg2" style="width:35%" src="{{asset('images/soffit_Board_Anthracite_Grey.jpg')}}" >
            <div id="imgtext2">Anthracite Grey</div>
          </div>
        </div>

        <div class="col m-auto">
          <div class="row">
            <div class="col text-center" style="padding:0px">
              <img src="{{asset('images/soffit_Board_White.jpg')}}" alt="White" style="width:100%" onclick="myFunction2(this);">
            </div>
            <div class="col text-center" style="padding:0px">
              <img src="{{asset('images/soffit_Board_Anthracite_Grey.jpg')}}" alt="Anthracite Grey" style="width:100%" onclick="myFunction2(this);">
            </div>
            <div class="col text-center" style="padding:0px">
              <img src="{{asset('images/soffit_Board_Black.jpg')}}" alt="Black" style="width:100%" onclick="myFunction2(this);">
            </div>
            <div class="col text-center" style="padding:0px">
              <img src="{{asset('images/soffit_Board_White_Ash.jpg')}}" alt="White Ash" style="width:100%" onclick="myFunction2(this);">
            </div>
            <div class="col text-center" style="padding:0px">
              <img src="{{asset('images/soffit_Board_Cream.jpg')}}" alt="Cream" style="width:100%" onclick="myFunction2(this);">
            </div>
            <div class="col text-center" style="padding:0px">
              <img src="{{asset('images/soffit_Board_Golden_Oak.jpg')}}" alt="Golden Oak" style="width:100%" onclick="myFunction2(this);">
            </div>
            <div class="col text-center" style="padding:0px">
              <img src="{{asset('images/soffit_Board_Irish_Oak.jpg')}}" alt="Irish Oak" style="width:100%" onclick="myFunction2(this);">
            </div>
            <div class="col text-center" style="padding:0px">
              <img src="{{asset('images/soffit_Board_Rosewood.jpg')}}" alt="Rosewood" style="width:100%" onclick="myFunction2(this);">
            </div>
          </div>
        </div>
      </div>


      </div>

    </div>
  </div>

  <!--Roofline Repair Section-->
  <div id="rooflineRepairSection" style="display: none;">
    <h1>Roofline Repair</h1>
  </div>

  <!--EPDM Section-->
  <div id="epdmSection" style="display: none;">
    <h1>EPDM</h1>
  </div>






@endsection
