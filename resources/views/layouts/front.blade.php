<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{$title}}</title>
        <!-- Partials Styles -->
        @include('partials.front.styles')
    </head>
    <body id="page-top">
        <!-- Partials Navbar -->
        @include('partials.front.navbar')
        
        <!-- Content -->
        @yield('content')
        <!-- partial scripts -->
        @include('partials.front.scripts')
        
    </body>
</html>
