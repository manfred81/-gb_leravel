<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // public function index()
    // {
    //     $categories = app(Category::class);
    //     return view('categories.index', ['categoryList' => $categories->getCategories()]);
    // }

    // public function show(int $id)
    // {
    //     $news = app(News::class);
    //     return view('categories.show', ['newsList' => $news->getNewsByCategory($id)]);
    // }
    public function index()
    {
        return view('categories.index', [
            'categoryList' => Category::paginate(18)
        ]);
    }

    public function show(int $id)
    {
        return view('categories.show', [
            'newsList' => News::where('category_id', $id)->paginate(9)
        ]);
    }
}
