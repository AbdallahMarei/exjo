@extends('layouts.admin')

@section('content')
@if ($message = session('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
@endif
    <div class="card">
        <div class="card-header">
            <h1>Category Page</h1>
            <a href="{{ url('add-category') }}" class="btn btn-primary">Add Category!</a>
            <hr>
        </div>
        <div class="card-body">
            <table class="table table-responsive table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($category as $item)
                    <tr class="border">
                        <td>{{ $item->id }}</td>
                        <td >{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <img class="w-20" src="{{ asset('/assets/uploads/category/'.$item->image) }}" alt="cat_image">
                        </td>
                        <td>
                            <a href="{{ url('edit-category/'.$item->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ url('delete-category/'.$item->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection