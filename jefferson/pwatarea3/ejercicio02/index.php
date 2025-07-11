<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2 - Formulario de Contacto</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(120deg, #6a11cb, #2575fc);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .formulario-container {
            background: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
            width: 90%;
            max-width: 500px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-top: 20px;
            font-weight: bold;
            color: #444;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 1em;
        }

        button {
            margin-top: 25px;
            width: 100%;
            padding: 12px;
            background: #2575fc;
            color: white;
            font-size: 1.1em;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        button:hover {
            background: #6a11cb;
        }

        .mensaje-error {
            color: red;
            font-size: 0.9em;
            margin-top: 5px;
        }

        footer {
            text-align: center;
            margin-top: 40px;
            color: white;
            font-size: 0.9em;
        }
    </style>
</head>
<body>

<div class="formulario-container">
    <h1>Formulario de Contacto</h1>
    <form id="formulario" onsubmit="return validarFormulario();">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
        <div id="error-nombre" class="mensaje-error"></div>

        <label for="correo">Correo electrónico:</label>
        <input type="email" id="correo" name="correo">
        <div id="error-correo" class="mensaje-error"></div>

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="5"></textarea>
        <div id="error-mensaje" class="mensaje-error"></div>

        <button type="submit">Enviar mensaje</button>
    </form>
</div>

<script>
    function validarFormulario() {
        let valido = true;

        const nombre = document.getElementById("nombre").value.trim();
        const correo = document.getElementById("correo").value.trim();
        const mensaje = document.getElementById("mensaje").value.trim();

        document.getElementById("error-nombre").textContent = "";
        document.getElementById("error-correo").textContent = "";
        document.getElementById("error-mensaje").textContent = "";

        if (nombre === "") {
            document.getElementById("error-nombre").textContent = "Por favor, ingresa tu nombre.";
            valido = false;
        }

        if (correo === "" || !correo.includes("@")) {
            document.getElementById("error-correo").textContent = "Por favor, ingresa un correo válido.";
            valido = false;
        }

        if (mensaje === "") {
            document.getElementById("error-mensaje").textContent = "El mensaje no puede estar vacío.";
            valido = false;
        }

        if (valido) {
            alert("Formulario enviado correctamente.");
        }

        return false; // Previene envío real (solo demostración)
    }
</script>

<footer>
    <p>&copy; 2025 - Jefferson Narváez</p>
</footer>

</body>
</html>
