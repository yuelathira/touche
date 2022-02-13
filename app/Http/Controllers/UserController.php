<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\About;
use App\Article;
use App\Gallery;

class UserController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }


    public function home()
    {
        $articles = Article::where('status', 'PUBLISH')->orderBy('created_at', 'desc')->limit(3)->get();

        $data = [
            'articles'      => $articles,
            'galleries'     => Gallery::all(),
            'about'         => About::all()  
        ];
        return view('user/home', $data);
    }

    public function article(Request $request)
    {
        $keyword    = $request->get('s') ? $request->get('s') : '';

        $articles       = Article::where('title', 'LIKE', "%$keyword%")->orderBy('created_at', 'desc')->paginate(10);
        $other_articles = Article::select('title', 'slug')->where('status', 'PUBLISH')->orderBy('created_at', 'desc')->limit(5)->get();

        $data = [
            'articles'  => $articles,
            'other'     => $other_articles
        ];

        return view('user/article', $data);
    }

    public function show_article($slug)
    {
        $articles       = Article::where('slug', $slug)->firstOrFail();
        $other_articles = Article::select('title', 'slug')->where('status', 'PUBLISH')->orderBy('created_at', 'desc')->limit(5)->get();

        $data = [
            'articles'  => $articles,
            'other'     => $other_articles
        ];

        return view('user/article', $data);
    }

    public function services()
    {
        return view('user/services');
    }

    public function contact()
    {
        return view('user/contact');
    }
}
