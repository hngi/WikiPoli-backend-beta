@extends('layouts.app')
@section('content')
        <div class="d-flex justify-content-between align-items-baseline">
            <h1 class="pl-4">Posts</h1>
            <a href="{{ URL::to('/posts/create-post') }}" class="btn btn-danger">Create New Post</a>
        </div>
        <div class="card m-4 p-4">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    image here
                </div>
                <div class="col-md-8 col-sm-8">
                    Comments here
                </div>
            </div>
        </div
    </div>
@endsection