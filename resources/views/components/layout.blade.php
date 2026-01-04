<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    {{-- Put files under public folder then link like this --}}
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script defer src="js/bootstrap.bundle.min.js"></script>
    {{-- Or Install using npm then include like this --}}
    {{-- @vite(['resources/js/app.js']) --}}
    {{-- If you use vite or npm to install you would need to run npm run dev --}}
    <style>
        header {
            margin-bottom: 50px;
        }

        footer {
            margin-top: 50px;

        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container">
        {{ $main }}
    </main>
    <footer class="bg-dark p-3">
        <div class="container">
            <p class="text-light text-center">All rights are reserved &copy;</p>
        </div>
    </footer>
</body>

</html>
