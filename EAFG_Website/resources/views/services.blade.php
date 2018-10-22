@extends('master')
@section('content')

  <div class="container-fluid">

    <div class="row">
      <hr style="width:50%; height:2px; border-top: 2px solid #cf1f2e;">
      <div class="col-md-8 col-sm-12 m-auto">
        <div class="">
          <h2 class="text-center">Fascia Boards</h2>
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
        </div>



        <hr style="width:100%; height:2px; border-top: 2px solid #cf1f2e; margin-bottom:05%">
        <hr style="width:50%; height:2px; border-top: 2px solid #cf1f2e; margin-top:05%">
        <div class="col-md-8 col-sm-12 m-auto">
          <div class="">
            <h2 class="text-center">Guttering Styles</h2>
          </div>
          <div class="text-center">
            <div class="container2">
              <img id="expandedImg2" style="width:35%" src="{{asset('images/GutteringHalfRound.jpeg')}}" >
              <div id="imgtext2">Half Round</div>
            </div>
          </div>
        </div>
        <hr style="width:50%; height:2px; border-top: 2px solid #cf1f2e;">

          <div class="col-7 m-auto">
            <!-- The four columns -->
            <div class="row">
              <div class="col text-center" style="padding:0px">
                <img src="{{asset('images/GutteringCastIron.jpeg')}}" alt="Cast Iron Effect" style="width:100%" onclick="myFunction2(this);">
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
          </div>

          <hr style="width:100%; height:2px; border-top: 2px solid #cf1f2e;">

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


@endsection
