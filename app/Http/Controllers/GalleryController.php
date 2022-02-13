<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use File;

class GalleryController extends Controller
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

        if ($status) {
            $galleries = Gallery::where('status', strtoupper($status))
                ->where('title', 'LIKE', "%$keyword%")
                ->orderBy('created_at', 'desc')
                ->paginate(10);
        } else {
            $galleries = Gallery::where('title', 'LIKE', "%$keyword%")
                ->orderBy('created_at', 'desc')
                ->paginate(10);
        }

        return view('galleries.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galleries.create');
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
            'title'     => 'required|min:2|max:100',
            'image'     => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ])->validate();

        $new_Gallery               = new \App\Gallery;
        $new_Gallery->title        = $request->get('title');
        $new_Gallery->desc         = $request->get('desc');
        $new_Gallery->status       = $request->get('save_action');

        if ($request->file('image')) {
            $nama_file = time() . "_" . $request->file('image')->getClientOriginalName();
            $image_path = $request->file('image')->move('galleries_image', $nama_file);
            $new_Gallery->image = $nama_file;
        }

        $new_Gallery->save();

        return redirect()->route('galleries.index')->with('success', 'Gallery successfully created');
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
        $gallery = Gallery::findOrFail($id);
        return view('galleries.edit', compact('gallery'));
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
        $gallery = Gallery::findOrFail($id);

        $gallery->title        = $request->get('title');
        $gallery->desc        = $request->get('desc');
        $gallery->status      = $request->get('save_action');

        if ($request->file('image')) {
            if ($gallery->image) {
                File::delete('galleries_image/' . $gallery->image);
            }
            $nama_file = time() . "_" . $request->file('image')->getClientOriginalName();
            $new_image = $request->file('image')->move('galleries_image', $nama_file);
            $gallery->image = $nama_file;
        }

        $gallery->save();
        return redirect()->route('galleries.index')->with('success', 'Gallery successfully update.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        if ($gallery->image) {
            File::delete('galleries_image/' . $gallery->image);
        }
        $gallery->forceDelete();

        return redirect()->route('galleries.index')->with('success', 'Gallery successfully deleted.');
    }
}
