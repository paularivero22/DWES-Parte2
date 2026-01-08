<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Estilos básicos */
        :root {
            --bg: #f5f7fa;
            --card: #ffffff;
            --primary: #2b7cff;
            --muted: #555;
            --radius: 8px;
        }

        * {
            box-sizing: border-box
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: var(--bg);
            color: #222;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
        }

        .card {
            background: #fff;
            width: 100%;
            max-width: 420px;
            padding: 24px;
            border-radius: 8px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
        }

        h1 {
            margin-bottom: 20px;
            font-size: 22px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 14px;
        }

        label {
            font-size: 14px;
            margin-bottom: 4px;
        }

        input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input:focus {
            outline: none;
            border-color: #2b7cff;
        }

        .actions {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-top: 16px;
        }

        button {
            background: #2b7cff;
            color: #fff;
            border: none;
            padding: 10px 18px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 600;
        }

        .actions a {
            color: #2b7cff;
            text-decoration: none;
            font-size: 14px;
        }

        @media (max-width:520px) {
            .card {
                padding: 14px
            }

            form {
                flex-direction: column;
                align-items: stretch
            }

            button {
                width: 100%
            }
        }

        .mensaje {
            margin-bottom: 12px;
            padding: 10px;
            border-radius: 4px;
            font-size: 14px;
        }

        .mensaje.error {
            background: #fff0f0;
            border: 1px solid #f2c2c2;
            color: #7a1b1b;
        }

        .mensaje.ok {
            background: #e9f7ef;
            border: 1px solid #c7eed4;
            color: #124825;
        }
    </style>
</head>

<body>
    <main>
        <div class="card">
            <h1>Iniciar sesión</h1>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="correo">Correo Electronico</label>
                    <input type="text" id="correo" name="correo">
                </div>

                <div class="form-group">
                    <label for="contrasenia">Contraseña</label>
                    <input type="password" id="contrasenia" name="contrasenia">
                </div>

                <div class="actions">
                    <button type="submit">Entrar</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>