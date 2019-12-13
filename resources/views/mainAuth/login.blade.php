@extends('mainLayouts.app')
@push('styles')
<style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
      background: #fff;
    }

    main {
      flex: 1 0 auto;
    }

    .input-field input[type=date]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
      color: #e91e63;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 2px solid #e91e63;
      box-shadow: none;
    }
</style>
@endpush
@section('content')
{{--  --}}
@include('mainLayouts.login_form')
{{--  --}}
@push('scripts')
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>    
@endpush
@endsection