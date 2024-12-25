<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Cart | E-COMMERCE WEBSITE BY EDYODA </title>
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/header.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}" />
    <!-- favicon -->
    <link rel="icon"
        href="https://yt3.ggpht.com/a/AGF-l78km1YyNXmF0r3-0CycCA0HLA_i6zYn_8NZEg=s900-c-k-c0xffffffff-no-rj-mo"
        type="image/gif" sizes="16x16">
    <!-- header links -->
    <script src="https://kit.fontawesome.com/4a3b1f73a2.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

</head>

<body>

    @include('../lutfi/header')
    <div id="cartMainContainer">
        <h1> Checkout </h1>
        <h3 id="totalItem"> Total Items: 0 </h3>

        <div id="cartContainer">
            <!-- JS rendered code will be appended here -->
        </div>
    </div>
</body>
</html>
@include('../lutfi/footer')




<div id="4"></div>
<script>
    // You can use this script to load the footer dynamically if needed

    function load(url) {
        req = new XMLHttpRequest();
        req.open("GET", url, false);
        req.send(null);
        document.getElementById(4).innerHTML = req.responseText;
    }
</script>


<script src="/cart.js"></script>
{{-- FOOTER --}}

