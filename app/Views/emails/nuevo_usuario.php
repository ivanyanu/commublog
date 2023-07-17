<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo usuario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background-color: #242b3d;
            /* text-align: center; */
            margin-bottom: 20px;
        }

        .header img {
            max-width: 100%;
            margin-left: 20px;
        }

        .content {
            background-color: #f2f2f2;
            padding: 20px;
        }

        h1 {
            color: #3b4351;
        }

        p {
            color: #3b4351;
        }

        .notification {
            background-color: #e14a2c;
            border-radius: 5px;
            padding: 10px;
        }

        .notification p {
            color: white !important;
            font-size: 12px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }

        .footer {
            background-color: #242b3d;
            padding: 20px;
            text-align: center;
        }

        .footer p {
            font-size: 14px;
            color: #fdfdfd;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="https://credencialpayments.com/img/logo.png" width="100px">
        </div>
        <div class="content">
            <h1>¡Bienvenido/a!</h1>
            <p>Estimado/a <?php echo esc($name)?>,</p>
            <p>Nos complace darte la bienvenida a nuestra plataforma mundo credencial.</p>
            <p>A continuación, te proporcionamos las credenciales de acceso a tu cuenta:</p>
            <p>Usuario: <b><?php echo esc($username)?></b></p>
            <p>Contraseña: <b><?php echo esc($password)?></b></p>
            <div class="notification">
                <p>Es importante destacar que, por motivos de seguridad, debe cambiar su contraseña una vez que hayas
                    iniciado sesión por primera vez. Esto ayudará a proteger la integridad de tu cuenta y garantizar la
                    confidencialidad de tus datos.</p>
            </div>
            <p>¡Aprovecha al máximo tu experiencia en mundo credencial!</p>
            <p>El equipo de <b>Credencial payments</b></p>
        </div>
        <div class="footer">
            <p>Este correo fue enviado por Credencial payments</p>
            <p>Este correo electrónico ha sido generado automáticamente. Por favor, no respondas a este mensaje. Si
                necesitas asistencia, ponte en contacto con nuestro equipo de soporte a
                través de los canales designados.</p>
        </div>
    </div>
</body>

</html>