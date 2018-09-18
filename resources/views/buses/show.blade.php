@extends('admin')

@section('content')
<div class="container"><hr>		
        {!! Form::open(array('route' => 'bus.store')) !!}
			<div class="row">
				<div class="col-sm-3 offset-3 form-group">
                    {{ Form::label('seats',"Book a Seat:") }}
                    <select class="form-control" name="seats">
                    @for($i=1; $i <= $bus->seats; $i++) 
                        <option value="{{ $i-1 }}"> Seat Number :{{$i}}</option>
                    @endfor 
                    </select> 
				</div>
				<div class="col-sm-3 form-group">
				{{ Form::label('idno',"ID Number:") }} 
				{{ Form::Number('idno',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'8','minlength'=>'8')) }}
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 offset-3 form-group">
				{{ Form::label('name',"Name:") }} 
				{{ Form::text('name',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}
				</div>
				<div class="col-sm-3 form-group">
				{{ Form::label('phone',"Phone Number:") }} 
				{{ Form::tel('phone',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-6 offset-3 form-group">
				{{ Form::submit('OK', array('class' => 'btn btn-success btn-block', 'style'=> 'margin-top: 20px')) }}
				</div>
			</div>			
		{!! Form::close() !!}
	</div> 	
@stop