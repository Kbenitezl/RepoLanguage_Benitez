@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">{{ __('products.create') }}</h1>
    <form action="{{ route('products.store') }}" method="POST" class="max-w-lg">
        @csrf
        <div class="mb-4">
            <label for="name" class="block">{{ __('products.name') }}</label>
            <input type="text" name="name" id="name" class="w-full border p-2 @error('name') border-red-500 @enderror" value="{{ old('name') }}">
            @error('name')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="price" class="block">{{ __('products.price') }}</label>
            <input type="number" name="price" id="price" step="0.01" class="w-full border p-2 @error('price') border-red-500 @enderror" value="{{ old('price') }}">
            @error('price')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="description" class="block">{{ __('products.description') }}</label>
            <textarea name="description" id="description" class="w-full border p-2 @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
            @error('description')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="category_id" class="block">{{ __('products.category') }}</label>
            <select name="category_id" id="category_id" class="w-full border p-2 @error('category_id') border-red-500 @enderror">
                <option value="">{{ __('products.select_category') }}</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">{{ __('products.save') }}</button>
    </form>
@endsection