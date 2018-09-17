@extends('home') 

@section('form')
<div class="form-group col-md-12">
    {{ Form::label('from','Leaving From:') }}
    {{ Form::text('from',null, array('class' => 'form-control', 'required'=>'')) }}
</div>  
<div class="form-group col-sm-12">
    {{ Form::label('to',"Going To:") }} 
    {{ Form::text('to', null, array('class' => 'form-control')) }}
</div>
<div class="form-group col-sm-12">
<div class="form-row">
    <div class="col-sm-6">
    {{ Form::label('dep',"Departure Date:") }} 
    {{ Form::text('dep', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group col-sm-6">
    {{ Form::label('ret',"Return Date:") }} 
    {{ Form::text('ret', null, array('class' => 'form-control')) }}
</div>
</div> 
 
</div>

@stop

