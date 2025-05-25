<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("articles.index", [
            'articles' => Article::paginate(2),
        ]);
    }

    public function create(){
        return view("articles.create");
    }

    public function store(Request $request){

        $request->validate([
            "title" => "required|string",
            "body" => "required|string",
            "categorie" => "required|string"
        ]);

        Article::create($request->all());
        return redirect("/articles");
    }



    public function edit(string $id)
    {
        return view("articles.edit", [
            "article" => Article::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {



        $request->validate([
            "title" => "sometimes|string",
            "body" => "sometimes|string",
            "categorie" => "sometimes|string",
        ]);


        $article = Article::find(id: $id);

        $article->update($request->all());

        return redirect("/articles");


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Article::find($id)->delete();
        return redirect("/articles");
    }
}
