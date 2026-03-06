<nav class="bg-cyan-500 shadow fixed top-0 w-full z-50 text-black">
    <div class="container mx-auto flex items-center justify-between py-4">
        <a href="{{ route('news.index') }}" class="flex items-center gap-2">
            <img src="{{ asset('images/logo.png') }}" alt="Logo Notícias 10" class="w-auto h-10">
        </a>

        <div class="flex items-center gap-6">
            <a href="{{ route('news.create') }}" class="font-medium hover:text-blue-300">
                Cadastrar Notícias
            </a>

            <a href="{{ route('news.index') }}" class="font-medium hover:text-blue-300">
                Exibir Notícias
            </a>

            <a href="{{ route('categories.index') }}" class="font-medium hover:text-blue-300">
                Gerenciar Categorias
            </a>

            <form action="{{ route('news.index') }}" method="GET">
                <input 
                    id="search"
                    type="text"
                    name="title"
                    value="{{ request('title') }}"
                    placeholder="Buscar por título"
                    class="rounded-full px-4 py-2 border"
                >
            </form>
        </div>
    </div>
</nav>

<script>
let timer;

document.getElementById("search")?.addEventListener("keyup", function () {
    clearTimeout(timer);

    timer = setTimeout(() => {
        this.closest("form").submit();
    }, 900);
});
</script>