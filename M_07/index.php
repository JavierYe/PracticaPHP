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

        $name="Kurt";
        $cognoms ="Cagle";
        $edat=40;
        $dataN=date_create("1983/05/12");
        $tel= array(65434566,933332211);
        $adres="Carrer de turin, 15";
        $correo="kurt.cagle@example.com";
        $treball=TRUE;
        $altura=1.67;
        $data = date_format($dataN,"Y-m-d");
        if ($treball == TRUE){
            $treball = "Si";
        };
        if ($treball == FALSE){
            $treball = "No";
        };


        echo "<h1>Descrivint a $name $cognoms</h1>";
        echo "<h2>Les dades de $name son:</h2>";
        echo "
        <ul>
            <li>Es diu: $name </li>
            <li>Te $edat anys </li>
            <li>Va neixer l'any: <b>$data</b> </li>
            <li>El seus telèfons són: $tel[0]-$tel[1] </li>
            <li>Viu a: $adres </li>
            <li>El seu email és: $correo </li>
            <li>Treballa: $treball </li>
            <li>I medeix: $altura </li>
        </ul>";
    ?>
    
</body>
</html>
