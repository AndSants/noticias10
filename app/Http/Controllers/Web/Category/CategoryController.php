<?php

namespace App\Http\Controllers\Web\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Models\Category\Category;
use App\Services\Category\CategoryService;

class CategoryController extends Controller
{
    public function __construct(
        protected CategoryService $service
    ) {}

    public function index()
    {
        $categories = $this->service->list();

        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        $category = $this->service->create($request->validated());

        if (!$category) {
            return redirect()
                ->route('categories.index')
                ->with('error', 'Erro ao criar categoria');
        }

        return redirect()
            ->route('categories.index')
            ->with('success', 'Categoria criada com sucesso');
    }

    
    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        $categories = Category::orderBy('name')->get();

        return view('categories.edit', compact('category', 'categories'));
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category = $this->service->update($category->id, $request->validated());

        if (!$category) {
            return redirect()
                ->route('categories.index')
                ->with('error', 'Erro ao atualizar categoria');
        }

        return redirect()
            ->route('categories.index')
            ->with('success', 'Categoria atualizada com sucesso');
    }

    public function destroy(Category $category)
    {
        try {
            $this->service->delete($category->id);
            return redirect()
                ->route('categories.index')
                ->with('success', 'Categoria excluida com sucesso');
        } catch (\Exception $e) {
            return redirect()
                ->route('categories.index')
                ->with('error', $e->getMessage());
        }
    }
}
