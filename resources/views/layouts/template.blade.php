<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') UAS - M - 2020110059</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
</head>

<body>
    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <a class="link-secondary" href="#"></a>
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark" href="/">PBWL - UAS</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="link-secondary" href="#" aria-label="Search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="mx-3" role="img" viewBox="0 0 24 24">
                            <title>Search</title>
                            <circle cx="10.5" cy="10.5" r="7.5"></circle>
                            <path d="M21 21l-5.2-5.2"></path>
                        </svg>
                    </a>
                    <a class="btn btn-sm btn-outline-secondary" href="/signup">Sign Up</a>
                    <a class="btn btn-sm btn-outline-secondary" href="/login">login</a>
                </div>
            </div>
        </header>

        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 link-secondary" href="/">Home</a>
                <a class="p-2 link-secondary" href="/transactions">Transaksi</a>
                <a class="p-2 link-secondary" href="/about">About</a>
                <a class="p-2 link-secondary" href="/contact-us">Contact-Us</a>
            </nav>
        </div>
    </div>

    <main class="container">
        @yield('content')
    </main>

    <footer class="blog-footer mt-4">
        <p>Blog template built for <a href="/">UAS - M - 2020110059</a> <a
                href="https://twitter.com/mdo"></a></p>
        <p>
            <a href="">Back to top</a>
        </p>
    </footer>
</body>

</html>