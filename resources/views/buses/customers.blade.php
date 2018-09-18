@extends('admin')

@section('content')
<div class="container">
@include('errors.feedback')
    <table class="table table-bordered table-hover" id="bus">
        <thead>
        <tr>
            <th>Bus ID</th>
            <th>NAME</th>
            <th>PHONE</th>
            <th>SERIAL</th>
            <th></th>            
        </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->bus_id }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>{{ $customer->serial }}</td>                                    
                    <td>
                    {!! Form::open(['route'=> ['customer.destroy', $customer->id], 'method' => 'DELETE']) !!}
                    {{ Form::button('DELETE', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick'=>'return confirm("Are you sure you want to Delete?")'] )  }}
                    {!! Form::close() !!}
                </td>
                </tr>
            @endforeach
        </tbody>

    </table>
    <div class="text-center">
				{!! $customers->links(); !!}
            </div>
</div>
@stop