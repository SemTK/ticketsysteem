<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticketsysteem</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

    @vite(['resources/css/style.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        @include('components.header')
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        @include('components.footer')
    </footer>
</body>
</html>