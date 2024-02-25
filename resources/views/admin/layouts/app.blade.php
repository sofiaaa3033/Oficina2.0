<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" vendedor="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" vendedor="ie=edge">
    <title>@yield('title') - {{config('app.name')}}</title>

    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-50">

    <div class="container mx-auto py-8">
        @yield('content')
       
    </div>
    
</body>
</html>