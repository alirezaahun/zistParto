<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>آزمایشگاه زیست پرتو آریا</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Retrina Group" />

    <!--  FavIcon  -->
    <link rel="shortcut icon" href="{{ asset('baselogo.png') }}">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Muli:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Bootstrap Css -->
    <!--  Custom Style CSS  -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <style>
        .multi-item-carousel {
            .carousel-inner {
                >.item {
                    transition: 500ms ease-in-out left;
                }

                .active {
                    &.left {
                        left: -33%;
                    }

                    &.right {
                        left: 33%;
                    }
                }

                .next {
                    left: 33%;
                }

                .prev {
                    left: -33%;
                }

                @media all and (transform-3d),
                (-webkit-transform-3d) {
                    >.item {
                        // use your favourite prefixer here
                        transition: 500ms ease-in-out left;
                        transition: 500ms ease-in-out all;
                        backface-visibility: visible;
                        transform: none !important;
                    }
                }
            }

            .carouse-control {

                &.left,
                &.right {
                    background-image: none;
                }
            }
        }

        // non-related styling:
        body {
            background: #333;
            color: #ddd;
        }

        h1 {
            color: white;
            font-size: 2.25em;
            text-align: center;
            margin-top: 1em;
            margin-bottom: 2em;
            text-shadow: 0px 2px 0px rgba(0, 0, 0, 1);
        }
    </style>

    @yield('css')
</head>

<body data-spy="scroll" data-target="#scrollspy" data-offset="1">

    @include('home.sections.header')

    {{-- <div id="onyx-preloader">
        <div  class="preloader">
            <div class="spinner"></div>
            <div class="loader">
                <span data-text="Z" class="letter-animation">Z</span>
                <span data-text="I" class="letter-animation">I</span>
                <span data-text="S" class="letter-animation">S</span>
                <span data-text="T" class="letter-animation">T</span>
                <span data-text="P" class="letter-animation">P</span>
                <span data-text="A" class="letter-animation">A</span>
                <span data-text="R" class="letter-animation">R</span>
                <span data-text="T" class="letter-animation">T</span>
                <span data-text="O" class="letter-animation">O</span>
            </div>
        </div>
    </div> --}}

    @yield('content')
    @include('home.sections.footer')


    <!--  JavaScripts  -->
    <!--  Custom JS  -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script> --}}
    <script src="{{ asset('js/home.js') }}"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script>
        // Instantiate the Bootstrap carousel
        $('.multi-item-carousel').carousel({
            interval: false
        });

        // for every slide in carousel, copy the next slide's item in the slide.
        // Do the same for the next, next item.
        $('.multi-item-carousel .item').each(function() {
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));

            if (next.next().length > 0) {
                next.next().children(':first-child').clone().appendTo($(this));
            } else {
                $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
            }
        });
    </script>


</body>

</html>
