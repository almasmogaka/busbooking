@extends('welcome')

@section('content')
<div class="container"><hr>		
    {!! Form::open(['route' => 'book.store']) !!}  
			<div class="row">
				<div class="col-sm-3 offset-3 form-group">
                    {{ Form::label('seat',"Book a Seat:") }}
                    <select class="form-control" name="seat">
                    @for($i=1; $i <= $bus->seats; $i++) 
                        <option value="{{ $i }}"> Seat Number :{{$i}}</option>
                    @endfor 
                    </select> 
				</div>
				<div class="col-sm-3 form-group">
				{{ Form::label('bus_id',"BUS ID:") }} 
				{{ Form::Number('bus_id',$bus->id, array('class' => 'form-control', 'required'=>'')) }}
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 offset-3 form-group">
				{{ Form::label('name',"LastName:") }} 
				{{ Form::text('name',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}
				</div>
				<div class="col-sm-3 form-group">
				{{ Form::label('phone',"Phone Number:") }} 
				{{ Form::tel('phone',null, array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-6 offset-3 form-group">
				{{ Form::submit('BOOK SEAT', array('class' => 'btn btn-success btn-block', 'style'=> 'margin-top: 20px')) }}
				</div>
			</div>			
		{!! Form::close() !!}
	</div> 	
@stop