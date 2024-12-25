<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- <link rel="stylesheet" href="/style.css"> -->
    <title>E-COMMERCE WEBSITE BY EDYODA | CREATED BY PRIYANKA SHARMA</title>
    <!-- favicon -->
    <link
      rel="icon"
      href="https://yt3.ggpht.com/a/AGF-l78km1YyNXmF0r3-0CycCA0HLA_i6zYn_8NZEg=s900-c-k-c0xffffffff-no-rj-mo"
      type="image/gif"
      sizes="16x16"
    />
    <!-- header links -->
    <script src="https://kit.fontawesome.com/4a3b1f73a2.js"></script>
    <link
      href="https://fonts.googleapis.com/css?family=Lato&display=swap"
      rel="stylesheet"
    />
    <!-- slider links -->
    <!-- <script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> -->
    <script src="js/jQuery3.4.1.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
    />
  </head>

  <body>
   @yield('header')
  </body>

  <!-- slider JS START -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
  <script>
    $(document).ready(function () {
      $("#containerSlider").slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
      });
    });
  </script>
  <!-- slider JS ENDS -->

  <!-- content JS -->
  <script src="content.js"></script>
</html>
