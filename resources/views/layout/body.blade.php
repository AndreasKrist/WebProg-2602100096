<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('custom.bootstrap5')
</head>
<body style="background-color: #e0e0e0; display: flex; flex-direction: column; overflow-x: hidden; min-height: 100vh;">
    <div class="container-fluid p-0 flex-grow-1">
        @include('layout.navbar')
        @yield('konten')
    </div>
    @include('layout.footer')

    @include('custom.script')
</body>
</html>