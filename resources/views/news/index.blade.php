@extends('layouts.app')

@section('content')
    <div class="mb-6">
        <form method="GET" class="flex gap-4">
            <input type="text" name="title" placeholder="Buscar por título" class="border px-3 py-2 rounded">

            <select name="category" class="border px-3 py-2 rounded">
                <option value="">Categoria</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>

            <button class="bg-blue-500 text-white px-4 py-2 rounded">
                Buscar
            </button>
        </form>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach ($news as $item)
            <x-news-card :news="$item" />
        @endforeach
    </div>

    <div class="mt-6">
        {{ $news->links() }}
    </div>
@endsection
