<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('feedback.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'message' => ['required', 'string']
        ]);

        // return response()->json($request->only('name', 'message'), 201);
        return Storage::disk('local')
            ->append('feedback.txt', response()
                ->json($request));
    }
}
