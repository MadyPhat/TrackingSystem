<?php

namespace App\Http\Controllers\Article;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    //
    public function index()
    {
        $articles = Article::all(); // select * from articles
//        return view('articles.index', [ 'articles' => $articles ] );
        return view('index', compact('articles'));

    }

    public function getForm()
    {
        return view('form');
    }

    public function save(Request $request)
    {
        $input = [
            'author' => $request->author,
            'title' => $request->title,
            'content' => $request->conten,
        ];
        $save = Article::create($input);
        if ($save) {
            return redirect(route('index'))->with([
                'status' => true,
                'message' => 'Data created'
            ]);
        }

    }

    public function destroy($id)
    {
//        $article = Article::where('id', $id)->first();
        Article::destroy($id);
        return response()->json([
            'status' => true,
            'message' => 'article deleted'
        ]);
    }

    public function getUpdateForm($id)
    {
        $article = Article::where('id', $id)->first();
        return view('update_form', compact('article'));
    }

    public function update($id, Request $request)
    {
        Article::where('id', $id)
            ->update(
                [
                    'author' => $request->author,
                    'title' => $request->title,
                    'content' => $request->conten
                ]
            );

        return redirect(route('index'));
    }
}
