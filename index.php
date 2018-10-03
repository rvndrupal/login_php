<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

    <div class="error">
        <span>Datos de Ingreso no validos, intentalo de nuevo por favor</span>
    </div>

    <div class="main">
        <form action=""  id="formlg">
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <input type="submit" class="botonlg" value="Iniciar Sesión">    
        </form>    
    </div>


    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    
</body>
</html>