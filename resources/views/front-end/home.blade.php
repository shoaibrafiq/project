@extends('layout.main-app')
@section('content')

      <!-- Full Page Image Background Carousel Header -->
      <header id="myCarousel" class="carousel slide">
          <!-- Indicators -->
          <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for Slides -->
          <div class="carousel-inner">
              <div class="item active">
                  <!-- Set the first background image using inline CSS below. -->
                  <div class="fill" style="background-image:url('dist/img/northfaceslider.jpg');"></div>
                  <div class="carousel-caption">
                      <h2>Exclusive Jackets</h2>
                  </div>
              </div>
              <div class="item">
                  <!-- Set the second background image using inline CSS below. -->
                  <div class="fill" style="background-image:url('dist/img/monclerslider.jpg');"></div>
                  <div class="carousel-caption">
                      <h2>Premium Quality</h2>
                  </div>
              </div>
              <div class="item">
                  <!-- Set the third background image using inline CSS below. -->
                  <div class="fill" style="background-image:url('dist/img/armanislider.jpg');"></div>
                  <div class="carousel-caption">
                      <h2>Decent Prices</h2>
                  </div>
              </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="icon-prev"></span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="icon-next"></span>
          </a>

      </header>


    <!-- Page Content -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <h2>Check Out The Latest Stock</h2>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail" >
                        <img src="http://placehold.it/700x350&text=1" class="img-responsive">
                        <div class="caption">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-4 price">
                                    <h3 style="margin:5px auto;"><label>$1</label></h3>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                    <a href="{{route('jacket')}}" class="btn btn-success btn-product">View Jacket</a>
                                </div>
                            </div>

                            <p> </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail" >
                        <img src="http://placehold.it/700x350&text=1" class="img-responsive">
                        <div class="caption">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-4 price">
                                    <h3 style="margin:5px auto;"><label>$2</label></h3>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                      <a href="#" class="btn btn-success btn-product">View Jacket</a>
                                </div>
                            </div>

                            <p> </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail" >
                        <img src="http://placehold.it/700x350&text=1" class="img-responsive">
                        <div class="caption">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-4 price">
                                    <h3 style="margin:5px auto;"><label>$3</label></h3>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                    <a href="#" class="btn btn-success btn-product">View Jacket</a>
                                </div>
                            </div>

                            <p> </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail" >
                        <img src="http://placehold.it/700x350&text=1" class="img-responsive">
                        <div class="caption">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-4 price">
                                    <h3 style="margin:5px auto;"><label>$4</label></h3>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                      <a href="#" class="btn btn-success btn-product">View Jacket</a>
                                </div>
                            </div>

                            <p> </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
  <hr>

@endsection
