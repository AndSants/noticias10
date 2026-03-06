<?php

namespace App\Http\Controllers\Web\News;

use App\Http\Controllers\Controller;
use App\Http\Requests\News\StoreNewsRequest;
use App\Http\Requests\News\UpdateNewsRequest;
use App\Models\Category\Category;
use App\Models\News\News;
use App\Services\News\NewsService;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct(
        protected NewsService $service
    ) {}

    public function index(Request $request)
    {
        $news = $this->service->search(
            $request->title,
            $request->category
        );

        $categories = Category::orderBy('name')->get();

        return view('news.index', compact(
            'news',
            'categories'
        ));
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();

        return view('news.create', compact('categories'));
    }

    public function store(StoreNewsRequest $request)
    {
        $news = $this->service->create($request->validated());

        if (!$news) {
            return redirect()
                ->route('news.index')
                ->with('error', 'Erro ao criar noticia');
        }

        return redirect()
            ->route('news.index')
            ->with('success', 'Notícia criada com sucesso');
    }

    public function show(News $news)
    {
        //
    }

    public function edit(News $news)
    {
        //
    }

    public function update(UpdateNewsRequest $request, News $news)
    {
        //
    }

    public function destroy(News $news)
    {
        //
    }
}
