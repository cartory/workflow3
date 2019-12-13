@extends('mainLayouts.app')
@push('styles')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<style>
    .event-description {
        text-align: center;
    }
</style>
@endpush
@section('content')
<section class="event-list" id="eventos">
    <div class="container">
        {{-- PERFIL --}}
        <article class="event">
            <figure class="event-imageContainer">
                <img class="event-image" src="../images/platzi-conf.jpg" width="500" />
            </figure>
            <div class="event-detail">
                <h3 class="event-tittle">Perfil</h3>
                <p class="event-description">
                    Ver los datos personales del usuario <br>
                </p>
                <a class="event-url" href="#">Ver Perfil</a>
            </div>
        </article>
        {{-- TEMAS --}}
        <article class="event">
            <figure class="event-imageContainer">
                <img class="event-image" src="../images/platzi-conf.jpg" width="500" />
            </figure>
            <div class="event-detail">
                <h3 class="event-tittle">Temas</h3>
                <p class="event-description">
                    Elija entre los temas disponibles <br>
                    un tema acorde a sus gustos.
                </p>
                <a class="event-url" href="/themes">Ver Temas</a>
            </div>
        </article>
        {{-- DIAGRAMADOR --}}
        <article class="event">
            <figure class="event-imageContainer">
                <img class="event-image" src="../images/platzi-conf.jpg" width="500" />
            </figure>
            <div class="event-detail">
                <h3 class="event-tittle">Diagramador</h3>
                <p class="event-description">
                    Cree su propio modelo de flujo para su empresa
                </p>
                <a class="event-url" href="https://www.draw.io/" target="_blank">Ver Diagramador</a>
            </div>
        </article>
        {{-- FORMULARIOS --}}
        <article class="event">
            <figure class="event-imageContainer">
                <img class="event-image" src="../images/platzi-conf.jpg" width="500" />
            </figure>
            <div class="event-detail">
                <h3 class="event-tittle">Formularios</h3>
                <p class="event-description">
                    Genere sus formularios dinámicos <br>
                    para sus usuarios
                </p>
                <a class="event-url" href="/form-builder/forms" target="_blank">Ver Formularios</a>
            </div>
        </article>
        {{-- ADMINISTRADOR --}}
        <article class="event">
            <figure class="event-imageContainer">
                <img class="event-image" src="../images/platzi-conf.jpg" width="500" />
            </figure>
            <div class="event-detail">
                <h3 class="event-tittle">Administrador</h3>
                <p class="event-description">
                    Controle los aspectas del sistema <br>
                    y los usuarios registrados
                </p>
                <a class="event-url" href="/admin">Ver Panel Admin</a>
            </div>
        </article>
        {{-- BITACORA Y BACKUP --}}
        <article class="event">
            <figure class="event-imageContainer">
                <img class="event-image" src="../images/platzi-conf.jpg" width="500" />
            </figure>
            <div class="event-detail">
                <h3 class="event-tittle">Bitacora y Backup</h3>
                <p class="event-description">
                    Realice copias de seguridad del sistema <br>
                    y obtenga un archivo con las actividades <br>
                    de los usuarios.
                </p>
                <a class="event-url" href="/backupmanager">Ver Backup</a>
            </div>
        </article>
    </div>
</section>
<br>
@endsection