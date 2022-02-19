@extends('layouts.admin')

@section('content')
@if ($message = session('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
@endif
    <div class="card">
        <div class="card-header">
            <h1>Reservations Page</h1>
            <a href="{{ url('reservations') }}" class="btn btn-primary">Pending reservations</a>

            <hr>
        </div>
        <div class="card-body table-responsive ">
            <table class="table table-bordered table-striped overflow-auto">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Reserved Name</th>
                        <th>User Name</th>
                        <th>Trip</th>
                        <th>Phone</th>
                        <th>Number of Passengers</th>
                        <th>Price</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody >
                    @foreach($reservation as $item)
                    <tr class="border">
                        <td>{{ $item->id }}</td>
                        <td >{{ $item->name }}</td>
                        <td >{{ $item->user->name }}</td>
                        <td >{{ $item->trip->name }}</td>
                        <td >{{ $item->phone }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->totalPrice }}</td>
                        <td>{{ $item->status }}</td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection