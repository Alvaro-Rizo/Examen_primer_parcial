<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .main-content {
            min-height: calc(100vh - 120px);
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">Gestor de Cursos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('cursos') ? 'active' : '' }}" href="/cursos">Todos los Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('cursos/create') ? 'active' : '' }}" href="/cursos/create">Nuevo Curso</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido Principal -->
    <main class="main-content py-4">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-light py-3">
        <div class="container text-center">
            <p class="mb-0">© 2023 Gestor de Cursos - Todos los derechos reservados</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>