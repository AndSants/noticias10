@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto bg-white shadow rounded p-6">

        <h1 class="text-2xl font-bold mb-6">
            Editar Categoria
        </h1>

        @include('categories._form', [
            'action' => route('categories.update', $category->id),
            'method' => 'PUT',
            'category' => $category,
        ])

    </div>
@endsection
