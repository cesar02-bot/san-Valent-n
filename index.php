<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>¿Quieres ser mi San Valentín?</title>
    <!-- Fuente personalizada de Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <img src="" >

</head>
<body class="fondo-animado">
    <div class="contenedor">
        <h1>¿Quieres ser mi San Valentín?</h1>

<!-- GIF del gato animado -->
<img src="gato.gif" alt="Gato lanzando un beso" class="gato-animado">


        <!-- Botones de Sí y No -->
        <div class="botones">
            <button id="btn-si">Sí</button>
            <button id="btn-no">No</button>
        </div>
    </div>

    <!-- Script JavaScript para manejar los clics -->
    <script>
        document.getElementById('btn-si').onclick = function() {
            window.location.href = 'respuesta.php';
        };
        document.getElementById('btn-no').onclick = function() {
            alert('Oh, piensalo nuevamente ☹️');
        };
    </script>

<footer>
        <p>&copy; 2025 Hecho con 💖 por tu Ladilla.🐨</p>
    </footer>
</body>
</html>
