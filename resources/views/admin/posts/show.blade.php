@extends('layouts.app')


@section('content')

    <div class="container d-flex">
        <div class="box-img col-xs-12 col-md-6">
            <img src="{{ $post->img }}" alt="{{ $post->title }}">
        </div>
        <div class="text-img col-xs-12 col-md-6">
            <h1> {{ $post->title }}</h1>
            <h2>{{ $post->content }}</h2>

            <div class="d-flex action-show">
                <a class="btn btn-success mt-5 mr-5" href="{{ route('admin.posts.index') }}">Back</a>
                <a class="btn btn-warning mt-5 mr-5" href="{{ route('admin.posts.edit', $post->id) }}"><i
                        class="far fa-edit"></i></a>
                <form class="mt-5" action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">
                        <i class="far fa-trash-alt btn btn-danger"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection
