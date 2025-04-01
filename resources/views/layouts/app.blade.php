<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Menús Laravel</title>
    @include('partials.styles')
</head>
<body>
    @include('layouts.nav')
    
    <main class="container">
        @yield('content')
    </main>

    <footer class="footer">
        <p>Desarrollado por Fernando Gorocica Bermúdez - © {{ date('Y') }} | Actividad 11 Menús</p>
    </footer>
</body>
</html>