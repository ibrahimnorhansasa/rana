<!doctype html>
<html lang="ar" dir="rtl" data-bs-theme="auto">

<head>
    <script src="{{asset('assets/js/color-modes.js')}}"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title> رنا القفاري</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album-rtl/">




    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="{{asset('assets/dist/css/bootstrap.rtl.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/dist/css/style.css')}}" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0/css/all.min.css"
        integrity="sha512-QfDd74mlg8afgSqm3Vq2Q65e9b3xMhJB4GZ9OcHDVy1hZ6pqBJPWWnMsKDXM7NINoKqJANNGBuVRIpIJ5dogfA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }

    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
        z-index: 1500;
    }

    .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
    }
    </style>


</head>

<body>



    <header>

        <div class="navbar">
            <div class="container" style="justify-content: start;border-bottom: 2px #867f7f solid;">

                <a href="#" class="navbar-brand d-flex align-items-center">
                    <h5 class="rana">رنا القفاري</h5>
                </a>

                <a href="#post" class="navbar-brand">
                    <h5 class=""> مدونتي</h5>
                </a> <a href="#recommend" class="navbar-brand">
                    <h5 class=""> توصياتي</h5>
                </a>


                <a class=" mr-auto" style="margin-right:auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false"
                    aria-label="تبديل التنقل">
                    <span class="mb-1 text-center" style="color: #E75F47;"><i class="far fa-times-circle"></i>
                        <i class="fas fa-at"></i>
                    </span>
                </a>

            </div>
        </div>
    </header>




    <main>

        @yield('content')

    </main>

    <footer class="text-body-secondary py-5">
        <div class="container ">


            <div class="text-center">
                <p class="mb-1 text-center" style="color: #E75F47;"><i class="far fa-times-circle"></i>
                    <i class="fas fa-at"></i>
                </p>
                <p class="mb-0 text-center ">(وما توفيقي الا بالله)</p>
            </div>
        </div>
        <p class="float-end mb-1">
            <!-- <a href="#">عد إلى الأعلى</a> -->
        </p>
    </footer>
    <script src="{{asset('assets/dist/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>