@extends('admin')

@section('content')
<div class="container">
@include('errors.feedback')
    <table class="table table-bordered table-hover" id="bus">
        <thead>
        <tr>
            <th>Number</th>
            <th>Name</th>
            <th>From</th>
            <th>To</th>
            <th>Departure</th>
            <th>Seats</th>
            <th>Price</th>
            <th>Action</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($buses as $bus)
                <tr>
                    <td>{{ $bus->no }}</td>
                    <td>{{ $bus->name }}</td>
                    <td>{{ $bus->from }}</td>
                    <td>{{ $bus->to }}</td>
                    <td>{{ $bus->depar }}</td>
                    <td>{{ $bus->seats }}</td>
                    <td>{{ $bus->price }}</td>
                    <td>
                    <a href="{{ route('bus.edit', $bus->id) }}" class="btn btn-primary btn-sm">EDIT</a>
                    </td>
                    <td>
                    {!! Form::open(['route'=> ['bus.destroy', $bus->id], 'method' => 'DELETE']) !!}
                    {{ Form::button('DELETE', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick'=>'return confirm("Are you sure you want to Delete?")'] )  }}
                    {!! Form::close() !!}
                </td>
                </tr>
            @endforeach
        </tbody>

    </table>
    <div class="text-center">
				{!! $buses->links(); !!}
            </div>
</div>
@stop