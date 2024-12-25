<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>E-COMMERCE WEBSITE BY EDYODA | CREATED BY PRIYANKA SHARMA</title>
    <!-- favicon -->
    <link rel="icon"
        href="https://yt3.ggpht.com/a/AGF-l78km1YyNXmF0r3-0CycCA0HLA_i6zYn_8NZEg=s900-c-k-c0xffffffff-no-rj-mo"
        type="image/gif" sizes="16x16" />
    <!-- CSS -->

    <link rel="stylesheet" href="{{ asset('css/content.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/header.css') }}" />
    {{-- <link rel="stylesheet" href="css/header.css" />     --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
    <link rel="icon"
        href="https://yt3.ggpht.com/a/AGF-l78km1YyNXmF0r3-0CycCA0HLA_i6zYn_8NZEg=s900-c-k-c0xffffffff-no-rj-mo"
        type="image/gif" sizes="16x16" />
    <!-- EXTERNAL LINKS -->
    <script src="https://kit.fontawesome.com/4a3b1f73a2.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet" />

    {{-- Slider --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

</head>

<body>

    <!-- HEADER -->
    @include('../lutfi/header')

    {{-- SLIDER --}}
    @include('../lutfi/slider')

    {{-- CONTENT --}}
    @include('../lutfi/content')

    {{-- FOOTER --}}
    @include('../lutfi/footer')


    <script src="{{ asset('js/content.js') }}"></script>
    <script src="{{ asset('js/cart.js') }}"></script>
</body>

</html>
