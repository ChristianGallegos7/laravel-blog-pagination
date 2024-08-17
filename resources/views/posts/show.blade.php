@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <div class="max-w-3xl mx-auto mt-8 px-4 sm:px-6 lg:px-8">
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <article class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-6 sm:p-8">
                <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ $post->title }}</h1>

                <div class="flex items-center mb-6">
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                        {{ $post->category }}
                    </span>
                    <time class="text-sm text-gray-500" datetime="{{ $post->created_at->toDateString() }}">
                        {{ $post->created_at->format('F j, Y') }}
                    </time>
                </div>

                <div class="prose max-w-none mb-8">
                    <p class="text-gray-700 leading-relaxed">{{ $post->content }}</p>
                </div>

                <div class="mt-6 flex gap-4">

                    <a href="{{ route('post.edit', $post) }}"
                        class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded
                          focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                        Editar
                    </a>

                    <form action="{{ route('post.destroy', $post) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-100 text-red-500 text-xs font-semibold mr-2 rounded py-3 px-4">Eliminar
                            Post</button>
                    </form>

                </div>
            </div>
        </article>
    </div>
@endsection
