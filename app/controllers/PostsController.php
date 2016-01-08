<?php

class PostsController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = 
        [
            [
                'title' => 'a blog post', 'content' => 'Bacon ipsum dolor amet esse et cupidatat, pork chop est excepteur swine occaecat do alcatra pork belly venison turkey. Landjaeger capicola salami minim eu cillum rump dolore culpa irure non pariatur aliqua cow. Landjaeger do est meatloaf, venison short loin nisi elit boudin adipisicing. Ut aute fugiat flank. In pig tri-tip salami hamburger. Sirloin tempor drumstick ullamco boudin ham capicola pork chop jerky. Do rump dolore, proident tenderloin pariatur magna. Shank veniam magna pastrami. Drumstick hamburger meatball enim esse veniam. Porchetta laboris incididunt consequat salami ea ut consectetur do filet mignon. Porchetta beef et voluptate laborum nostrud biltong consequat. In swine rump ut, laboris esse ex est alcatra ad pastrami aliqua drumstick dolore salami. Capicola excepteur ut shoulder. Qui pork belly strip steak, nulla picanha enim rump ut spare ribs labore. In mollit shankle tri-tip sint alcatra veniam salami laboris culpa meatball meatloaf labore flank. Voluptate turducken capicola, ut aliqua tenderloin tempor short loin in cupidatat proident. Elit spare ribs boudin alcatra. Kevin eu sunt elit nisi mollit capicola. Turducken tempor meatball, sunt ham exercitation aliqua consectetur minim ut veniam brisket in adipisicing frankfurter. Meatball prosciutto ex officia cow capicola, sed enim ut doner pork chop kevin consequat sunt turducken. Alcatra ullamco short loin, landjaeger jowl andouille ball tip tempor nisi doner sint et cillum eiusmod. Excepteur fugiat shoulder picanha do fatback labore. Exercitation commodo doner, pork chop rump occaecat pork loin sirloin filet mignon ut tri-tip labore ad strip steak sausage. Jowl sausage fugiat lorem nisi, aute do tempor kevin flank pork belly anim enim brisket. Drumstick bacon velit venison officia sirloin laborum. Alcatra picanha ground round esse tempor fatback qui ex, pariatur cow cupim chicken porchetta. Salami alcatra officia, flank prosciutto tail ad sint laboris bresaola shank hamburger tongue nisi. Shank cow drumstick eiusmod, biltong in cillum spare ribs cupidatat in. Pork chop qui minim, spare ribs aute id irure bacon duis. Tongue ad ex, t-bone filet mignon ball tip short loin est meatloaf pork brisket. Frankfurter dolor shank et pork turkey ground round elit. Dolore sirloin flank aliquip eu enim. Jerky excepteur aute beef ribs flank ground round tenderloin. Bacon consequat corned beef dolore dolore swine laborum commodo. Sausage quis fugiat, in strip steak ea picanha exercitation dolore veniam. In ham hock salami nisi ground round. Meatball ex aute venison esse, pork loin aliquip beef ribs shankle spare ribs consequat duis drumstick. Swine pork chop officia hamburger. Drumstick nisi eiusmod, reprehenderit aliquip velit dolore nulla turducken veniam ex fatback est. Labore ball tip sunt duis pancetta boudin. Excepteur ham short ribs, picanha incididunt ea consequat duis ball tip. Reprehenderit do ut, voluptate tail jowl corned beef veniam cupidatat cow nostrud tenderloin. Duis fatback pig, sint cupidatat eiusmod shankle. Picanha in hamburger rump sed anim bresaola minim sausage venison do shoulder. Bacon nostrud commodo, sunt biltong prosciutto brisket sed aliqua irure esse. Ribeye ham hock aliquip adipisicing. Leberkas hamburger ribeye ea velit capicola bacon.',
                'image' => 'http://placehold.it/500', 'id' => 3
            ],
            [
                'title' => 'a blog post', 'content' => 'Bacon ipsum dolor amet esse et cupidatat, pork chop est excepteur swine occaecat do alcatra pork belly venison turkey. Landjaeger capicola salami minim eu cillum rump dolore culpa irure non pariatur aliqua cow. Landjaeger do est meatloaf, venison short loin nisi elit boudin adipisicing. Ut aute fugiat flank. In pig tri-tip salami hamburger. Sirloin tempor drumstick ullamco boudin ham capicola pork chop jerky. Do rump dolore, proident tenderloin pariatur magna. Shank veniam magna pastrami. Drumstick hamburger meatball enim esse veniam. Porchetta laboris incididunt consequat salami ea ut consectetur do filet mignon. Porchetta beef et voluptate laborum nostrud biltong consequat. In swine rump ut, laboris esse ex est alcatra ad pastrami aliqua drumstick dolore salami. Capicola excepteur ut shoulder. Qui pork belly strip steak, nulla picanha enim rump ut spare ribs labore. In mollit shankle tri-tip sint alcatra veniam salami laboris culpa meatball meatloaf labore flank. Voluptate turducken capicola, ut aliqua tenderloin tempor short loin in cupidatat proident. Elit spare ribs boudin alcatra. Kevin eu sunt elit nisi mollit capicola. Turducken tempor meatball, sunt ham exercitation aliqua consectetur minim ut veniam brisket in adipisicing frankfurter. Meatball prosciutto ex officia cow capicola, sed enim ut doner pork chop kevin consequat sunt turducken. Alcatra ullamco short loin, landjaeger jowl andouille ball tip tempor nisi doner sint et cillum eiusmod. Excepteur fugiat shoulder picanha do fatback labore. Exercitation commodo doner, pork chop rump occaecat pork loin sirloin filet mignon ut tri-tip labore ad strip steak sausage. Jowl sausage fugiat lorem nisi, aute do tempor kevin flank pork belly anim enim brisket. Drumstick bacon velit venison officia sirloin laborum. Alcatra picanha ground round esse tempor fatback qui ex, pariatur cow cupim chicken porchetta. Salami alcatra officia, flank prosciutto tail ad sint laboris bresaola shank hamburger tongue nisi. Shank cow drumstick eiusmod, biltong in cillum spare ribs cupidatat in. Pork chop qui minim, spare ribs aute id irure bacon duis. Tongue ad ex, t-bone filet mignon ball tip short loin est meatloaf pork brisket. Frankfurter dolor shank et pork turkey ground round elit. Dolore sirloin flank aliquip eu enim. Jerky excepteur aute beef ribs flank ground round tenderloin. Bacon consequat corned beef dolore dolore swine laborum commodo. Sausage quis fugiat, in strip steak ea picanha exercitation dolore veniam. In ham hock salami nisi ground round. Meatball ex aute venison esse, pork loin aliquip beef ribs shankle spare ribs consequat duis drumstick. Swine pork chop officia hamburger. Drumstick nisi eiusmod, reprehenderit aliquip velit dolore nulla turducken veniam ex fatback est. Labore ball tip sunt duis pancetta boudin. Excepteur ham short ribs, picanha incididunt ea consequat duis ball tip. Reprehenderit do ut, voluptate tail jowl corned beef veniam cupidatat cow nostrud tenderloin. Duis fatback pig, sint cupidatat eiusmod shankle. Picanha in hamburger rump sed anim bresaola minim sausage venison do shoulder. Bacon nostrud commodo, sunt biltong prosciutto brisket sed aliqua irure esse. Ribeye ham hock aliquip adipisicing. Leberkas hamburger ribeye ea velit capicola bacon.',
                'image' => 'http://placehold.it/500', 'id' => 3
            ],
            [
                'title' => 'a blog post', 'content' => 'Bacon ipsum dolor amet esse et cupidatat, pork chop est excepteur swine occaecat do alcatra pork belly venison turkey. Landjaeger capicola salami minim eu cillum rump dolore culpa irure non pariatur aliqua cow. Landjaeger do est meatloaf, venison short loin nisi elit boudin adipisicing. Ut aute fugiat flank. In pig tri-tip salami hamburger. Sirloin tempor drumstick ullamco boudin ham capicola pork chop jerky. Do rump dolore, proident tenderloin pariatur magna. Shank veniam magna pastrami. Drumstick hamburger meatball enim esse veniam. Porchetta laboris incididunt consequat salami ea ut consectetur do filet mignon. Porchetta beef et voluptate laborum nostrud biltong consequat. In swine rump ut, laboris esse ex est alcatra ad pastrami aliqua drumstick dolore salami. Capicola excepteur ut shoulder. Qui pork belly strip steak, nulla picanha enim rump ut spare ribs labore. In mollit shankle tri-tip sint alcatra veniam salami laboris culpa meatball meatloaf labore flank. Voluptate turducken capicola, ut aliqua tenderloin tempor short loin in cupidatat proident. Elit spare ribs boudin alcatra. Kevin eu sunt elit nisi mollit capicola. Turducken tempor meatball, sunt ham exercitation aliqua consectetur minim ut veniam brisket in adipisicing frankfurter. Meatball prosciutto ex officia cow capicola, sed enim ut doner pork chop kevin consequat sunt turducken. Alcatra ullamco short loin, landjaeger jowl andouille ball tip tempor nisi doner sint et cillum eiusmod. Excepteur fugiat shoulder picanha do fatback labore. Exercitation commodo doner, pork chop rump occaecat pork loin sirloin filet mignon ut tri-tip labore ad strip steak sausage. Jowl sausage fugiat lorem nisi, aute do tempor kevin flank pork belly anim enim brisket. Drumstick bacon velit venison officia sirloin laborum. Alcatra picanha ground round esse tempor fatback qui ex, pariatur cow cupim chicken porchetta. Salami alcatra officia, flank prosciutto tail ad sint laboris bresaola shank hamburger tongue nisi. Shank cow drumstick eiusmod, biltong in cillum spare ribs cupidatat in. Pork chop qui minim, spare ribs aute id irure bacon duis. Tongue ad ex, t-bone filet mignon ball tip short loin est meatloaf pork brisket. Frankfurter dolor shank et pork turkey ground round elit. Dolore sirloin flank aliquip eu enim. Jerky excepteur aute beef ribs flank ground round tenderloin. Bacon consequat corned beef dolore dolore swine laborum commodo. Sausage quis fugiat, in strip steak ea picanha exercitation dolore veniam. In ham hock salami nisi ground round. Meatball ex aute venison esse, pork loin aliquip beef ribs shankle spare ribs consequat duis drumstick. Swine pork chop officia hamburger. Drumstick nisi eiusmod, reprehenderit aliquip velit dolore nulla turducken veniam ex fatback est. Labore ball tip sunt duis pancetta boudin. Excepteur ham short ribs, picanha incididunt ea consequat duis ball tip. Reprehenderit do ut, voluptate tail jowl corned beef veniam cupidatat cow nostrud tenderloin. Duis fatback pig, sint cupidatat eiusmod shankle. Picanha in hamburger rump sed anim bresaola minim sausage venison do shoulder. Bacon nostrud commodo, sunt biltong prosciutto brisket sed aliqua irure esse. Ribeye ham hock aliquip adipisicing. Leberkas hamburger ribeye ea velit capicola bacon.',
                'image' => 'http://placehold.it/500', 'id' => 3
            ],
            [
                'title' => 'a blog post', 'content' => 'Bacon ipsum dolor amet esse et cupidatat, pork chop est excepteur swine occaecat do alcatra pork belly venison turkey. Landjaeger capicola salami minim eu cillum rump dolore culpa irure non pariatur aliqua cow. Landjaeger do est meatloaf, venison short loin nisi elit boudin adipisicing. Ut aute fugiat flank. In pig tri-tip salami hamburger. Sirloin tempor drumstick ullamco boudin ham capicola pork chop jerky. Do rump dolore, proident tenderloin pariatur magna. Shank veniam magna pastrami. Drumstick hamburger meatball enim esse veniam. Porchetta laboris incididunt consequat salami ea ut consectetur do filet mignon. Porchetta beef et voluptate laborum nostrud biltong consequat. In swine rump ut, laboris esse ex est alcatra ad pastrami aliqua drumstick dolore salami. Capicola excepteur ut shoulder. Qui pork belly strip steak, nulla picanha enim rump ut spare ribs labore. In mollit shankle tri-tip sint alcatra veniam salami laboris culpa meatball meatloaf labore flank. Voluptate turducken capicola, ut aliqua tenderloin tempor short loin in cupidatat proident. Elit spare ribs boudin alcatra. Kevin eu sunt elit nisi mollit capicola. Turducken tempor meatball, sunt ham exercitation aliqua consectetur minim ut veniam brisket in adipisicing frankfurter. Meatball prosciutto ex officia cow capicola, sed enim ut doner pork chop kevin consequat sunt turducken. Alcatra ullamco short loin, landjaeger jowl andouille ball tip tempor nisi doner sint et cillum eiusmod. Excepteur fugiat shoulder picanha do fatback labore. Exercitation commodo doner, pork chop rump occaecat pork loin sirloin filet mignon ut tri-tip labore ad strip steak sausage. Jowl sausage fugiat lorem nisi, aute do tempor kevin flank pork belly anim enim brisket. Drumstick bacon velit venison officia sirloin laborum. Alcatra picanha ground round esse tempor fatback qui ex, pariatur cow cupim chicken porchetta. Salami alcatra officia, flank prosciutto tail ad sint laboris bresaola shank hamburger tongue nisi. Shank cow drumstick eiusmod, biltong in cillum spare ribs cupidatat in. Pork chop qui minim, spare ribs aute id irure bacon duis. Tongue ad ex, t-bone filet mignon ball tip short loin est meatloaf pork brisket. Frankfurter dolor shank et pork turkey ground round elit. Dolore sirloin flank aliquip eu enim. Jerky excepteur aute beef ribs flank ground round tenderloin. Bacon consequat corned beef dolore dolore swine laborum commodo. Sausage quis fugiat, in strip steak ea picanha exercitation dolore veniam. In ham hock salami nisi ground round. Meatball ex aute venison esse, pork loin aliquip beef ribs shankle spare ribs consequat duis drumstick. Swine pork chop officia hamburger. Drumstick nisi eiusmod, reprehenderit aliquip velit dolore nulla turducken veniam ex fatback est. Labore ball tip sunt duis pancetta boudin. Excepteur ham short ribs, picanha incididunt ea consequat duis ball tip. Reprehenderit do ut, voluptate tail jowl corned beef veniam cupidatat cow nostrud tenderloin. Duis fatback pig, sint cupidatat eiusmod shankle. Picanha in hamburger rump sed anim bresaola minim sausage venison do shoulder. Bacon nostrud commodo, sunt biltong prosciutto brisket sed aliqua irure esse. Ribeye ham hock aliquip adipisicing. Leberkas hamburger ribeye ea velit capicola bacon.',
                'image' => 'http://placehold.it/500', 'id' => 3
            ]
        ];

        $posts = array_map(function($post){
            $truncateAt = 750;
            if (strlen($post['content']) > $truncateAt){
                $post['content'] = substr($post['content'], 0, $truncateAt) . '...';
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
        $post = new Post();
        $post->title = Input::get('title');
        $post->content = Input::get('content');
        $post->image= 'http://placehold.it/500';
        $post->user_id = 2;
        $post->save();

        return Redirect::back()->withInput();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $data = ['id' => 3, 'title' => 'a blog post', 'image' => 'http://placehold.it/600',
         'content' => 'Lorem ipsum dolor sit amet, nunc dolor, ut taciti eu ornare fusce velit, hac consequat aliquam maecenas vivamus ultrices eros, ac in facilisi. Etiam per. Ut nunc maecenas ad ut magnis elit, magna libero, vel integer justo orci sodales. Morbi torquent leo mauris arcu vitae. Libero nunc accumsan integer, bibendum sed semper scelerisque magna, ullamcorper quam lacinia, adipiscing et aliquam tellus proin et laborum. Augue dictum euismod, ipsum in, etiam eu amet integer metus. Class sed magna corrupti porttitor egestas, est arcu faucibus nisi sed posuere mauris, vestibulum aliquam egestas et fusce tincidunt elit. Quae wisi torquent purus non. Metus tincidunt ante eros accumsan, tincidunt eget ligula gravida, nunc ipsum, sed duis egestas morbi feugiat. Vitae sapien tempus fermentum posuere duis, ante morbi purus dictumst erat taciti. Egestas lectus nonummy ut duis, cras lobortis nibh lectus pellentesque. Quisque maecenas neque sapien, mollis vitae dui lectus vel urna. Volutpat rutrum adipiscing auctor. Non cursus at, sit suspendisse. Nulla dui dolor aenean, voluptatum cubilia. Lacus feugiat. Elementum orci. Sed mauris odio pellentesque. Sollicitudin diam at, nulla dignissim euismod pede eu, id venenatis lacinia etiam, et rhoncus qui platea. Justo vivamus eros mi est condimentum, integer vivamus molestie est sapien. Tellus non tellus ultricies curabitur, tellus fames elementum. Vestibulum justo molestie id rhoncus, urna felis, gravida sem lorem mi fringilla, nibh proin ut. Vel sit justo hymenaeos pede, arcu sagittis sollicitudin ultricies, eget et dolor elementum leo amet ut, nullam vel a aenean mauris. Justo quam, quisque mauris metus, in nisl turpis aliquam, luctus lobortis wisi cras, neque at gravida fames. Sodales turpis, sit tempor sodales quis morbi, magna duis ipsum, mattis qui morbi curabitur, arcu fringilla orci feugiat posuere. Quam class nisl vehicula ipsum sed, pharetra inceptos, tellus praesent, tellus sed fermentum natoque. Libero dignissim vivamus arcu pede, ut non reprehenderit semper elit imperdiet. Enim purus dis. Ut nam morbi posuere veniam, luctus ante cras, semper erat, hymenaeos mauris commodo tempus purus amet eu, mattis nulla. Sagittis aliquam eget metus pede sed, mauris vel dictumst fringilla, suscipit magna quam ligula ultrices tortor, integer orci quis eu ducimus eu, convallis est commodo dolor. Assumenda nulla leo nunc nostra consectetuer, vitae ligula lacus ipsum platea, donec risus ut amet, tellus in sodales, ipsum nascetur aliquam. A nec eu tincidunt, ultricies lectus vitae lorem, vel tellus in vel morbi sit, aliquam quisquam vivamus cum amet justo integer. Id non, ut dis lectus, blandit id, vel inceptos justo nibh. Curabitur libero in.'];
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
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
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
