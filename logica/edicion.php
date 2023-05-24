<?php
include ("conexion.php");

//Hace la consulta
$sql="SELECT * FROM persona";

 $consulta=$conexion->query($sql);

 $count=mysqli_num_rows($consulta);
?>

 <link rel="stylesheet" href="../estilo_login.css">
 <body class=fondo>
     
<table border="4px"> 
        <tr class=Tabla>
                <th>Nombre Usuario</th>
                <th>Carrera</th>
                <th>Numero de cuenta</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Fecha de registro</th>
                <th>Permisos</th>
                <th>Edicion</th>
        </tr>
        </body>
        
        <style>
            .Tabla{
    background-color: white;
    border: 2px solid #E1E1E1;
    }
    </style>

    <?php
        if ($count>0){

            while($row=mysqli_fetch_assoc($consulta) ){

            echo "<tr class=Tabla>";

                echo "<td>".$row['nombre_usuario']."</td>";
                echo "<td>".$row['carrera']."</td>";
                echo "<td>".$row['no_cuenta']."</td>";
                echo "<td>".$row['direccion']."</td>";
                echo "<td>".$row['telefono']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['fecha_registro']."</td>";
                echo "<td>".$row['permisos']."</td>";
                  
                       echo "<td> <a href= actualizar.php?no_cuenta=" .$row['no_cuenta']. ">EDITAR</a> </td> ";
            echo "</tr>";
            }
        } else{
        echo "<h1>Sin registro</h1>";
        }

    ?>
    <STYLE>A {text-decoration: none;} </STYLE>
<button><a href="../Principal.php"><h2 >REGRESAR A LISTAS</h2></a></button>
</table>
<br>
