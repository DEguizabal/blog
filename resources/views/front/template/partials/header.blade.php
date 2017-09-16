<div class="text-center">
    <br>
    <img src="{{ asset('images/logo.png') }}" class="logo">
    <br>
    <h1 class="title-front-header">BLOG</h1>
    <br>
    <ul class="nav navbar-nav navbar-right">

            @if (Auth::guest())
                <li><a class="btn btn-primary" href="{{ route('login') }}">Login</a></li>
            @endif
    </ul>
    <br><br><br><br><br>

</div>