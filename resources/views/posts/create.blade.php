@extends('layouts.app')

@section('title', 'Create New Post')

@section('content')
    <div class="max-w-md mx-auto mt-10">
        <h2 class="font-bold text-center text-2xl">Create New Post</h2>
        <form action="{{ route('post.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"
            novalidate>
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                    Title
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="title" type="text" name="title" placeholder="Enter title" required
                    value="{{ old('title') }}">
                @error('title')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                    Slug
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="slug" type="text" name="slug" placeholder="Slug" required value="{{ old('slug') }}">
                @error('slug')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="content">
                    Content
                </label>
                <textarea
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="content" name="content" rows="5" placeholder="Enter content" required>
                    {{ old('content') }}
                </textarea>
                @error('content')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="category">
                    Category
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="category" type="text" name="category" placeholder="Enter category" required
                    value="{{ old('category') }}">
                @error('category')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Create Post
                </button>
            </div>
        </form>
    </div>
@endsection
