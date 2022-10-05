<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::latest()->get();
        return view('post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        try {

            // Memanggil fungsi untuk mengupload gambar cover
            $imagePath = $this->uploadCover($request->image);

            // Fungsi untuk menyimpan semua data
            $post = new Post;
            $post->title = $request->title;
            $post->body = $request->body;
            $post->image = $imagePath;
            $post->save();

            // Fungsi untuk menuju halaman index dan memberikan pesan sukses
            return redirect()->route('post.index')->with('success', 'Post berhasil disimpan dan di publish.');
        } catch (\Exception $e) {
            print_r($e);
        }
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
        $item = Post::findOrFail($id);
        return view('post.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
        $request->validate([
            'title' => 'required|max:150',
            'body' => 'required',
        ]);

        $blog = Post::findOrFail($id);

        if ($request->file('image') == "") {

            $blog->update([
                'title'     => $request->title,
                'content'   => $request->content
            ]);
        } else {

            //hapus old image
            Storage::disk('local')->delete('public/blogs/' . $blog->image);

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/blogs', $image->hashName());

            $blog->update([
                'image'     => $image->hashName(),
                'title'     => $request->title,
                'body'   => $request->body
            ]);
        }
        if ($blog) {
            //redirect dengan pesan sukses
            return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('posts.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Post::findOrFail($id);
        Storage::disk('local')->delete('public/blogs/' . $blog->image);
        $blog->delete();

        if ($blog) {
            //redirect dengan pesan sukses
            return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('posts.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }

    public function uploadCover($imageFile)
    {
        $extFile = $imageFile->getClientOriginalName();
        $path = $imageFile->move('file_upload', 'file_' . time() . '.' . $extFile);
        $path = str_replace('\\', '/', $path);

        return $path;
    }
}
