<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login con session</title>
</head>

<body>
    
<center> <h1>Login error</h1></center> 
<div  >
    <center> 
        <form method="POST" action="logica/loguear.php">

            <input type="text" name="no_cuenta" placeholder="Numero de Cuenta" />
            <br />
            <input type="text" name="clave" placeholder="Contraseña" />
            <br />

            <button type="submit">Inicar Sesion</button>

        </form>
    </center> 
</div>
</body>

</html>