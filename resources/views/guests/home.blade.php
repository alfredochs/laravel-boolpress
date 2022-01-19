<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- Scripts --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/vue.js') }}" defer></script>


</head>

<body>
    {{-- <div class="container-fluid align-items-center bg-dark text-light">
        <div class="container d-flex justify-content-between p-3">
            <div class="btn btn-danger">Dashboard</div>
            <div class="d-flex" style="gap: 10px">
                <div class="">
                    <a class="btn btn-primary" href="/">Home</a>
                </div>
                <div>
                    <a class="btn btn-primary" href="login">Login</a>
                </div>
            </div>
        </div>
    </div> --}}
    @if (Route::has('login'))
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="text-light">
                        Bool Press
                    </div>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-auto">
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.home') }}">Dashboard Admin</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>
                            @endif
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    @endif



    <div id="vueApp"></div>
</body>

</html>