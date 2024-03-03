<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Dreams LMS</title>
        @include('frontend.partials.style')
    </head>
    <body>
        <div class="main-wrapper">
            <header class="header">
                <div class="header-fixed">
                @include('frontend.partials.header')
                </div>
            </header>
            <!-- Start Content Section-->
            @yield('content')
            <!-- End Content Section-->
            <footer class="footer">
                @include('frontend.partials.footer')            
            </footer>
        </div>
        @include('frontend.partials.script')
    </body>
</html>