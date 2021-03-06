@extends('layouts.app')

@section('content')
    <section class="container">
        @if (count($posts) == 0)
            <h3>
                No blog posts to show, please
                <a href="/posts/create">
                    <span>create a post</span>
                </a>
            </h3>
        @else
            {{-- Session not working will check later --}}
            @if (Session::has('success_message'))
                <p>{{ Session::get('success_message') }}</p>
            @endif

            {{-- Show if auth user is logged in --}}
            @if (Auth::check())
                <div class="d-flex justify-content-end">
                    <a href="/posts/create">
                        <h4>Create Blog Post</h4>
                    </a>
                </div>
            @endif


            <h1 class="text-center my-5">Blog Posts</h1>

            <div class="row justify-content-center">
                @foreach ($posts as $post)
                    <div class="col-md-6 col-lg-4 p-3">
                        <a href="/posts/{{ $post->id }}">
                            <div class="card h-100">
                                <img class="card-img-top" src="{{ $post->cover_image }}" alt="{{ $post->title }}">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3 class="text-center">{{ $post->title }}</h3>

                                        <h5 class="text-center mt-4"><em>by {{ $post->user->name }}</em></h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center">
                {!! $posts->links() !!}
            </div>
        @endif
    </section>
@endsection
