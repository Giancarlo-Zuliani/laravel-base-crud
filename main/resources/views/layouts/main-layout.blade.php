<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <script src="{{asset('js/app.js')}}"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Devices</title>
</head>
<body>
    
    @include('components.header')
    
    <main>

        @yield('content')

    </main>

    @include('components.footer')

</body>
</html>