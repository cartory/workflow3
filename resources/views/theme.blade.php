@extends('layouts.app')

@section('content')
<h1>
    Cambiar de tema
</h1>
<div class="container" style="background: lightgray;">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Color de fondo</th>
                <th scope="col">Color de letra</th>
                <th scope="col">Tamaño de letra</th>
                <th scope="col">Cambiar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($themes as $theme)
            <tr>
                <td>
                    <input type="text" value="{{ $theme->backgroundColor }}" disabled>
                </td>
                <td>
                    <input type="text" value="{{ $theme->textColor }}" disabled>
                </td>
                <td>
                    <input type="number" value="{{ $theme->textFont }}" disabled>
                </td>
                <td>
                    <form action="/themes/{{ $theme->id }}" method="post">
                        @method('PUT')
                        @csrf
                        <button type="submit">Cambiar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection