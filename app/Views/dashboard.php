<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f1f4f9; margin: 0; padding: 40px 15px; }
        .contenedor { max-width: 500px; margin: auto; background: white; padding: 25px; border-radius: 10px; box-shadow: 0 3px 12px rgba(0,0,0,0.15); }
        h2 { margin-top: 0; }
        button { width: 100%; padding: 12px; margin-top: 20px; background: #ef4444; color: white; border: 0; border-radius: 5px; cursor: pointer; }
    </style>
</head>
<body>
    <div class="contenedor">
        <h2>Bienvenido <?= esc(session()->get('usuario')) ?></h2>
        
        <p>usuario autenticación</p>
        
        <p>has iniciado sesión correctamente</p>

        <form action="<?= site_url('logout') ?>" method="post">
            <?= csrf_field() ?>
            <button type="submit">Cerrar sesión</button>
        </form>
    </div>
</body>
</html>