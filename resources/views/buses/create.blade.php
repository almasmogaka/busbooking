@extends('welcome')

@section('content')
<div class="container">
		<h1>create new post</h1>
		<hr>
		{!! Form::open(array('route' => 'bus.store', 'files' => true)) !!}

			{{ Form::label('name','Bus Name:') }}
			{{ Form::text('name',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}

			{{ Form::label('from',"From:") }} 
			{{ Form::text('from',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}
			
			{{ Form::label('to',"To:") }} 
			{{ Form::text('to',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}

			{{ Form::label('depar',"Departure Time:") }} 
			{{ Form::text('depar',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}

			{{ Form::label('featured_img', 'Upload a Bus Photo') }}
			{{ Form::file('featured_img') }}

			{{ Form::label('seats',"Seats Number:") }} 
			{{ Form::text('seats',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}

			{{ Form::label('price',"Post Price:") }} 
			{{ Form::text('price', null, array('class' => 'form-control')) }}

			{{ Form::submit('OK', array('class' => 'btn btn-success btn-lg btn-block', 'style'=> 'margin-top: 20px')) }}
		{!! Form::close() !!}

    </div>
    
@stop