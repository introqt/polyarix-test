@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="title">Edit your post</h2>
        </div>

        <div class="row justify-content-center">
            <form method="POST" action="/posts/{{ $post->id }}" class="col-md-6">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    @if($errors->any())
                        @foreach($errors->all() as $e)
                            <div class="row col-md-12">
                                <div class="alert alert-danger">
                                    <span>{{ $e }}</span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Enter title here"
                           required value="{{ $post->title }}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Enter description here"
                              required rows="10">{{ $post->description }}</textarea>
                </div>
                <button class="btn btn-success" type="submit">Save</button>
                <a href="/home" class="btn btn-danger">
                    Cancel
                </a>
            </form>
        </div>
    </div>
@endsection
