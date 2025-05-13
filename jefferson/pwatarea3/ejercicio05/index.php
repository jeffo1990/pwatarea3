<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Galería de Imágenes</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background:  url('https://cdn.pixabay.com/photo/2015/12/04/14/05/code-1076536_1280.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        h1 {
            margin: 30px 0 10px;
            text-align: center;
            color:rgb(156, 32, 32);
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
        }

        .galeria {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }

        .galeria img {
            width: 250px;
            border: 4px solid white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.4);
            transition: transform 0.3s;
            cursor: pointer;
        }

        .galeria img:hover {
            transform: scale(2.05);
        }

        #lightbox {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.9);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        #lightbox img {
            max-width: 90%;
            max-height: 90%;
            border: 4px solid white;
            border-radius: 12px;
        }

        #lightbox:target {
            display: flex;
        }

        #lightboxClose {
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 40px;
            color: yellow;
            text-decoration: none;
        }

        .mensaje {
            text-align: center;
            margin-top: 40px;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <h1>Galería de Imágenes</h1>
    <div class="galeria">
        <?php
            $directorio = "imagenes/";
            $formatosPermitidos = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
            $imagenes = scandir($directorio);
            $hayImagenes = false;

            foreach ($imagenes as $img) {
                $extension = strtolower(pathinfo($img, PATHINFO_EXTENSION));
                if (in_array($extension, $formatosPermitidos)) {
                    $hayImagenes = true;
                    echo "<a href='#lightbox' onclick=\"mostrarImagen('$directorio$img')\"><img src='$directorio$img' alt='Imagen'></a>";
                }
            }

            if (!$hayImagenes) {
                echo "<p class='mensaje'>No hay imágenes disponibles en la galería.</p>";
            }
        ?>
    </div>

    <div id="lightbox">
        <a id="lightboxClose" href="#">&times;</a>
        <img id="lightboxImg" src="" alt="Imagen ampliada">
    </div>

    <script>
        function mostrarImagen(ruta) {
            document.getElementById("lightboxImg").src = ruta;
        }
    </script>
</body>
</html>
