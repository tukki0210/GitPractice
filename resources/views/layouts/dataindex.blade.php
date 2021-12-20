<html>
    <head>
        <style>
            .content {},
            .footer {},
        </style>
    </head>
    <body>
        <h1>
            @yield('title')
        </h1>

        <div class="content">
            @yield('content')
        </div>

        <div class="footer">
            @yield('footer')
        </div>

    </body>
</html>