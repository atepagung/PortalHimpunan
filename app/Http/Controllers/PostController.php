<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Post_Type;

class PostController extends Controller
{

    function __construct()
    {
        $this->middleware('auth')->except('show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::get();

        echo "<pre>";
        var_dump($posts);
        echo "</pre>";
        die();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post_types = \App\Post_Type::get();

        return view('testing.testingPost', ['post_types' => $post_types]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            Post::create([
                'title' => $request->input('title'),
                'body' => $request->input('body'),
                'post_type_id' => $request->input('post_type_id'),
                'visibility' => $request->input('visibility'),
                'user_id' => Auth::id(),
                'status' => 0
            ]);

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            echo "Message: ".$e->getMessage();
            die();
        }

        return redirect()->route('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::with('comments')->find($id);

        return view('testing.testShowPost', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            Post::find($id)->delete();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();

            echo "Message: ".$e->getMessage();
        }
    }
}
