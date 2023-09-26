<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index php</title>
</head>
<body>
    
    <?php

        define("IVA", 1.21);
        echo "<h1>Llista de cursos</h1>";
        echo "<h2>Numero de cursos apuntats:3</h2>";
        for($m=1; $m<4; $m++){
            
            $array_g = array(
                array("ID", "NOM", "DESC", "PREU"),
                array("1", "PHP", "Introducció a PHP", "15.5"),
                array("2", "Laravel", "Laravel per experts", "30"),
                array("3", "Django", "Dominant Django", "10")
            );
            echo"<div style='border: 1px solid black'>";
            echo "<b>" . $array_g[$m][1] . "</b><br>";
            echo $array_g[$m][2];
            echo "<br>";
            echo "El preu del libre amb IVA: " . $array_g[$m][3] * IVA; 
            echo "<br>";
            echo"</div>";
        }
    ?>






    
</body>
</html>
