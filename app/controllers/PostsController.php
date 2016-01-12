<?php

class PostsController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::all();

        $posts = array_map(function($post){
            $truncateAt = 750;
            if (strlen($post->content) > $truncateAt){
                $post->content = substr($post->content, 0, $truncateAt) . '...';
            }
            return $post;
        }, $posts->all());

        $data = ['posts' => $posts];

        return View::make('posts.index')->with($data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('posts.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {

        $validator = Validator::make(Input::all(), Post::$rules);

        if ( $validator->fails() ) {
            return Redirect::back()->withInput()->withErrors($validator);
        } else {
            $post = new Post();
            $post->title = Input::get('title');
            $post->content = Input::get('content');
            $post->image= 'http://placehold.it/500';
            $post->user_id = 1;

            $post->save();

            return Redirect::action('PostsController@show', $post->id);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($idOrTitle)
    {
        if (is_numeric($idOrTitle)) {
            $post = Post::find($idOrTitle);
        } else {
            $post = Post::where('title', '=', $idOrTitle)->first();
        }

        $data = ['post' => $post];
        return View::make('posts.show')->with($data);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $data = [ 'post' => Post::find($id)];

        return View::make('posts.edit')->with($data);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $post = Post::find($id);
        $post->title = Input::get('title');
        $post->content = Input::get('content');
        $post->image= 'http://placehold.it/500';
        $post->user_id = 1;
        $post->save();

        dd('test');

        return Redirect::action('PostsController@show', $post->id);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
    }


}
