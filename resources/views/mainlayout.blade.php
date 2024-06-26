<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            @yield('content')
        </div>
    </div>
    @yield('script');
</body>
</html>
