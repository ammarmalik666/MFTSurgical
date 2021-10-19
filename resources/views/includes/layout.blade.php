<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        @yield('meta')
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <base href="/">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
        @include('includes.head_css')
        @yield('extra_css')
    </head>
    <body>
        @include('includes.header')
        <main>
            @yield('main_content')
        </main>
        <!-- back to top start -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- footer_area-start -->
        @include('includes.footer')
        <!-- JS here -->
        @include('includes.scripts')
    </body>
</html>