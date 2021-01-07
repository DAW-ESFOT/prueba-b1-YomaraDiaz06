<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        return Movie::all();
    }
    public function show($id)
    {
        return Movie::find($id);
    }
    public function store(Request $request)
    {
        return Movie::create($request->all());
    }
    public function update(Request $request, $id)
    {
        $article = Movie::findOrFail($id);
        $article->update($request->all());
        return $article;
    }
    public function delete(Request $request, $id)
    {
        $article = Movie::findOrFail($id);
        $article->delete();
        return 204;
    }
}
