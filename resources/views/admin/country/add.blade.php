@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add Country</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('insert-country') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3" >
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col-mid-6">
                        <input type="file" name="image" class="form-control">
                        <br>
                    </div>
                    <div class="col-mid-12">
                        <button type="submit" class="btn btn-primary">Add Country</button>
                    </div>


                </div>
            </form>
        </div>
    </div>
@endsection