@extends('layouts.app')

@section('content')
    <div class="container">
        @if(Auth::check())
            <div class="row">
                <div class="col-md-4">
                    <a href="{{ route('posts.create') }}">
                        <button class="btn btn-success">Create post</button>
                    </a>
                </div>
            </div>
            <br>
        @endif

        <div class="row justify-content-center">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            @if ($posts->isNotEmpty())
                @foreach($posts as $post)
                    <div class="col-md-4">
                        <div class="card" style="margin-bottom: 10px;">
                            <div class="card-header">
                                <a href="/posts/{{$post->id}}">{{ $post->title }}</a>
                            </div>

                            <div class="card-body">
                                <p>{{ $post->description }}</p>
                                <br>
                                <p>Posted by {{ $post->user->name }} {{ $post->created_at }}</p>
                            </div>

                            @include('layouts.buttons')
                        </div>
                    </div>
                @endforeach
            @else
                <h1>No posts here yet!</h1>
            @endif
        </div>

        @if ($posts->isNotEmpty())
            <br>
            <div class="row justify-content-center">{{ $posts->render() }}</div>
        @endif
    </div>
@endsection
