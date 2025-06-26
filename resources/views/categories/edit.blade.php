@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">{{ __('categories.edit') }}</h1>
    <form action="{{ route('categories.update', $category) }}" method="POST" class="max-w-lg">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block">{{ __('categories.name') }}</label>
            <input type="text" name="name" id="name" class="w-full border p-2 @error('name') border-red-500 @enderror" value="{{ old('name', $category->name) }}">
            @error('name')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="description" class="block">{{ __('categories.description') }}</label>
            <textarea name="description" id="description" class="w-full border p-2 @error('description') border-red-500 @enderror">{{ old('description', $category->description) }}</textarea>
            @error('description')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">{{ __('categories.save') }}</button>
    </form>
@endsection