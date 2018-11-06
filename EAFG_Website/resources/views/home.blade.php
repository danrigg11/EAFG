@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                      <div class="row">
                        <div class="col-3 pt-4 mb-4">
                          <div class="">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                              <a class="nav-link active" id="v-pills-details-tab" data-toggle="pill" href="#v-pills-details" role="tab" aria-controls="v-pills-details" aria-selected="true">Details</a>
                              <a class="nav-link" id="v-pills-photos-tab" data-toggle="pill" href="#v-pills-photos" role="tab" aria-controls="v-pills-photos" aria-selected="false">Photos</a>
                              <a class="nav-link" id="v-pills-reviews-tab" data-toggle="pill" href="#v-pills-reviews" role="tab" aria-controls="v-pills-reviews" aria-selected="false">Reviews</a>
                              <a class="nav-link mt-4" id="v-pills-add-tab" data-toggle="pill" href="#v-pills-add" role="tab" aria-controls="v-pills-add" aria-selected="false">Add Content</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-9 pt-4">
                          <!-- Details -->
                          <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-details" role="tabpanel" aria-labelledby="v-pills-details-tab">
                              <div class="card">
                                <div class="card-header">Details</div>
                                @foreach ($details as $key)
                                  <p>{{$key['company_name']}}</p>
                                @endforeach
                                <div class="card-body">
                                  <h5 class="card-title">Company Name</h5>
                                  <div class="alert alert-warning" role="alert">
                                    <p class="card-text">company name</p>
                                  </div>
                                  <a href="#" class="btn btn-primary">Edit</a>
                                </div>
                                <hr>
                                <div class="card-body">
                                  <h5 class="card-title">Company Number</h5>
                                  <div class="alert alert-warning" role="alert">
                                    <p class="card-text">01603211467</p>
                                  </div>
                                  <a href="#" class="btn btn-primary">Edit</a>
                                </div>
                                <hr>
                                <div class="card-body">
                                  <h5 class="card-title">Company Email</h5>
                                  <div class="alert alert-warning" role="alert">
                                    <p class="card-text">enquiries@eastanglianfasciaandguttering.com</p>
                                  </div>
                                  <a href="#" class="btn btn-primary">Edit</a>
                                </div>
                                <hr>
                                <div class="card-body">
                                  <h5 class="card-title">Company Hours</h5>
                                  <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Day</th>
                                        <th scope="col">Hours</th>
                                        <th scope="col"></th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row"></th>
                                        <td>Monday</td>
                                        <td><span class="alert-warning p-2">8 - 5</span></td>
                                        <td><a href="#" class="btn btn-primary">Edit</a></td>
                                      </tr>
                                      <tr>
                                        <th scope="row"></th>
                                        <td>Tuesday</td>
                                        <td><span class="alert-warning p-2">8 - 5</span></td>
                                        <td><a href="#" class="btn btn-primary">Edit</a></td>
                                      </tr>
                                      <tr>
                                        <th scope="row"></th>
                                        <td>Wednesday</td>
                                        <td><span class="alert-warning p-2">8 - 5</span></td>
                                        <td><a href="#" class="btn btn-primary">Edit</a></td>
                                      </tr>
                                      <tr>
                                        <th scope="row"></th>
                                        <td>Thursday</td>
                                        <td><span class="alert-warning p-2">8 - 5</span></td>
                                        <td><a href="#" class="btn btn-primary">Edit</a></td>
                                      </tr>
                                      <tr>
                                        <th scope="row"></th>
                                        <td>Friday</td>
                                        <td><span class="alert-warning p-2">8 - 5</span></td>
                                        <td><a href="#" class="btn btn-primary">Edit</a></td>
                                      </tr>
                                      <tr>
                                        <th scope="row"></th>
                                        <td>Saturday</td>
                                        <td><span class="alert-warning p-2">1 - 4</span></td>
                                        <td><a href="#" class="btn btn-primary">Edit</a></td>
                                      </tr>
                                      <tr>
                                        <th scope="row"></th>
                                        <td>Sunday</td>
                                        <td><span class="alert-warning p-2">Closed</span></td>
                                        <td><a href="#" class="btn btn-primary">Edit</a></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                }
                                </div>
                              </div>
                            </div>

                            <!-- Photos -->
                            <div class="tab-pane fade" id="v-pills-photos" role="tabpanel" aria-labelledby="v-pills-photos-tab">
                              <div class="card">
                                <div class="card-header">Photos</div>
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-4">
                                      <div class="card" >
                                        <img class="card-img-top img-fluid" src="https://img1.wsimg.com/isteam/ip/5d251245-ef0a-4f2e-85e5-02de012e7881/f2a8cddf-9ca5-42cd-b715-97722a822614.jpeg/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:400,h:500,cg:true,m/cr=w:800,h:500,a:cc" alt="Card image cap">
                                        <div class="card-body text-center">

                                          <a href="#" class="btn btn-danger">Delete</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-4">
                                      <div class="card" >
                                        <img class="card-img-top img-fluid" src="https://img1.wsimg.com/isteam/ip/5d251245-ef0a-4f2e-85e5-02de012e7881/f2a8cddf-9ca5-42cd-b715-97722a822614.jpeg/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:400,h:500,cg:true,m/cr=w:800,h:500,a:cc" alt="Card image cap">
                                        <div class="card-body text-center">

                                          <a href="#" class="btn btn-danger">Delete</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                </div>
                              </div>
                            </div>

                            <!-- Reviews -->
                            <div class="tab-pane fade" id="v-pills-reviews" role="tabpanel" aria-labelledby="v-pills-reviews-tab">
                              <div class="card">
                                <div class="card-header">Reviews</div>
                                <div class="card-body">

                                  <div class="card w-100 mb-2">
                                    <div class="card-body">
                                      <div class="row">
                                        <div class="col-2">
                                          <h5 class="card-title float-left">Name</h5>
                                        </div>
                                        <div class="col">
                                          <div class="alert alert-warning w-100" role="alert">
                                            <p class="card-text">Mrs Baker</p>
                                          </div>
                                        </div>
                                      </div>
                                      <h5 class="card-title">Review</h5>
                                      <div class="alert alert-warning" role="alert">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                      </div>
                                      <a href="#" class="btn btn-primary">Edit</a>
                                      <a href="#" class="btn btn-danger">Delete</a>
                                    </div>
                                  </div>

                                  <div class="card w-100 mb-2">
                                    <div class="card-body">
                                      <div class="row">
                                        <div class="col-2">
                                          <h5 class="card-title float-left">Name</h5>
                                        </div>
                                        <div class="col">
                                          <div class="alert alert-warning w-100" role="alert">
                                            <p class="card-text">Mrs Baker</p>
                                          </div>
                                        </div>
                                      </div>
                                      <h5 class="card-title">Review</h5>
                                      <div class="alert alert-warning" role="alert">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                      </div>
                                      <a href="#" class="btn btn-primary">Edit</a>
                                      <a href="#" class="btn btn-danger">Delete</a>
                                    </div>
                                  </div>

                                </div>
                              </div>

                            </div>

                            <!-- Add -->
                            <div class="tab-pane fade" id="v-pills-add" role="tabpanel" aria-labelledby="v-pills-add-tab">
                              <div class="card">
                                <div class="card-header">Add Content</div>
                                <div class="card-body">

                                  <div class="card w-100 mb-2">
                                    <div class="card-body">
                                          <h5 class="card-title">Add Photo</h5>
                                          <div class="alert alert-warning" role="alert">
                                            <p class="card-text">Photos for Project Gallery</p>
                                          </div>
                                      <a href="#" class="btn btn-primary">Add</a>
                                    </div>
                                  </div>

                                  <div class="card w-100 mb-2">
                                    <div class="card-body">
                                          <h5 class="card-title">Add Review</h5>
                                          <div class="alert alert-warning" role="alert">
                                            <p class="card-text">Text for Reviews</p>
                                          </div>
                                      <a href="#" class="btn btn-primary">Add</a>
                                    </div>
                                  </div>

                                </div>
                              </div>

                            </div>



                          </div>
                        </div>
                      </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
