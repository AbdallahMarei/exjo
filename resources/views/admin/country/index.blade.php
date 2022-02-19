@extends('layouts.admin')

@section('content')
@if ($message = session('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
@endif
    <div class="card">
        <div class="card-header">
            <h1>Countries Page</h1>
            <a href="{{ url('add-country') }}" class="btn btn-primary">Add Country!</a>
            <hr>
        </div>
        <div class="card-body">
            <table class="table table-responsive table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Flag</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $counter = 0
                    @endphp
                @foreach($country as $item)
                    <tr class="border">
                        <td>{{ ++$counter }}</td>
                        <td >{{ $item->name }}</td>
                        <td>
                            <img class="w-20" src="{{ asset('/assets/uploads/country/'.$item->flag) }}" alt="cat_image">
                        </td>
                        <td>
                            <a href="{{ url('edit-country/'.$item->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ url('delete-country/'.$item->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection