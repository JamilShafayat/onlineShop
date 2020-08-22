<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('frontend.partials.header')
</head>

<body>
    @include('frontend.partials.navbar')
    @yield('content')
    @include('frontend.partials.footer')
    @include('frontend.partials.script')
</body>

</html>
