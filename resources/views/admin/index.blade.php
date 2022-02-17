@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-body">
        <h1>Welcome !</h1>
        <a href="{{ url('users') }}">
            <div class="card">
                <div class="card-head">
                    <h4>Users Registerd</h4>
                    <p>{{$user->count()}}</p>
                </div>
            </div>
        </a>
        <hr>
        <br>
        <a href="{{ url('categories') }}">
            <div class="card">
                <div class="card-head">
                    <h4>Categories</h4>
                    <p>{{$category->count()}}</p>
                </div>
            </div>
        </a>
        <hr>
        <br>
        <a href="{{ url('trips') }}">
            <div class="card">
                <div class="card-head">
                    <h4>Trips Offers</h4>
                    <p>{{$trip->count()}}</p>
                </div>
            </div>
        </a>
    </div>
</div>
@endsection