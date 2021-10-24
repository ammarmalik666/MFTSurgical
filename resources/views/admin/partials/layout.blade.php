<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <base href="/">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/admin/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/admin/assets/img/favicon.png">
    @yield('meta')
    @include('admin.partials.head_css')
    @yield('extra_css')
</head>
<body class="g-sidenav-show  bg-gray-100">
    @include('admin.partials.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @include('admin.partials.header')
        <div class="container-fluid py-4">
            @yield('main_content')
            @include('admin.partials.footer')
        </div>
    </main>
    @include('admin.partials.scripts')
</body>
</html>