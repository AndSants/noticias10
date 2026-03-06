<?php

namespace App\Http\Controllers\Api\News;

use App\Http\Controllers\Controller;
use App\Services\News\NewsService;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct(
        protected NewsService $service
    ) {}

    public function index(Request $request)
    {
        return $this->service->search(
            $request->title,
            $request->category
        );
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
