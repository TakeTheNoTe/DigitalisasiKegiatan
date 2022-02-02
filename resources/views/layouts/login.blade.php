<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <script type="text/javascript">
        window.history.forward();
            function noBack() { window.history.forward(); }
    </script>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Lembaga Penjamin Mutu Universitas Kristen Satya Wacana</title>
    <link rel="stylesheet" href="{{ asset('assetlogin/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cantora+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Capriola">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Carme">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Duru+Sans">
    <link rel="stylesheet" href="{{ asset('assetlogin/fonts/fontlogin.css') }}">
    <link rel="stylesheet" href="{{ asset('assetlogin/css/style-logins.css') }}">
    <link rel="icon" href="https://www.uksw.edu/public/upload/2020/08/27/USER120200827143745.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body onload="noBack();" onpageshow="if (event.persisted) noBack();" onunload="">
    <div class="login-clean" >
            <main class="py-auto">
            @yield('content')
            </main>
    </div>
            <footer class="bg-white sticky-footer">
                    <div class="container my-auto">
                        <div class="text-center my-3 copyright"><span>Copyright © 2021 LPM UKSW</span></div>
                    </div>
                </footer>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <script src="{{ asset('assetlogin/js/jquery.min.js') }}"></script>
</body>
</html>