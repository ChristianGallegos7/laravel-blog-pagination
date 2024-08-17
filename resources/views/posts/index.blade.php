@extends('layouts.app')

@section('title', 'Blog Posts')

@section('content')
    <div class="mb-6">
        <a href="{{ route('post.create') }}"
            class="inline-block bg-indigo-600 text-white font-bold py-2 px-4 rounded hover:bg-indigo-700 transition duration-150 ease-in-out">
            Crear Post
        </a>
    </div>

    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($posts as $post)
            <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                <div class="p-6">
                    <a href="{{ route('post.show', $post) }}"
                        class="text-xl font-semibold text-gray-900 hover:text-indigo-600 transition duration-150 ease-in-out">
                        {{ $post->title }}
                    </a>
                    <p class="mt-2 text-sm text-gray-600">
                        Fecha de publicación: {{ $post->published_at }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-8 flex justify-center items-center">
        {{ $posts->links() }}
    </div>
@endsection
