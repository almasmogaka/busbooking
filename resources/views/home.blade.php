@extends('welcome')

@section('content')
<div class="container">
      <div class="row">  
          <div class="col-md-6">
            <img class="center" src="{{ asset('img/N.jpeg') }}" alt="home image">
          </div>
          <div class="col-sm-6 navt"> 
          <div class="navbar navbar-inverse bg-inverse">
          <div class="d-flex justify-content-betIen">
            <div class="col-md-4">
            <a href="{{ route('return') }}" class="navbar-brand active">Return</a>
            </div>
            <div class="col-sm-2">
            <a href="{{ route('oneway') }}" class="navbar-brand">One way</a>
            </div>                
          </div>
        </div>     
      {!! Form::open(array('route' => 'book')) !!}
      <div class="form-row">
      <div class="form-group col-sm-12">
        @yield('form') 
      </div>             
      </div>
      <div class="form-row">
        <div class="form-group col-sm-2 offset-sm-9">
          <!-- {{ Form::submit('Start Booking', array('class' => 'btn btn-success btn-lg')) }} -->
          <a href="{{ route('book') }}" class="navbar-brand active">Start Booking</a>
        </div>
        {!! Form::close() !!}
    </div>
   </div>   
             
      </div>
      
</div>
@stop