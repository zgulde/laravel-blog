<nav class="fixed-nav">
    @yield('nav-links')
    @if(Auth::check())
        <a href="{{action('HomeController@getLogout')}}">LogOut</a>
    @endif
</nav>
