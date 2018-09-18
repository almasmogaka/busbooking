@extends('admin')

@section('content')
<div class="container"><hr>		
        {!! Form::model($bus, ['method' => 'PATCH','route' => ['bus.update', $bus->id]]) !!}
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
				{{ Form::label('photo', 'Upload a Bus Photo :') }}
				{{ Form::file('photo',array('class' => 'form-control')) }}
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
				{{ Form::submit('UPDATE', array('class' => 'btn btn-success btn-lg btn-block', 'style'=> 'margin-top: 20px')) }}
				</div>
			</div>			
		{!! Form::close() !!}
	</div> 	
@stop