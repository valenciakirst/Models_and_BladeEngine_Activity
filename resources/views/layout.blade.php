<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your App Title</title>
    <!-- Include any CSS or meta tags needed for your application -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav>
        <!-- Your navigation bar content goes here -->
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content') <!-- This will be replaced by the content of individual pages -->
    </main>

    <!-- Footer -->
    <footer>
        <!-- Your footer content goes here -->
    </footer>

    <!-- Include any JavaScript files if needed -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

