<nav class="bg-gray-200 shadow">
    <div class="container mx-auto flex items-center justify-between py-4">
        <div class="font-bold text-lg">
            LOGO
        </div>

        <div class="flex items-center gap-6">
            <a href="{{ route('news.create') }}" class="font-medium">
                Cadastrar Notícias
            </a>

            <a href="{{ route('news.index') }}" class="font-medium">
                Exibir Notícias
            </a>

            <form action="{{ route('news.index') }}" method="GET">
                <input type="text" name="title" placeholder="Buscar..." class="rounded-full px-4 py-2 border">
            </form>
        </div>
    </div>
</nav>
