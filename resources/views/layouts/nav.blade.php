<header>
    <div class="blog-masthead">
        <div class="container">
            <nav class="nav">
                <a class="nav-link active" href="#">Home</a>
                <a class="nav-link" href="/posts/create">Posts</a>
                <a class="nav-link" href="#"></a>

               @if (Auth::guest())
               <a class="nav-link ml-auto" href="/login">Login </a>
               @endif
                

                @if(Auth::check())
                    <a class="nav-link ml-auto" href="/logout">Logout</a>
                @endif

            </nav>
        </div>
    </div>

    <div class="blog-header">
        <div class="container">
            <h1 class="blog-title">The Bootstrap Blog</h1>
            <p class="lead blog-description">An example blog template built with Bootstrap.</p>
        </div>
    </div>
</header>
