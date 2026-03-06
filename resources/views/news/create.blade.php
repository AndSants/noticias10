@extends('layouts.app')

@section('content')
    <div class="max-w-xl mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-xl font-bold mb-4">
            Cadastrar Notícia
        </h1>

        <form method="POST" action="{{ route('news.store') }}">
            @csrf

            <div class="mb-4">
                <label class="block mb-1">Título</label>
                <input type="text" name="title" class="border w-full px-3 py-2 rounded required autofocus">
            </div>

            <div class="mb-4">
                <label class="block mb-1">Categoria</label>
                <select name="category_id" class="border w-full px-3 py-2 rounded">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label class="block mb-1">Conteúdo</label>
                <textarea name="content" rows="5" class="border w-full px-3 py-2 rounded required"></textarea>
            </div>

            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">
                Salvar
            </button>
        </form>
    </div>
@endsection
