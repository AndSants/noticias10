<div class="bg-white shadow rounded-lg p-6 flex flex-col justify-between">
    <div>
        <h2 class="font-bold text-lg mb-2">
            {{ $news->title }}
        </h2>

        <p class="text-gray-600 text-sm">
            {{ Str::limit($news->content, 150) }}
        </p>
    </div>

    <div class="mt-4">
        <a href="#" class="bg-gray-200 hover:bg-gray-300 px-4 py-2 rounded block text-center">
            Acessar
        </a>
    </div>
</div>
