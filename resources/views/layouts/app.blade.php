<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Port / @yield('page')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('WE-EM.png') }}">
</head>

<body class="bg-light">
    <div class="wrapper">
        <div class="container">
            <nav class="navbar navbar-expand-lg" style="background-color :grey; border-radius : 0px 0px 10px 10px;">
                <div class="container-fluid">
                    <a class="navbar-brand" style="margin-left: 20px" href="<?php echo url('/'); ?>">My Port</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item" style="margin-left: 20px">
                                <a class="nav-link active" aria-current="page" href="<?php echo url('/'); ?>">Home</a>
                            </li>
                            <li class="nav-item" style="margin-left: 20px">
                                <a class="nav-link active" aria-current="page" href="<?php echo url('/gallery'); ?>">Gallery</a>
                            </li>
                            <li class="nav-item" style="margin-left: 20px">
                                <a class="nav-link active" aria-current="page" href="<?php echo url('/about'); ?>">My Bio</a>
                            </li>
                            <li class="nav-item" style="margin-left: 20px">
                                <a class="nav-link active" aria-current="page" href="<?php echo url('/posts'); ?>">Laman
                                    Tampil</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        @yield('content-app')

    </div>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>

</html>
