<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostCreateRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "Works";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostCreateRequest $request)
    {
        $input = $request->all();
        $user = Auth::user();

        if($file = $request->file('photo')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images',  $name);

            $input['photo'] = $name;
        }

        $user->posts()->create($input);
        return redirect('/');
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
        $post = Post::findOrFail($id);
        $user = Auth::user();
        return view('front.post.edit', compact('post','user'));
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
        $post= Post::findOrFail($id);
        $input = $request->all();

        if($file = $request->file('photo')){
            unlink(public_path() . $post->photo);
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name );

            $input['photo'] = $name;
        }

        Auth::user()->posts()->whereId($id)->first()->update($input);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        if(File::exists(public_path() . $post->photo)){
            unlink(public_path() . $post->photo);
        }
        $post->delete();
        return redirect('/');
    }
}
