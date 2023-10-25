<!DOCTYPE html>
<html lang="en" data-theme="halloween">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container mx-auto">
        <button class="btn btn-primary">awdawd</button>
    </div>
    @include('participals.nav')
    @yield('content')
</body>
</html>
