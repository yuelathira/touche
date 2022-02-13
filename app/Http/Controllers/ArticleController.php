<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use File;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $status     = $request->get('status');
        $keyword    = $request->get('keyword') ? $request->get('keyword') : '';
        $category   = $request->get('c') ? $request->get('c') : '';

        if ($status) {
            $articles = Article::where('status', strtoupper($status))
                ->where('title', 'LIKE', "%$keyword%")
                ->orderBy('created_at', 'desc')
                ->paginate(10);
        } else {
            $articles = Article::where('title', 'LIKE', "%$keyword%")
                ->orderBy('created_at', 'desc')
                ->paginate(10);
        }

        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \Validator::make($request->all(), [
            'title'     => 'required|min:2|max:200',
            'author'    => 'required',
            'content'   => 'required',
            'image'     => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ])->validate();

        $new_Article               = new \App\Article;
        $new_Article->title        = $request->get('title');
        $new_Article->slug         = \Str::slug($request->get('title'), '-');
        $new_Article->content      = $request->get('content');
        $new_Article->author       = $request->get('author');
        $new_Article->create_by    = \Auth::user()->id;
        $new_Article->status       = $request->get('save_action');

        if ($request->file('image')) {
            $nama_file = time() . "_" . $request->file('image')->getClientOriginalName();
            $image_path = $request->file('image')->move('articles_image', $nama_file);
            $new_Article->image = $nama_file;
        }

        $new_Article->save();

        return redirect()->route('articles.index')->with('success', 'Article successfully created');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        $article->title        = $request->get('title');
        $article->slug         = \Str::slug($request->get('title'), '-');
        $article->content      = $request->get('content');
        $article->author       = $request->get('author');
        $article->create_by    = \Auth::user()->id;
        $article->status       = $request->get('save_action');

        if ($request->file('image')) {
            if ($article->image) {
                File::delete('articles_image/' . $article->image);
            }
            $nama_file = time() . "_" . $request->file('image')->getClientOriginalName();
            $new_image = $request->file('image')->move('articles_image', $nama_file);
            $article->image = $nama_file;
        }

        $article->save();
        return redirect()->route('articles.index')->with('success', 'Article successfully update.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        if ($article->image) {
            File::delete('articles_image/' . $article->image);
        }
        $article->forceDelete();

        return redirect()->route('articles.index')->with('success', 'Article successfully deleted.');
    }
}
