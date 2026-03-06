@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">
            Categorias
        </h1>

        <a href="{{ route('categories.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Nova Categoria
        </a>
    </div>

    <table class="w-full bg-white shadow rounded">
        <thead class="bg-gray-100">
            <tr class="text-center">
                <th class="p-3">Nome</th>
                <th class="p-3">Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($categories as $category)
                <tr class="border-t text-center">
                    <td class="p-3">{{ $category->name }}</td>
                    <td class="p-3 space-x-2">
                        <a href="{{ route('categories.edit', $category->id) }}" class="text-blue-600 hover:underline">
                            Editar
                        </a>

                        <form method="POST" action="{{ route('categories.destroy', $category->id) }}" class="inline">
                            @csrf
                            @method('DELETE')

                            <button onclick="return confirm('Excluir categoria?')" class="text-red-600 hover:underline">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-6">
        {{ $categories->links() }}
    </div>
@endsection
