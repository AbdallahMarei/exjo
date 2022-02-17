@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit country</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-country/'.$country->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3" >
                        <label for="">Name</label>
                        <input value="{{$country->name}}" type="text" class="form-control" name="name">
                    </div>
                    @if($country->image)
                        <div class="col-mid-3 mb-3" >
                            <label for="">Image</label>
                            <img class="w-15" src="{{ asset('assets/uploads/country/'.$country->image) }}" alt="cat_img" />
                        </div>
                    @endif
                    <div class="col-mid-12">
                        <input value="{{ asset('assets/uploads/country/'.$country->image) }}" type="file" name="image" class="form-control">
                    </div>
                    <div class="col-mid-12">
                        <button type="submit" class="btn btn-primary">Edit Country</button>
                    </div>


                </div>
            </form>
        </div>
    </div>
@endsection