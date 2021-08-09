@extends('layouts.app')

@section('content')
    <section class="container">
        <h2 class="text-center my-4">Edit Blog Post</h2>

        <form action="/posts/{{ $post->id }}" method="post">
            @csrf
            @method('PUT')

            @if ($errors->any())
                <ul class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                    @foreach ($errors->all() as $error)
                        <li class="mx-4">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $post->title }}">
            </div>

            <div class="form-group">
                <label for="">Cover Image Link</label>
                <input type="text" name="cover_image" class="form-control" value="{{ $post->cover_image }}">
            </div>

            <div class="form-group">
                <label for="body">Content</label>
                <textarea name="body" class="form-control" rows="20">{{ $post->body }}</textarea>
            </div>

            <input type="text" name="user_id" hidden readonly value="{{ Auth::user()->id }}">

            <button type="submit" class="btn btn-primary">Update</button>

            <a href="{{ url()->previous() }}" class="btn btn-secondary">
                Cancel
            </a>
        </form>
    </section>

    <script src="https://cdn.tiny.cloud/1/loe8d7t7rt33e92q3z27xoiibdqk1o9tbwmz4qgynq99kghw/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'advlist autolink lists link image charmap',
        });
    </script>
@endsection
