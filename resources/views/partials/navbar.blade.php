<nav class="bg-gray-200 shadow fixed top-0 w-full z-50">
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
                <input id="search" type="text" name="title" value="{{ request('title') }}" placeholder="Buscar por título" class="rounded-full px-4 py-2 border">
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