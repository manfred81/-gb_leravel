<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index', [
            'newsList' => News::with('category', 'source')->paginate(9)
        ]);
    }

    public function show(int $id)
    {
        return view('news.show', [
            'news' => News::find($id)
        ]);
    }
}
