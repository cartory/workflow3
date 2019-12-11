<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>WELCOME BLADE</title>

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
            <h1 class="header center orange-text">Starter Template</h1>
            <div class="row center">
                <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
            </div>
            <div class="row center">
                <a href="http://materializecss.com/getting-started.html" id="download-button"
                    class="btn-large waves-effect waves-light orange">Get Started</a>
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
                    'title' => 'Speeds up development',
                    'text' => 'We did most of the heavy lifting for you to provide a default stylings that
                        incorporate our custom components. Additionally, we refined animations and transitions to
                        provide a smoother experience for developers.'
                ])
                @include('index.icon', [
                    'icon' => 'group',
                    'title' => 'User Experience Focused',
                    'text' => 'By utilizing elements and principles of Material Design, we were able to create
                        a framework that incorporates components and animations that provide more feedback to users.
                        Additionally, a single underlying responsive system across all platforms allow for a more
                        unified user experience.'
                ])
                @include('index.icon', [
                    'icon' => 'settings',
                    'title' => 'Easy to work with',
                    'text' => 'We have provided detailed documentation as well as specific code examples to
                        help new users get started. We are also always open to feedback and can answer any questions
                        a user may have about Materialize.'
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