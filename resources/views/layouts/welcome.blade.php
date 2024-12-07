<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('img/logo.png')}}" rel="icon">
        <title>Sistem Informasi Perpustakaan</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="{{asset('template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('template/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('template/css/ruang-admin.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <!-- Styles -->
        <style>
            body {
                background: linear-gradient(135deg, #87CEFA 0%, #00BFFF 100%);
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                font-family: 'Poppins', sans-serif;
                margin: 0;
                animation: waveAnimation 6s infinite alternate; /* Added animation for color wave effect */
            }

            @keyframes waveAnimation {
                0% {
                    background: linear-gradient(135deg, #87CEFA 0%, #00BFFF 100%);
                }
                50% {
                    background: linear-gradient(135deg, #00BFFF 0%, #1E90FF 100%); /* Different blue shades for wave effect */
                }
                100% {
                    background: linear-gradient(135deg, #1E90FF 0%, #87CEFA 100%);
                }
            }

            .header h1 {
                color: white;
            }
        </style>
    </head>
    <body>
        <div class="header">
            <!--Content before waves-->
            <div class="inner-header flex" style="text-align: center;">
                <h1>Sistem Informasi Perpustakaan</h1>  
                @yield('content')
            </div>
        </div>
    </body>
    
</html>
