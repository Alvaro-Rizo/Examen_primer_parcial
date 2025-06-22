<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Saludo Repetido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-info-subtle d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg p-5 text-center" style="max-width: 600px;">
        <h2 class="text-success mb-4">Saludo repetido {{ $veces }} veces</h2>
        @for ($i = 0; $i < $veces; $i++)
            <p class="fs-4">👋 ¡Hola!</p>
        @endfor
    </div>
</body>
</html>
