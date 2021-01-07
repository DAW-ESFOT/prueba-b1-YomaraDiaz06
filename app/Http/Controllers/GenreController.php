<?php

namespace App\Http\Controllers;

use App\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        return Genre::all();
    }
    public function show($id)
    {
        return Genre::find($id);
    }
    public function store(Request $request)
    {
        return Genre::create($request->all());
    }
    public function update(Request $request, $id)
    {
        $article = Genre::findOrFail($id);
        $article->update($request->all());
        return $article;
    }
    public function delete(Request $request, $id)
    {
        $article = Genre::findOrFail($id);
        $article->delete();
        return 204;
    }
}
