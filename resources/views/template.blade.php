<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="A gorgeous looking onepage site template suitable for photographers, visual artists, digital studios, freelancers that would like to showcase their portfolio beautifully.">
    <meta name="keywords" content="bootstrap 5, one page, responsive, photography, minimal, modern, gulp, sass">
    <meta name="author" content="elemis">
    <title>PURA BLANJONG DAN PRASASTI BLANJONG</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/sanur-kauh.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/colors/blue.css') }}">

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- FontAwesome --}}
    <script src="https://kit.fontawesome.com/498b64e446.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body class="onepage" data-bs-spy="scroll" data-bs-target=".navbar-collapse .navbar-nav">
    <div class="content-wrapper">
        @include('header')
        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


</body>

</html>
