<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mensaje según la hora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark d-flex justify-content-center align-items-center min-vh-100 text-white">
    <div class="card bg-secondary text-white shadow-lg p-5 text-center" style="max-width: 500px;">
        <h1 class="display-5">{{ $mensaje }}</h1>
        <p class="mt-3">¡Esperamos que tengas un excelente día!</p>
    </div>
</body>
</html>
