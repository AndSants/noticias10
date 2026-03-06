<form method="POST" action="{{ $action }}">
    @csrf

    @if (isset($method))
        @method($method)
    @endif

    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 mb-1">
            Nome da Categoria
        </label>

        <input type="text" name="name" value="{{ old('name', $category->name ?? '') }}" required
            class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300">

        @error('name')
            <p class="text-red-500 text-sm mt-1">
                {{ $message }}
            </p>
        @enderror
    </div>

    <div class="flex gap-2">
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Salvar
        </button>

        <a href="{{ route('categories.index') }}" class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">
            Cancelar
        </a>
    </div>
</form>
