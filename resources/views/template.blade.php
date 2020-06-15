<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mariano Villavicencio, and Bootstrap contributors">
    <title>Bootstrap Template</title>

    <link rel="shortcut icon" href="img/bootstrap-solid.svg" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600;900&display=swap" rel="stylesheet">
    <script src="js/404-script.js" crossorigin="anonymous"></script>


    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
    <link href="css/404-style.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light border-bottom">
        <a class="navbar-brand" href="/">
            <h1 id="titulo">Navbar</h1>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <div class="navbar sticky-top navbar-expand-lg navbar-light border-bottom" id="ulNavItems">
        <div class=" collapse navbar-collapse justify-content-end " id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" id="aNavlinks" href="{{ route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="aNavlinks" href="{{ route('about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="aNavlinks" href="{{ route('service')}}">Service</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="aNavlinks" href="{{ route('contact')}}">Contact</a>
                </li>
            </ul>
        </div>
    </div>


    <!-- End Navbar -->

    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer class="footer mt-auto py-3 border-top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md">
                    <small class="d-block mb-3">Bootstrap © 2017-2020</small>
                </div>
                <div class="col-12 col-md">
                    <h5>Features</h5>
                </div>
                <div class="col-12 col-md">
                    <h5>Resources</h5>
                </div>
                <div class="col-12 col-md">
                    <h5>About</h5>
                </div>

            </div>
        </div>
    </footer>


    <script src="js/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>

</body>

</html>