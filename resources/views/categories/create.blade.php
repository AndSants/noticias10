@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto bg-white shadow rounded p-6">

        <h1 class="text-2xl font-bold mb-6">
            Nova Categoria
        </h1>

        @include('categories._form', [
            'action' => route('categories.store'),
        ])

    </div>
@endsection
