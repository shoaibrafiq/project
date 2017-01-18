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
<hr />
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              @forelse($jackets->chunk(4) as $chunk) <!-- using chunk method to output only 4 products from the database -->
                @foreach($chunk as $jacket)
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail" >
                        <img style="width:300px; height:300px;" src="{{url('images',$jacket->image)}}" class="img-responsive">
                        <div class="caption">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-4 price">
                                    <p style="margin:0px auto;"><label>{{$jacket->name}}</label></p>
                                      <h3 style="margin:5px auto;"><label>{{$jacket->price}}</label></h3>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                  <br />
                                  <br />
                                    <a href="{{route('jacket')}}" class="btn btn-success btn-product">View Jacket</a>
                                </div>
                            </div>

                            <p> </p>
                        </div>
                    </div>
                </div>
              @endforeach
              @empty
                <h3>No Jackets to Display here</h3>
              @endforelse

            </div>

        </div>
    </div>


@endsection
