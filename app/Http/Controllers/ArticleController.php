<?php

namespace App\Http\Controllers;

use App\Http\Requests\Article\StoreArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
    
    public function index()
    {
        return view('articles.index', [
            'myarticles' => Article::where('user_id', auth()->id())->get(),
            'otherarticles' => Article::where('user_id', '!=', auth()->id())->get(),
        ]);
    }

    
    public function create()
    {
        return view('articles.create');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $return = Article::where('title', 'like', '%'.$search.'%')->paginate(5);
        return view('articles.index', ['return' => $return]);
    }
    public function store(StoreArticleRequest $request)
    {
        $article = new Article();
        $article->user_id = $request->user_id;
        $article->user_name = $request->user_name;
        $article->title = $request->title;
        $article->body = $request->description;
        $imageName = time().'.'.$request->photo->extension();
        $request->photo->move(public_path('images'), $imageName);
        $article->photo = $imageName;
        $article->save();
        return redirect()->route('articles.index');
    }

    
    public function show(Article $article)
    {
        //
    }

    
    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article]);
    }

    
    public function update(Request $request, Article $article)
    {
        if ($request->hasFile('photo')) {
            $imagePath = public_path('images').'/'.$article->photo;
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
            $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('images'), $imageName);
            $article->photo = $imageName;
        }
        $article->title = $request->title;
        $article->body = $request->description;
        $article->save();
        return redirect()->route('articles.index');
    }

    
    public function destroy(Article $article)
    {
        $imagePath = public_path('images').'/'.$article->photo;
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
        $article->delete();
        return redirect()->route('articles.index');
    }
}