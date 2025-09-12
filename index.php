<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Proyecto Primer Corte</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; background: #f4f4f4; }
        h1 { color: #0078D4; }
        .info { background: #fff; padding: 20px; margin: 20px auto; width: 60%; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        .actions { margin: 30px auto; width: 60%; }
        button { padding: 10px 20px; margin: 5px; font-size: 16px; cursor: pointer; background: #0078D4; color: white; border: none; border-radius: 5px; }
        button:hover { background: #005a9e; }
    </style>
</head>
<body>
    <h1>✅ Proyecto Primer Corte</h1>
    <div class="info">
        <p><strong>Estudiante:</strong> Jhon Montoya</p>
        <p><strong>Curso:</strong> Inteligencia de Negocios</p>
        <p><strong>Fecha:</strong> <?php echo date('d/m/Y H:i:s'); ?></p>
        <p><strong>PHP Version:</strong> <?php echo phpversion(); ?></p>
    </div>

    <div class="actions">
        <h2>Acciones disponibles</h2>
        <button onclick="alert('Función: Consultar datos')">🔍 Consultar</button>
        <button onclick="alert('Función: Modificar datos')">✏️ Modificar</button>
        <button onclick="alert('Función: Eliminar datos')">🗑️ Eliminar</button>
        <button onclick="alert('Función: Generar reporte')">📊 Reporte</button>
    </div>
</body>
</html>
