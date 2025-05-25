<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Acerca de Mí</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            text-align: center;
            padding: 50px;
        }
        .perfil {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px #aaa;
            display: inline-block;
        }
        img {
            width: 150px;
            height: 150px;
            border-radius: 5px;
        }
        .enlaces a {
            display: inline-block;
            margin: 10px;
            text-decoration: none;
            font-size: 16px;
            padding: 10px 20px;
            border-radius: 8px;
            color: white;
        }
        .telegram {
            background-color: #0088cc;
        }
        .whatsapp {
            background-color: #25d366;
        }
        iframe {
            margin-top: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="perfil">
    <h2>👤 Acerca de Mí</h2>

    <p><strong>Nombre:</strong> Luis Jose Victorino Avila</p>

    <img src="perfil.jpg.jpg" alt="Foto de perfil 2x2">

    <div class="enlaces">
        <a href="https://t.me/miusuario" class="telegram" target="_blank">💬 Chatea por Telegram</a>
        <a href="https://wa.me/8098675881" class="whatsapp" target="_blank">💬 Chatea por WhatsApp</a>
    </div>

    <h3>🎥 Video recomendado</h3>
    <iframe width="400" height="225"
        src="https://www.youtube.com/embed/dQw4w9WgXcQ"
        title="Video de YouTube recomendado"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen>
    </iframe>
</div>

</body>
</html>
