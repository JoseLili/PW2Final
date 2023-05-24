<?php

include ("conexion.php");

$no_cuenta = $_GET["no_cuenta"];
$sql = "SELECT * FROM persona";

?>
<STYLE>A {text-decoration: none;} </STYLE>
<form action='update.php' method = 'POST'>
    <button><a href="../Principal.php"><h2 >REGRESAR A LISTAS</h2></a></button>
    <link rel="stylesheet" href="../estilo_login.css">
    <body class=fondo>
<table border="2px"> 
        <tr class=Tabla>
                <th>Nombre Usuario</th>
                <th>Carrera</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Fecha de registro</th>
                <th>Confirmar datos</th>
            
        </tr>
        </body>
        <style>
            .Tabla{
    background-color: white;
    border: 2px solid #E1E1E1;
    }
    </style>
        
    <?php
        $consulta = mysqli_query($conexion,$sql);
        $count=mysqli_num_rows($consulta);

        if ($count>0){

            
            while($row=mysqli_fetch_assoc($consulta) ){

            echo "<tr>";
                
            echo "<td><input type='text' name = 'nombre_usuario' value=".$row['nombre_usuario']."</td>";
            echo "<td><input type='text' name = 'carrera' value=".$row['carrera']."</td>";
            echo "<input type='hidden' name = 'no_cuenta' value=".$row['no_cuenta'].">";
            echo "<td><input type='text' name = 'direccion' value=".$row['direccion']."</td>";
            echo "<td><input type='text' name = 'telefono' value=".$row['telefono']."</td>";
            echo "<td><input type='text' name = 'email' value=".$row['email']."</td>";
            echo "<td><input type='text' name = 'fecha_registro' value=".$row['fecha_registro']."</td>";
            echo "<input type='hidden' name = 'permisos' value=".$row['permisos'].">";
            echo "<td><input type='submit' value = 'ACEPTAR'></td>";
             
            echo "</tr>";
    
            }
        } else{
        echo "<h1>Sin registro</h1>";
        }

    ?>
</table>

</form>
<br>
<button><a href="../Principal.php"><h2 >REGRESAR A LISTAS</h2></a></button>