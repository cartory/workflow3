@extends('mainLayouts.app')
@push('styles')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endpush
@section('content')
    <br>
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
                        El evento más grande sobre gente que quiere aprender
                        más de internet. En este evento te comparto cómo tener
                        una vida de constante aprendizaje
                    </p>
                    <a class="event-url" href="#">Ver plática</a>
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
                        El evento más grande sobre gente que quiere aprender
                        más de internet. En este evento te comparto cómo tener
                        una vida de constante aprendizaje
                    </p>
                    <a class="event-url" href="/themes">Ver plática</a>
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
                        El evento más grande sobre gente que quiere aprender
                        más de internet. En este evento te comparto cómo tener
                        una vida de constante aprendizaje
                    </p>
                    <a class="event-url" href="https://www.draw.io/" target="_blank">Ver plática</a>
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
                        El evento más grande sobre gente que quiere aprender
                        más de internet. En este evento te comparto cómo tener
                        una vida de constante aprendizaje
                    </p>
                    <a class="event-url" href="/form-builder/forms" target="_blank">Ver plática</a>
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
                        El evento más grande sobre gente que quiere aprender
                        más de internet. En este evento te comparto cómo tener
                        una vida de constante aprendizaje
                    </p>
                    <a class="event-url" href="/admin">Ver plática</a>
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
                        El evento más grande sobre gente que quiere aprender
                        más de internet. En este evento te comparto cómo tener
                        una vida de constante aprendizaje
                    </p>
                    <a class="event-url" href="#">Ver plática</a>
                </div>
            </article>
        </div>
    </section>
    <br>
@endsection