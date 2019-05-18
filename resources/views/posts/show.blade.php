@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">{{ $post->title }}</div>
                <div class="card-body">{{ $post->description }}</div>
                <div class="card-footer">Author: {{ $post->user->name }}. Created at {{ $post->created_at }}. Last updated
                    at {{ $post->updated_at }}.</div>
                @include('layouts.buttons')
            </div>
        </div>
    </div>
@endsection
