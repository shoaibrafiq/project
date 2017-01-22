@extends('layout.main-app')
@section('title','jacket')

@section('content')
<br />
<br />
<br />
<br />

                  <div class="thumbnail" >
                      <img src="http://placehold.it/700x350&text=1" class="img-responsive">
                      <div class="col-md-8">
                          <h3><label>$4</label></h3>
                          <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                          </p>
                      </div>
<div style="margin-left:100px;" class="col-xs-12 col-sm-6 col-md-3 pull-right">
                      <div class="caption">

                              <label>
                                  Select Size
                                  <select>
                                      <option value="small">
                                          Small
                                      </option>
                                      <option value="medium">
                                          Medium
                                      </option>
                                      <option value="large">
                                          Large
                                      </option>

                                  </select>
                              </label>


                      </div>

                          <div class="row">

                              <div class="col-md-8 col-sm-8 col-xs-8">
                                  <a href="#" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span> Add to Basket</a>
                              </div>
                          </div>

@stop
