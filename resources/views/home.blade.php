@extends('layouts.app')

@section('content')
    <section class="container">
        @if (count($posts) == 0)
            <h3>
                No blog posts to show, please
                <a href="/posts/create">
                    <span>add a post</span>
                </a>
            </h3>
        @else
            {{-- Session not working will check later --}}
            @if (Session::has('success_message'))
                <p>{{ Session::get('success_message') }}</p>
            @endif

            <h2 class="text-center my-5">Blog Posts</h2>

            <div class="row justify-content-center">
                @foreach ($posts as $post)
                    <div class="col-md-6 col-lg-4 p-3">
                        <a href="/posts/{{ $post->id }}">
                            <div class="card h-100">
                                <img class="card-img-top" src="{{ $post->cover_image }}" alt="{{ $post->title }}">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3 class="text-center">{{ $post->title }}</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </section>
@endsection
