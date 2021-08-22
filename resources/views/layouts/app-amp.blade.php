@php header('Access-Control-Allow-Origin: *');
@endphp
<!doctype html>
<html ⚡>
    @include('includes.amp.header')
    <body>
    @include('includes.amp.header-area')
    @yield('content')
    @include('includes.amp.footer')
    </body>
</html>