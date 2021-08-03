<!DOCTYPE html>
<html lang="id-ID">
    @include('includes.header')
    <body id="uksw">
    <div id="mega-billboard-container" class="smooth" data-height="400px">

        <div id="div-big" class="smooth">
            <a target="_blank" href="https://uksw.edu/ ">
                <img src="{{ asset('/images/uksw/Banner_02.jpg') }}" width="996px">
            </a>
        </div>
    </div>

    <div id="skinad-left">            
        <div id="left-lk">
            <a href="https://admisi.uksw.edu/ " target="_blank">
                <img src="{{ asset('/images/uksw/Banner_01.jpg') }}">
            </a>
            
        </div>
    </div>

    <div id="skinad-right">
        <div id="right-lk">
            <a href="https://admisi.uksw.edu/ " target="_blank">
                <img style="max-width : unset;" src="{{ asset('/images/uksw/Banner_03.jpg') }}">
            </a>
        </div>
    </div>
    @include('includes.header-uksw')
    @yield('content')
    @include('includes.footer')
    </body>
</html>