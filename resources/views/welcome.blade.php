<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CUTalleres</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="icon" type="image/x-icon" href="assets/diamond-half.svg" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                @if (Route::has('login'))
                    <div class="container px-4">
                        @auth
                            <a class="navbar-brand" href="{{ url('/home') }}"><img src="../../../assets/CUT.png" alt="Logo cutonala" width="140" height="50"></a>
                            <!--<a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Inicio</a>-->
                        @else
                            <a class="btn btn-lg btn-light" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Iniciar sesion</a>

                            @if (Route::has('register'))
                                <a class="btn btn-lg btn-light" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registro</a>
                            @endif
                        @endauth
                    </div>
                @endif
        </nav>

            <header class="bg-primary  text-white">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder">CUTalleres</h1>
                <a class="btn btn-lg btn-light" href="{{ route('alumnos') }}"> Ver Talleres</a>
            </div>
        </header>
       
        <!-- About section-->
        <section id="about">
            <div class="slide">
                <div class="slide-inner">
                    <input class="slide-open" type="radio" id="slide-1" 
                        name="slide" aria-hidden="true" hidden="" checked="checked">
                    <div class="slide-item">
                        <img src="../../../assets/talleres.jpg">
                    </div>
                    <input class="slide-open" type="radio" id="slide-2" 
                        name="slide" aria-hidden="true" hidden="">
                    <div class="slide-item">
                        <img src="../../../assets/talleres3.jpg">
                    </div>
                    <input class="slide-open" type="radio" id="slide-3" 
                        name="slide" aria-hidden="true" hidden="">
                    <div class="slide-item">
                        <img src="../../../assets/talleres2.jpg">
                    </div>
                    <label for="slide-3" class="slide-control prev control-1">‹</label>
                    <label for="slide-2" class="slide-control next control-1">›</label>
                    <label for="slide-1" class="slide-control prev control-2">‹</label>
                    <label for="slide-3" class="slide-control next control-2">›</label>
                    <label for="slide-2" class="slide-control prev control-3">‹</label>
                    <label for="slide-1" class="slide-control next control-3">›</label>
                    <ol class="slide-indicador">
                        <li>
                            <label for="slide-1" class="slide-circulo">•</label>
                        </li>
                        <li>
                            <label for="slide-2" class="slide-circulo">•</label>
                        </li>
                        <li>
                            <label for="slide-3" class="slide-circulo">•</label>
                        </li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4">
                <p class="text-center text-white">CENTRO UNIVERSITARIO DE TONALÁ</p>
                <p class="text-center text-white">Campus CUTonalá Av. Nuevo Periférico No. 555 Ejido San José Tateposco, C.P. 45425, Tonalá Jalisco, México</p>
                <p class="text-center text-white">Teléfono: +52 (33) 20 00 23 00 Ext. 64007 y 64044</p><br>
                <p class="m-0 text-center text-white">Copyright &copy; Universidad de Gudalajara 2022</p>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        </div>
    </body>
</html>
