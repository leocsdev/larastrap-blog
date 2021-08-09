@extends('layouts.app')

@section('content')
    <section class="show container">
        <div class="row">
            <div class="col">
                <h1 class="text-center py-5 m-0">{{ $post->title }}</h1>

                <img class="img-fluid" src="{{ $post->cover_image }}" alt="{{ $post->title }}">

                <div class="my-5">
                    {!! html_entity_decode($post->body) !!}
                </div>

                <div class="actions d-flex justify-content-between">
                    <a href="/" class="btn btn-secondary">Back</a>

                    <div class="d-flex justify-content-end">
                        <form action="/posts/{{ $post->id }}/edit" method="get">
                            @csrf

                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>

                        <form action="/posts/{{ $post->id }}" method="post" class="ml-3">
                            @csrf

                            @method('DELETE')

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                Delete
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete this post?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
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
