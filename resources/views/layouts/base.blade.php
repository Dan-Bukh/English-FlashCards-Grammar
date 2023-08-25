<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EnglishGrammar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        a {
            color: #0d6efd;
            text-decoration:none;
        }
        a:hover{
            color: #198754;

            text-decoration:underline;
        }
        h1, h2, h3, h4, p {
            color:#041b3d;
        }
        body {
            background-color: #ffff;
            margin-top: 0.0em;
        }
        header, nav{
            border-bottom: 1px solid #0D1B2A;
            background-color: #ffff;
        }
    </style>
</head>
<body>
    @include('includes.header')
    <main class="mt-5">
        @yield('content')
    </main>

    @include('includes.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
    @stack('js')
    
</body>
</html>