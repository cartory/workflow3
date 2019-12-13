@extends('mainLayouts.app')
@section('content')
<div class="container" style="background: gray;">
    <div class="row">
        @foreach ($themes as $theme)
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img width="250px" height="250px" src="./images/temas/{{ $theme->backgroundColor }}.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <form action="/themes/{{ $theme->id }}" method="post">
                        @method('PUT')
                        @csrf
                        <button type="submit">Cambiar</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection