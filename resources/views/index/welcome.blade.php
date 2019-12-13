<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>WORKFLOW SI2</title>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    @include('index.menu')
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <br><br>
            <h1 class="header center orange-text" style="text-align: center">PROYECTO GRUPAL SISTEMAS DE INFORMACIÓN II</h1>
            <div class="row center">
                <h5 class="header col s12 light">
                    A modern responsive front-end framework based on Material Design
                </h5>
            </div>
            <div class="row center">
                <a href="https://github.com/cartory/workflow3.git" id="download-button" target="_blank" title="Ver Repositorio git"
                    class="btn-large waves-effect waves-light orange">Descargar PROYECTO</a>
            </div>
            <br><br>
        </div>
    </div>
    <div class="container">
        <div class="section">
            <!--   Icon Section   -->
            <div class="row">
                @include('index.icon', [
                    'icon' => 'flash_on',
                    'title' => 'Automatización de procesos',
                    'text' => 'El workflow es la automatización de las tareas de una empresa, de tal manera que todo queda incluido dentro de un orden y jerarquía preestablecidos.'
                ])
                @include('index.icon', [
                    'icon' => 'group',
                    'title' => 'Colaboración',
                    'text' => '
                    Los Sistemas de Gestión de Flujos de trabajo, tienen el objetivo de integrar a las personas, los ordenadores y los procesos con objeto de reducir tiempo y aumentar el control en la ejecución de cualquier trabajo
                    '
                ])
                @include('index.icon', [
                    'icon' => 'settings',
                    'title' => 'Herramientas',
                    'text' => '
                    herramienta que te permita diseñar, implementar, controlar y optimizar la forma de trabajar de tu equipo
                    '
                ])
            </div>
        </div>
        <br><br>
    </div>

    <footer class="page-footer orange">
        @include('index.footer')
    </footer>
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="{{ asset('js/materialize.js') }}"></script>
    <script src="{{ asset('js/init.js') }}"></script>
</body>

</html>