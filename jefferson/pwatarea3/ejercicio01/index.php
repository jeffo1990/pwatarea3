<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ejercicio 01 - Menú Desplegable</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(120deg, #2980b9, #6dd5fa, #ffffff);
            min-height: 100vh;
        }

        header {
            text-align: center;
            background-color: #2c3e50;
            color: white;
            padding: 40px 20px;
        }

        h1 {
            margin: 0;
            font-size: 2.5em;
        }

        nav {
            max-width: 600px;
            margin: 40px auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            overflow: hidden;
        }

        .menu-item {
            border-bottom: 1px solid #eee;
        }

        .menu-item button {
            width: 100%;
            text-align: left;
            padding: 15px;
            background: #3498db;
            color: white;
            font-size: 1.1em;
            border: none;
            cursor: pointer;
            outline: none;
        }

        .menu-item button:hover {
            background: #2980b9;
        }

        .submenu {
            display: none;
            padding: 10px 20px;
            background: #ecf0f1;
        }

        .submenu a {
            display: block;
            color: #2c3e50;
            padding: 5px 0;
            text-decoration: none;
            transition: 0.3s;
        }

        .submenu a:hover {
            color: #3498db;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #2c3e50;
            color: white;
            margin-top: 60px;
        }
    </style>
</head>
<body>

<header>
    <h1>ejercicio 01: Menú Desplegable</h1>
</header>

<nav>
    <div class="menu-item">
        <button onclick="toggleMenu('submenu1')">Productos</button>
        <div class="submenu" id="submenu1">
            <a href="https://video.aliexpress-media.com/play/u/ae_sg_item/2697379984/p/1/e/6/t/10301/1100200214327.mp4?from=edge&definition=h265">Camisetas</a>
            <a href="https://ae-pic-a1.aliexpress-media.com/kf/S6d2920841e2b4dddb6189f46e377ca787.jpg_960x960q75.jpg_.avif">Pantalones</a>
            <a href="https://ae-pic-a1.aliexpress-media.com/kf/S1a6dc847e9d1413ba8aee04efb6e4dbeg.jpg_960x960q75.jpg_.avif">Zapatos</a>
        </div>
    </div>
    <div class="menu-item">
        <button onclick="toggleMenu('submenu2')">Servicios</button>
        <div class="submenu" id="submenu2">
            <a href="#">Consultoría</a>
            <a href="0985985820">Soporte técnico</a>
            <a href="jeffoloquito@gmail.com">Mantenimiento</a>
        </div>
    </div>
    <div class="menu-item">
        <button onclick="toggleMenu('submenu3')">Contacto</button>
        <div class="submenu" id="submenu3">
            <a href="jeffoloquito@gmail.com">Email</a>
            <a href="0985985820">Teléfono</a>
            <a href="https://es-la.facebook.com/">Redes sociales</a>
        </div>
    </div>
</nav>

<footer>
    <p>&copy; 2025 - Jefferson Narváez</p>
</footer>

<script>
    function toggleMenu(id) {
        const submenu = document.getElementById(id);
        submenu.style.display = submenu.style.display === "block" ? "none" : "block";
    }
</script>

</body>
</html>
