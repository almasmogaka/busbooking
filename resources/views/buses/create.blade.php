@extends('admin')

@section('content')
<div class="container"><hr>
		<h1 style="text-align:center;">Add new Bus</h1>					
		{!! Form::open(array('route' => 'bus.store', 'files' => true)) !!}
			<div class="row">
				<div class="col-sm-3 offset-3 form-group">
				{{ Form::label('no','Bus Number:') }}
				{{ Form::text('no',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'7','minlength'=>'7')) }}
				</div>			
				<div class="col-sm-3 form-group">
				{{ Form::label('name','Bus Name:') }}
				{{ Form::text('name',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 offset-3 form-group">
				{{ Form::label('from',"From:") }} 
				{{ Form::text('from',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}
				</div>
				<div class="col-sm-3 form-group">
				{{ Form::label('to',"To:") }} 
				{{ Form::text('to',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 offset-3 form-group">
				{{ Form::label('depar',"Departure Time:") }} 
				{{ Form::time('depar',null, array('class' => 'form-control', 'required'=>'')) }}
				</div>
				<div class="col-sm-3 form-group">
				{{ Form::label('featured_img', 'Upload a Bus Photo :') }}
				{{ Form::file('featured_img') }}
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 offset-3 form-group">
				{{ Form::label('seats',"Seats Number:") }} 
				{{ Form::number('seats',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}
				</div>
				<div class="col-sm-3 form-group">
				{{ Form::label('price',"Price:") }} 
				{{ Form::number('price', null, array('class' => 'form-control')) }}
				</div>			
			</div>	
			<div class="row">
				<div class="col-sm-6 offset-3 form-group">
				{{ Form::submit('Add New Bus', array('class' => 'btn btn-success btn-lg btn-block', 'style'=> 'margin-top: 20px')) }}
				</div>
			</div>			
		{!! Form::close() !!}
	</div> 	
@stop