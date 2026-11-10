<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f4f9;
            margin: 0;
            padding: 40px 15px;
        }

        .contenedor {
            max-width: 380px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.15);
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-top: 15px;
        }

        input {
            box-sizing: border-box;
            width: 100%;
            padding: 11px;
            margin-top: 6px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            background: #2563eb;
            color: white;
            border: 0;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #1d4ed8;
        }

        .error {
            background: #fee2e2;
            color: #b91c1c;
            padding: 10px;
            border-radius: 5px;
        }

        .exito {
            background: #dcfce7;
            color: #056422;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <div class="contenedor">

        <h2>Inicio de sesión</h2>

        <?php if ($error = session()->getFlashdata('error')): ?>
            <p class="error"><?= esc($error) ?></p>
        <?php endif; ?>

        <?php if ($mensaje = session()->getFlashdata('mensaje')): ?>
            <p class="exito"><?= esc($mensaje) ?></p>
        <?php endif; ?>

        <form action="<?= site_url('login') ?>" method="post">

            <?= csrf_field() ?>

            <label for="usuario">Usuario:</label>

            <input
                type="text"
                id="usuario"
                name="usuario"
                required
                autocomplete="username"
            >

            <label for="password">Contraseña:</label>

            <input
                type="password"
                id="password"
                name="password"
                required
                autocomplete="current-password"
            >

            <button type="submit">Ingresar</button>

        </form>

        <p style="text-align:center; font-size:12px; margin-top:15px; color:#666;">
            Usuario: jaime / Pass: 123456
        </p>

    </div>

</body>
</html>
