@extends('welcome')

@section('content')
<div class="card" style="width:300px">
  <img class="card-img-top" src="{{asset('image/nyamira.jpeg')}} " alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Kisumu-Nairobi</h4>
    <p class="card-text">Departure : 0800hr</p>
    <a href="#" class="btn btn-primary">Book</a>
  </div>
</div>
@stop