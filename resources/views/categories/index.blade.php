@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">{{ __('categories.title') }}</h1>
    <a href="{{ route('categories.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">{{ __('categories.create') }}</a>
    <table class="w-full border-collapse border">
        <thead>
            <tr class="bg-gray-200">
                <th class="border p-2">{{ __('categories.name') }}</th>
                <th class="border p-2">{{ __('categories.description') }}</th>
                <th class="border p-2">{{ __('categories.actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td class="border p-2">{{ $category->name }}</td>
                    <td class="border p-2">{{ $category->description }}</td>
                    <td class="border p-2">
                        <a href="{{ route('categories.edit', $category) }}" class="text-blue-500">{{ __('categories.edit') }}</a>
                        <form action="{{ route('categories.destroy', $category) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">{{ __('categories.delete') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection