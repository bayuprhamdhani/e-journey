<!DOCTYPE html>
<html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel - ItSolutionStuff.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);

        :root {
            --navbar-color: #ffffff; /* Warna default */
        }

        body{
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            background-color: #f5f8fa;
        }
        .navbar-laravel
        {
            box-shadow: 0 2px 4px rgba(0,0,0,.04);
        }
        .navbar-brand , .nav-link, .my-form, .login-form
        {
            font-family: Raleway, sans-serif;
        }
        .my-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        .my-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }
        .login-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        .login-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }
    </style>
    
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <!-- Pemuatan Popper.js dan Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>
    
    @yield('csscustom')

</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light"  style="background-color: var(--navbar-color);">
    <div class="container">
        @auth
            @php
                $userName = Auth::user()->student->name;
            @endphp
        @else
            @php
                $userName = 'Dreamy';
            @endphp
        @endauth
        <img src="{{ asset('images/user.png') }}" alt="" style="width: 35px; height: 35px; margin-right: 10px;">
        <a class="navbar-brand" style="font-weight: bold; font-size: 20px;">{{ $userName }}</a>

        <!-- Navbar Toggler di Kanan -->
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Menu -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}" style="font-weight: bold; font-size: 20px;">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}" style="font-weight: bold; font-size: 20px;">Register</a>
                    </li>
                @else
                    <li class="nav-item">
                        <img src="{{ asset('images/notif.png') }}" alt="" style="width: 35px; height: 35px; margin-right: 5px;">
                    </li>
                    <li class="nav-item me-2">
                        <button class="btn btn-outline-secondary" onclick="history.back()">← Back</button>
                    </li>
                    <li class="nav-item">
                        <a class="btn rounded-start" href="{{ route('logout') }}"  style="background-color: #23486A; color: white;">Logout</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
@if(session('error'))
    <div id="popup-alert">
        <div class="popup-content">
            <p>{{ session('error') }}</p>
        </div>
    </div>

    <style>
        #popup-alert {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.4);
            z-index: 9999;
        }

        .popup-content {
            background-color: white;
            padding: 30px 60px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            font-size: 24px;
            font-weight: bold;
            color: #d00000;
        }
    </style>

    <script>
        setTimeout(() => {
            document.getElementById('popup-alert')?.remove();
        }, 2000); // Hilang setelah 2 detik
    </script>
@endif
  
        @yield('content')

        @yield('jscustom')
</body>
</html>
