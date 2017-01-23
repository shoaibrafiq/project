@extends('layout.main-app')

@section('title','Jackets')
<!--This is the jackets page where the user can see all the jackets added by the admin  -->

@section('content')
<br />
<br />
<br />
<br />
  <div class="container">
      <div class="row">
          <div class="col-md-12">
            <!--  forelse allows you to provide alternate content if you don't have any results for the page to display. this is displaying categories-->

            @forelse($jackets as $jacket)
              <div class="col-xs-10 col-sm-6 col-md-4">
                  <div class="thumbnail" >
                      <img style="width:auto; height:300px;" src="{{url('images',$jacket->image)}}" class="img-responsive">
                      <div class="caption">
                          <div class="row">
                              <div class="col-md-4 col-sm-4 col-xs-4 price">
                                  <p style="margin:0px auto;"><label>{{$jacket->name}}</label></p>
                                    <h3 style="margin:5px auto;"><label>{{$jacket->price}}</label></h3>
                              </div>
                              <div class="col-md-8 col-sm-8 col-xs-8">
                                <br />
                                <br />
                                  <a href="#" class="btn btn-success btn-product">View Jacket</a>
                              </div>
                          </div>

                          <p> </p>
                      </div>
                  </div>
              </div>
            @empty
              <h3>No Jackets to Display here</h3>
            @endforelse

          </div>

      </div>
  </div>


@endsection
