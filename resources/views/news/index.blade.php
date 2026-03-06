@extends('layouts.app')

@section('content')
    <div class="mb-6">
        <form method="GET" class="flex gap-4">
            <input type="text" name="title" placeholder="Buscar por título" class="border px-3 py-2 rounded">

            <select name="category" class="border px-3 py-2 rounded">
                <option value="">Todas as Categoria</option>
                @foreach ($categories as $category)
                    <option 
                        value="{{ $category->id }}"
                        {{ request('category') == $category->id ? 'selected' : '' }}
                    >
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>

            <button class="bg-blue-500 text-white px-4 py-2 rounded">
                Buscar
            </button>
        </form>
    </div>

    <div id="loading" class="grid grid-cols-1 md:grid-cols-3 gap-6 hidden">
        <x-news-skeleton />
        <x-news-skeleton />
        <x-news-skeleton />
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach ($news as $item)
            <x-news-card :news="$item" />
        @endforeach
    </div>

    <div class="my-6">
        {{ $news->links() }}
    </div>
@endsection
