<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale() ?? 'en') }}">
<head>
    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner">
        </span></span>
    </div>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="assets/images/YuuDee2.png">
    <title>yuudee ขาย เช่า อสังหาริมทรัพย์ </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <link href="{{ asset('/assets/css/home.css') }}" rel="stylesheet" type="text/css" /> 
        <link href="{{ asset('/assets/css/footer.css') }}" rel="stylesheet" type="text/css" /> 
        <link href="{{ asset('/assets/css/navber.css') }}" rel="stylesheet" type="text/css" /> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
        @include('layout.menu')
            <div class="container">
                @yield('content')
            </div>
        @include('layout.footer')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('/assets/js/home.js') }}"></script> 

</body>
</html>