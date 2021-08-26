@php header('Access-Control-Allow-Origin: *');
@endphp
@if(Helper::mobile_detect())
    <script>window.location.href = "{{ str_replace('www.solopos.com', 'm.solopos.com', url()->current()) }}";</script>
@endif
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