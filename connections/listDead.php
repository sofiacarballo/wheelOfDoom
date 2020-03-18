<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connections</title>
</head>
<body>
<center>
        <table bgcolor="grey" border="3">
            <thead>
                <tr>
                    <th colspan="1">Deads</th>
                </tr>
            </thead>
            <tbody>
            <?php

                include("connections.php");

                $query="SELECT * FROM lista_coders WHERE status='Dead'";
                $resultado= $conexion->query($query);
                while($row=$resultado->fetch_assoc()){
            ?> 
                <tr>
                        <td> <?php echo $row['name']; }?> </td>
                </tr>

            </tbody>
        </table>
    </center>  
</body>
</html>