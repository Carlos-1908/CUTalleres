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
                <div class="container px-4">
                    <a class="navbar-brand" href="{{ url('/') }}"><img src="../../../assets/CUT.png" alt="Logo cutonala" width="140" height="50"></a>
                    <!--<a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Inicio</a>-->
                </div>
            </div>
        </nav>

        <!-- About section-->
        <section id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">{{ __('Talleres') }}</div>
                                <div class="card-body">
                                    <table border="1" class="table">
                                        <thead>
                                            <th> Nombre del taller </th>
                                            <th> Nombre del profesor </th>
                                            <th> Correo del profesor</th>
                                            <th> Descripcion</th>   
                                        </thead>
                                        <tbody>
                                        @foreach($Taller as $Talleres)
                                        <tr>
                                        <td>{{$Talleres->nombre_taller}}</td>
                                        <td>{{$Talleres->nombre_profesor}}</td>
                                        <td>{{$Talleres->correo_profesor}}</td>
                                        <td>{{$Talleres->descripcion }}</td>
                                        <td><a class="btn btn-success">{{ __('Registrarse') }}</a><br>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
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
    </body>
</html>
