@extends('layouts.app')

@section('content')
    <section class="single-post">
        <div class="container py-5">
            <div class="card">
                <img src="{{ asset('storage/' . $post->cover_photo_path) }}" class="card-img-top" alt="{{ $post->photo_alt_text }}">
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <p class="card-subtitle text-muted">{{ $post->sub_title }}</p>
                    <div class="card-text">
                        {!! $post->body !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
