@extends('main-layouts.app')
@section('title', 'Admin-LOL')
@section('content')
    <main class="py-4">
        @if (Session::has('flash_message'))
            <div class="container">
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ Session::get('flash_message') }}
                </div>
            </div>
        @endif
        @yield('content')
    </main>
    <hr/>
    <div class="container">
    &copy; {{ date('Y') }}. Created by <a href="http://www.appzcoder.com">AppzCoder</a>
    <br/>
    </div>
@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.8.1/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: '.crud-richtext'
        });
    </script>
    <script type="text/javascript">
        $(function () {
            // Navigation active
            $('ul.navbar-nav a[href="{{ "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" }}"]').closest('li').addClass('active');
        });
    </script>
@endpush