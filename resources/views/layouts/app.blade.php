<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('partials.css')
    @include('partials.js')

    <title>PWL UAS</title>
</head>

<body>
    @include('partials.navbar')

    <div class="container p-3">
        @include('partials.alert')
        @yield('content')
    </div>


    @stack('script')
</body>

</html>
