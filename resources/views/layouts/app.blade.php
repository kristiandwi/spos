@php header('Access-Control-Allow-Origin: *');
@endphp

<!DOCTYPE html>
<html lang="id-ID">
    @include('includes.header')
    <body>
    <!-- Google Tag Manager (noscript) -->
    <!-- End Google Tag Manager (noscript) -->
    <!-- ads frame top -->
    @include('includes.header-section')
    @yield('content')
    @include('includes.footer')
    </body>
</html>