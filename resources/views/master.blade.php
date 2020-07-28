<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<title>@yield('title')</title>

@yield('link_css')

@include('layouts.css_library')

<body>

    @yield('content')


</body>

@include('layouts.js_library')
@yield('link_js')

</html>
