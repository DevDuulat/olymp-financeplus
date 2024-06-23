@extends('layouts.app')

@section('content')
    <section class="blog">
        <div class="row">
            @foreach($posts as $post)
                <div class="column-three">
                    <div class="card-dark">
                        <img src="{{ asset('storage/' . $post->cover_photo_path) }}" class="card-img-top" alt="{{ $post->photo_alt_text }}">
                        <div class="card-body">
                            <a href="{{ route('post.show', $post->slug) }}" class="card-link">
                                <h5 class="card-title text-white">
                                    {{ $post->title }}
                                </h5>
                            </a>
                            <p class="card-text text-muted">
                                {!! $post->sub_title !!}
                            </p>
                            <a href="{{ route('post.show', $post->slug) }}" class="btn btn-link text-accent p-0">Читать далее &rarr;</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
