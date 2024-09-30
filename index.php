<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
        /* Estilos generales */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            font-size: 3em;
            color: #d32f2f;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Estilos para el div del formulario */
        #div_inicio_sesión {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        /* Estilos para los inputs y botón */
        input[type="name"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 2px solid #d32f2f;
            border-radius: 5px;
            font-size: 1em;
        }

        input[type="password"]::placeholder {
            color: #a0a0a0;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #d32f2f;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.2em;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #b71c1c;
        }

        form {
            display: flex;
            flex-direction: column;
        }
    </style>
    <h1>Zapatería La Sangileña</h1>
    <div id="div_inicio_sesión">
        <form action="modelo/loguear.php" (method = "post")>
            <input type="name" name="usuario" id="" required>
            <br>
            <input type="password" name="clave" id="" placecholder = "contraseña"
            required>
            <br>
            <button type="submit">Ingresar</button> 
        </form>
    </div>
    
</body>
</html>