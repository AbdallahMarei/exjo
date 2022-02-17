@extends('layouts.admin')

@section('content')
@if ($message = session('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
@endif
    <div class="card">
        <div class="card-header">
            <h1>Trips Page</h1>
            <a href="{{ url('add-trip') }}" class="btn btn-primary">Add Trip!</a>
            <hr>
        </div>
        <div class="card-body table-responsive ">
            <table class="table table-bordered table-striped overflow-auto">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Country</th>
                        <th>Brief</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Date</th>
                        <th>Days</th>
                        <th>Capacity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody >
                    @foreach($trip as $item)
                    <tr class="border">
                        <td>{{ $item->id }}</td>
                        <td >{{ $item->name }}</td>
                        <td >{{ $item->country->name }}</td>
                        <td >{{ $item->brief }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <img class="w-100" src="{{ asset('/assets/uploads/trip/'.$item->image) }}" alt="cat_image">
                        </td>
                        <td>{{ $item->price }}</td>
                        <td >{{ $item->date }}</td>
                        <td >{{ $item->days }}</td>
                        <td>{{ $item->capacity }}</td>
                        <td>
                            <a href="{{ url('edit-trip/'.$item->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ url('delete-trip/'.$item->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection