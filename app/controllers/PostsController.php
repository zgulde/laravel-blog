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

            // $date = strtotime($post->created_at->date);
            // dd($post->created_at);
            // $post->created_at = date("F d, Y", $date);

            return $post;
        }, $posts->all());

        // dd(Post::all());

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
        $post = new Post();
        $post->title = Input::get('title');
        $post->content = Input::get('content');
        $post->image= 'http://placehold.it/500';
        $post->user_id = 1;

        if ( $post->save() ) {
            return Redirect::action('PostsController@show', $post->id);
        } else {
            return Redirect::back()->withInput();
        }

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $data = ['post' => Post::find($id)];
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
        //
    }


}
