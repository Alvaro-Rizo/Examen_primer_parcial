<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mensaje Personalizado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg p-5 text-center" style="max-width: 500px;">
        <h2 class="text-primary mb-3">¡Hola, {{ $nombre }}!</h2>
        <p class="lead">Bienvenido a nuestra aplicación Laravel</p>
    </div>
</body>
</html>
