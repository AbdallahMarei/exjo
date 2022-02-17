@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Category</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3" >
                        <label for="">Name</label>
                        <input value="{{$category->name}}" type="text" class="form-control" name="name">
                    </div>
                    <div class="col-mid-12 mb-3">
                        <label for="">Description</label>
                        <textarea class="form-control" name="description"  rows="5">{{ $category->description }}</textarea>
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">Status</label>
                        <input {{ $category->status == "1" ? 'checked' : ''}} type="checkbox" name="status">
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">Popular</label>
                        <input {{ $category->popular == "1" ? 'checked' : ''}} value="{{$category->popular}}" type="checkbox" name="popular">
                    </div>
                    <div class="col-mid-12 mb-3">
                        <label for="">Meta Title</label>
                        <input value="{{$category->meta_title}}" type="text" class="form-control" name="meta_title">
                    </div>
                    <div class="col-mid-12 mb-3">
                        <label for="">Meta Keywords</label>
                        <textarea type="text" rows="3" class="form-control" name="meta_keywords">{{ $category->meta_keywords }}</textarea>
                    </div>
                    <div class="col-mid-12 mb-3">
                        <label for="">Meta Description</label>
                        <textarea type="text" rows="3" class="form-control" name="meta_description">{{ $category->meta_descrip }}</textarea>
                    </div>
                    @if($category->image)
                        <div class="col-mid-3 mb-3" >
                            <label for="">Image</label>
                            <img class="w-15" src="{{ asset('assets/uploads/category/'.$category->image) }}" alt="cat_img" />
                        </div>
                    @endif
                    <div class="col-mid-12">
                        <input value="{{ asset('assets/uploads/category/'.$category->image) }}" type="file" name="image" class="form-control">
                    </div>
                    <div class="col-mid-12">
                        <button type="submit" class="btn btn-primary">Add Category</button>
                    </div>


                </div>
            </form>
        </div>
    </div>
@endsection