<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('partials.css')
    <title>Hello, world!</title>
</head>

<body>
    @include('partials.navbar')

    <div class="container p-3">
        @yield('content')
    </div>

    @include('partials.js')
</body>

</html>
