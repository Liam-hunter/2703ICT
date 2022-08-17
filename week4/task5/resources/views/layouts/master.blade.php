<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles/style.css">
    <title>@yield('title')</title>
</head>
<body>
    <h2>Australian Prime Ministers</h2>
    @yield('content')
    @include('./layouts/footer')
</body>
</html>