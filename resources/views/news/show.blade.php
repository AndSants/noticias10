@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto">

        <a href="{{ route('news.index') }}" class="bg-cyan-200 hover:bg-cyan-300 mb-6 px-4 py-2 rounded block text-center">
            <i class="fi fi-br-angle-left"></i> Voltar
        </a>

        <div class="bg-white shadow rounded-lg p-6">

            <div class="text-sm text-gray-500 mb-2">
                {{ $news->category->name }}
            </div>

            <h1 class="text-3xl font-bold mb-4">
                {{ $news->title }}
            </h1>

            <div class="text-sm text-gray-400 mb-6">
                Publicado em {{ $news->created_at->format('d/m/Y H:i') }}
            </div>

            <div class="text-gray-700 leading-relaxed whitespace-pre-line">
                {{ $news->content }}
            </div>

        </div>

    </div>
@endsection
