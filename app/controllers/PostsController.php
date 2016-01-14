<?php

class PostsController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::with('user')->orderBy('created_at', 'DESC')->get()->all();

        $posts = array_map(function($post){
            $truncateAt = 750;
            if (strlen($post->content) > $truncateAt){
                $post->content = substr($post->content, 0, $truncateAt) . '...';
            }
            return $post;
        }, $posts);

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
            Session::flash('errorMessage', 'Invalid Post!!!');
            Log::error('Failed post creation', Input::all());
            return Redirect::back()->withInput()->withErrors($validator);
        } else {
            $post = new Post();
            $post->title = Input::get('title');
            $post->content = Input::get('content');
            $post->image= 'http://placehold.it/500';
            $post->user_id = 1;

            $post->save();

            $link = [
                'target' => '/posts/' . $post->id,
                'text' => 'view post'
            ];

            Session::flash('successMessage', 'Post Created');
            Session::flash('link', $link);

            return Redirect::action('PostsController@index');
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
            $idOrTitle = preg_replace('/-/', ' ', $idOrTitle);
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

        return Redirect::action('PostsController@index');
    }


}
