<!doctype html>
<html lang="en">
<head>
    @include('backend.partials.header')
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        @include('backend.partials.navbar')      
        <div class="app-main">
            <div class="app-main__outer" style="padding-left: 0px !important;">
                <div class="app-main__inner">
                    @yield('content')
                </div>
                @include('backend.partials.footer')  
            </div>
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
    @include('backend.partials.script')
</body>
</html>