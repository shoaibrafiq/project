@extends('admin.layout.admin')

@section('content')

  <div style="margin-left:250px;  moz-box-shadow: 1px 2px 4px rgba(0, 0, 0,0.5);
  -webkit-box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
  box-shadow: 1px 2px 4px rgba(0, 0, 0, .5); display: block;"class="col-md-12 col-md-offset-2 row">
              <a  class="navbar-brand"  href="">Categories--</a>

          <!-- Collect the nav links, forms, and other content for toggling -->
<br />
<br />
  <!--  forelse allows you to provide alternate content if you don't have any results for the page to display. this is displaying categories-->
                @if(!empty($categories))
                  @forelse($categories as $category)

                    <h2>  <a href="{{route('category.show',$category->id)}}">{{$category->name}} </a></h2>

                @empty
                  <p>
                    no data
                  </p>
                @endforelse
              @endif

<div>

<!-- when you click on the button a modal and form is shown where you can add a category -->
          <a class="btn btn-primary pull-right navbar-right" data-toggle="modal" href="#category">Add Category</a>
          </div>
              <div class="modal fade" id="category">
                  <div class="modal-dialog">
                    {!! Form::open(['route' => 'category.store', 'method' => 'post']) !!}
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title">Add New</h4>
                          </div>
                          <div class="modal-body">
                              <div class="form-group">
                                  {{ Form::label('name', 'Name') }}
                                  {{ Form::text('name', null, array('class' => 'form-control')) }}
                              </div>


                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                          {!! Form::close() !!}
                      </div><!--modal-content -->
                  </div><!--modal-dialog -->
              </div><!-- modal -->
<br>
<hr />
      <!-- /.container -->
      <!-- displays table, when the admin clicks a category it shows which products are linked to it in a table -->
      @if(isset($products))

         <h3>Products</h3>

         <table class="table table-hover">
         	<thead>
         		<tr>
         			<th>Products</th>
         		</tr>
         	</thead>
         	<tbody>
     @forelse($products as $product)
         <tr><td>{{$product->name}}</td></tr>
         	@empty
             <tr><td>no data</td></tr>
             @endforelse

             </tbody>
         </table>
     @endif
</div>
@endsection
