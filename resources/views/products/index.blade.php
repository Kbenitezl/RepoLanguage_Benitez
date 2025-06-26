@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">{{ __('products.title') }}</h1>
    <a href="{{ route('products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">{{ __('products.create') }}</a>
    <table class="w-full border-collapse border">
        <thead>
            <tr class="bg-gray-200">
                <th class="border p-2">{{ __('products.name') }}</th>
                <th class="border p-2">{{ __('products.price') }}</th>
                <th class="border p-2">{{ __('products.category') }}</th>
                <th class="border p-2">{{ __('products.actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td class="border p-2">{{ $product->name }}</td>
                    <td class="border p-2">{{ $product->price }}</td>
                    <td class="border p-2">{{ $product->category->name }}</td>
                    <td class="border p-2">
                        <a href="{{ route('products.edit', $product) }}" class="text-blue-500">{{ __('products.edit') }}</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">{{ __('products.delete') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection