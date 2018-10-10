<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('/css/ecommerce.css') }}">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/heroic-features.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Popsicle Things</title>
</head>
<body>
        <div class="main">
            @include('ecommerce.partial.header')
            @yield('content')
            @include('ecommerce.partial.footer')
        </div>
</body>

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="js/ecommerce.js"></script>
</html>