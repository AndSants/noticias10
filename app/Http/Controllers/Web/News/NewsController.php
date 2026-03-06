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

        $categories = Category::all();

        return view('news.index', compact(
            'news',
            'categories'
        ));
    }

    public function create()
    {
        //
    }

    public function store(StoreNewsRequest $request)
    {
        $this->service->create($request->validated());

        return redirect()->back()
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
