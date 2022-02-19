@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Trip</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-trip/'.$trip->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3" >
                        <label for="">Name</label>
                        <input value="{{ $trip->name }}"  type="text" class="form-control" name="name">
                        <hr>
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">Country</label>
                        <select name="cat_id" class="form-control">
                            @foreach($country as $item )
                            <option {{ $trip->cat_id == $item->id ? 'selected' : '' }} value="{{ $item->id }} ">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        <hr>
                    </div>
                    <div class="col-mid-12 mb-3">
                        <label for="">Brief</label>
                        <textarea class="form-control" name="brief"  rows="5">{{ $trip->brief }}"</textarea>
                        <hr>
                    </div>
                    <div class="col-mid-12 mb-3">
                        <label for="">Description</label>
                        <textarea class="form-control" name="description"  rows="5">{{ $trip->description }}"</textarea>
                        <hr>
                    </div>
                    <div class="col-md-12 mb-3" >
                        <label for="">Trending</label>
                        <input {{ $item->trending == 1? 'checked':'';}} type="checkbox" name="trending">
                        <hr>
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">Capacity</label>
                        <input value="{{ $trip->capacity }}" type="number" name="capacity">
                        <hr>
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">Price</label>
                        <input value="{{ $trip->price }}" type="number" name="price">
                        <hr>
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">Date</label>
                        <input value="{{ $trip->date }}" type="date" name="date">
                        <hr>
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">Days</label>
                        <input value="{{ $trip->days }}" type="number" name="days">
                        <hr>
                    </div>
                    <div class="col-mid-12 mb-3">
                        <label for="">Meta Title</label>
                        <input value="{{ $trip->meta_title }}" type="text" class="form-control" name="meta_title">
                        <hr>
                    </div>
                    <div class="col-mid-12 mb-3">
                        <label for="">Meta Keywords</label>
                        <textarea type="text" rows="3" class="form-control" name="meta_keywords">{{ $trip->meta_keywords }}"</textarea>
                        <hr>
                    </div>
                    <div class="col-mid-12 mb-3">
                        <label for="">Meta Description</label>
                        <textarea type="text" rows="3" class="form-control" name="meta_description">{{ $trip->meta_description }}"</textarea>
                        <hr>
                    </div>
                    <div class="col-mid-6">
                        <input type="file" name="image" class="form-control">
                        <br>
                    </div>
                    <div class="col-mid-12">
                        <button type="submit" class="btn btn-primary">Edit Trip</button>
                    </div>


                </div>
            </form>
        </div>
    </div>
@endsection