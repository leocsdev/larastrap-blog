@extends('layouts.app')

@section('content')
    <section class="container">
        <div class="row">
            <div class="col">

                <h1 class="text-center py-5 m-0">{{ $post->title }}</h1>

                <img class="img-fluid" src="{{ $post->cover_image }}" alt="{{ $post->title }}">

                <div class="my-5">
                    {!! html_entity_decode($post->body) !!}
                </div>
            </div>
        </div><!-- row -->
    </section>
@endsection

{{-- OTHER LINKS --}}

{{-- <form action="/posts/{{ $post->id }}/edit" method="get">
    @csrf
    <button type="submit">Edit</button>
</form> --}}

{{-- <form action="/posts/{{ $post->id }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form> --}}


{{-- <a href="{{ url()->previous() }}">
    <button>Cancel</button>
</a> --}}
