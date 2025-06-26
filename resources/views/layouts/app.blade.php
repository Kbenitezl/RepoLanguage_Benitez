<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Product App') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <nav class="bg-white p-4 shadow">
        <div class="container mx-auto flex justify-between">
            <a href="/" class="font-bold">{{ config('app.name') }}</a>
            <div>
                <a href="{{ route('categories.index') }}" class="mx-2">{{ __('categories.title') }}</a>
                <a href="{{ route('products.index') }}" class="mx-2">{{ __('products.title') }}</a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto p-4">
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>
</body>
</html>