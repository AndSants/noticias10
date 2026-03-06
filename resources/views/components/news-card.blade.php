<div class="bg-white shadow rounded-lg p-6 flex flex-col justify-between hover:shadow-lg transition duration-200">
    <div>
        <div class="text-sm text-gray-500 mb-2">
            {{ $news->category->name }}
        </div>

        <h2 class="text-2xl font-bold mb-2">
            {{ Str::limit($news->title, 30) }}
        </h2>

        <p class="text-gray-600 text-sm mb-4">
            {{ Str::limit($news->content, 120) }}
        </p>

        <div class="text-xs text-gray-400">
            {{ $news->created_at->diffForHumans() }}
        </div>
    </div>

    <div class="mt-4">
        <a href="#" class="bg-cyan-200 hover:bg-gray-300 px-4 py-2 rounded block text-center">
            Acessar
        </a>
    </div>
</div>
