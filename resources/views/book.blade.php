@extends('welcome')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="row">
        @foreach($buses as $bus)  
          <div class="col-md-3">
            <div class="card">  
              <img class="card-img-top" src="{{ asset('image/'.$bus->photo) }} " alt="Bus image" style="height:90px">
                <div class="card-body">
                  <p class="card-title">Available Seats:{{$bus->seats}} <span class="fare">KShs.{{$bus->price}} </span> </p>
                  <p class="card-text" style="text-align:center">{{$bus->from}} <span>-{{$bus->to}} </span></p>
                  <p class="card-text" style="text-align:center">Departure Time :{{$bus->depar}} </p>
                  <a href="{{ route('book.create') }}" class="btn btn-primary btn-sm" style="float:right">Book</a>
                </div>
            </div>
          </div>    
        @endforeach
      </div>
    </div>
  </div>
</div>
@stop