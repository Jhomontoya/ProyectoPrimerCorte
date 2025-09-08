<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Proyecto Primer Corte</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        h1 { color: #0078D4; }
        .info { background: #f0f0f0; padding: 20px; margin: 20px auto; width: 60%; border-radius: 8px; }
    </style>
</head>
<body>
    <h1>✅ Proyecto Primer Corte</h1>
    <div class="info">
        <p><strong>Estudiante:</strong> Jhon Montoya</p>
        <p><strong>Curso:</strong> Inteligencia de Negocios</p>
        <p><strong>Fecha:</strong> <?php echo date('d/m/Y'); ?></p>
        <p><strong>PHP Version:</strong> <?php echo phpversion(); ?></p>
    </div>
</body>
</html>
