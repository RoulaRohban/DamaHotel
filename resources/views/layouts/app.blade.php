<!doctype html>
<html>
<head>
    @include('partials.header')
    @yield('styles')
</head>

<body>

@yield('content')


<script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
@yield('scripts')

</body>
</html>

