<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300">

    <!--Icon-->
    <link rel="stylesheet" href="fontawesome/css/fontawesome-all.min.css">

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link rel="stylesheet" href="css/tooplate-style.css">

</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-dark bg-dark justify-content-between">
        <a class="navbar-brand" style="cursor: default;">SLEEPY BANK</a>
        <form class="form-inline">
            <a class="navbar-brand" style="cursor: default;">username</a>
            <a type="button" class="btn btn-danger" href="#">LOGOUT</a>
        </form>
    </nav>

    <div class="row">
        <!--Sidebar-->
        <div class="col-4">
            <!-- <div id="tm-bg"></div> -->
            <div id="tm-wrap" class="img-sidebar" style="background-image: url(images/bg-sidebar.jpg);">
                <div class="tm-main-content">
                    <div class="container tm-site-header-container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-md-col-xl-12 tm-site-header-col">
                                <div class="tm-site-header">
                                    <h1 class="mb-4">Welcome, (Firstname)</h1>
                                    <img src="images/underline.png" class="img-fluid mb-4">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="justify-content: center;">
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="grid">
                                            <div class="grid__item" id="home-link">
                                                <div class="product">
                                                    <a href="/deposit" class="tm-nav-link">
                                                        <img src="/images/deposit.png" class="tm-nav-icon img-icon">
                                                        <span class="tm-nav-text">DEPOSIT</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="grid">
                                            <div class="grid__item" id="team-link">
                                                <div class="product">
                                                    <a href="/withdraw" class="tm-nav-link">
                                                        <img src="/images/withdraw.png" class="tm-nav-icon img-icon">
                                                        <span class="tm-nav-text">WITHDRAW</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="grid">
                                            <div class="grid__item">
                                                <div class="product">
                                                    <a href="/statement" class="tm-nav-link">
                                                        <img src="/images/statement.png" class="tm-nav-icon img-icon">
                                                        <span class="tm-nav-text">STATEMENT</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="grid">
                                            <div class="grid__item">
                                                <div class="product">
                                                    <a href="#" class="tm-nav-link">
                                                        <i class="fas fa-sign-out-alt fa-3x tm-nav-icon" style="color:white;"></i>
                                                        <span class="tm-nav-text">LOGOUT</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-8">
            @yield('content')
        </div>
    </div>

    <!--JS Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>