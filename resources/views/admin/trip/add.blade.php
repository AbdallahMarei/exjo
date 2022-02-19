@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add Trip</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('insert-trip') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3" >
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name">
                        <hr>
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">Country</label>
                        <select name="cat_id" class="form-control">
                            @foreach($country as $item )
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        <hr>
                    </div>
                    <div class="col-mid-12 mb-3">
                        <label for="">Brief</label>
                        <textarea class="form-control" name="brief"  rows="5"></textarea>
                        <hr>
                    </div>
                    <div class="col-mid-12 mb-3">
                        <label for="">Description</label>
                        <textarea class="form-control" name="description"  rows="5"></textarea>
                        <hr>
                    </div>
                    <div class="col-md-12 mb-3" >
                        <label for="">Trending</label>
                        <input type="checkbox" name="trending">
                        <hr>
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">Capacity</label>
                        <input type="number" name="capacity">
                        <hr>
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">Price</label>
                        <input type="number" name="price">
                        <hr>
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">Date</label>
                        <input type="date" name="date">
                        <hr>
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">Days</label>
                        <input type="number" name="days">
                        <hr>
                    </div>
                    <div class="col-mid-12 mb-3">
                        <label for="">Meta Title</label>
                        <input type="text" class="form-control" name="meta_title">
                        <hr>
                    </div>
                    <div class="col-mid-12 mb-3">
                        <label for="">Meta Keywords</label>
                        <textarea type="text" rows="3" class="form-control" name="meta_keywords"></textarea>
                        <hr>
                    </div>
                    <div class="col-mid-12 mb-3">
                        <label for="">Meta Description</label>
                        <textarea type="text" rows="3" class="form-control" name="meta_description"></textarea>
                        <hr>
                    </div>
                    <div class="col-mid-6">
                        <input type="file" name="image" class="form-control">
                        <br>
                    </div>
                    <div class="col-mid-12">
                        <button type="submit" class="btn btn-primary">Add Trip</button>
                    </div>


                </div>
            </form>
        </div>
    </div>
@endsection