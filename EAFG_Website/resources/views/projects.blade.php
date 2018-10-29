@extends('master')
@section('content')
  <section class="">
    <div class="container-fluid mt-4">
      <div class="row">

        <!--Image While loop -->
        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 xl-2 mb-3">
          <div class="card border-secondary" style="">
            <!-- Button trigger modal -->
            <a href="#" data-toggle="modal" data-target="#exampleModal1"><img class="card-img-top d-block w-100" src="{{asset('images/IMG_20181024_122606.jpg')}}" alt="Fascia Norwich"></a>
          </div>
        </div>

        <!--Image While loop -->
        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 xl-2 mb-3">
          <div class="card border-secondary" style="">
            <!-- Button trigger modal -->
            <a href="#" data-toggle="modal" data-target="#exampleModal3"><img class="card-img-top d-block w-100" src="{{asset('images/IMG_20180926_112134.jpg')}}" alt="Fascia Norwich"></a>
          </div>
        </div>

        <!--Image While loop -->
        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 xl-2 mb-3">
          <div class="card border-secondary" style="">
            <!-- Button trigger modal -->
            <a href="#" data-toggle="modal" data-target="#exampleModal2"><img class="card-img-top d-block w-100" src="{{asset('images/IMG_20180926_112049.jpg')}}" alt="Fascia Norwich"></a>
          </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <img class="card-img-top d-block w-100" src="{{asset('images/IMG_20181024_122606.jpg')}}" alt="#">
              </div>
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <img class="card-img-top d-block w-100" src="{{asset('images/IMG_20180926_112134.jpg')}}" alt="#">
              </div>
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <img class="card-img-top d-block w-100" src="{{asset('images/IMG_20180926_112049.jpg')}}" alt="#">
              </div>
            </div>
          </div>
        </div>

      </div>

        <!-- Pagination -->
        <div class="row">
          <div class="col-12">
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
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
