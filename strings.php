<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $frase = "seu corno";
        $frase [8] = "a";
        echo $frase ; 
        echo "<br>";
        echo strtoupper ($frase);
        echo "<br>";
        echo strlen ($frase);
        echo "<br>";
        echo $frase [0];
        echo "<br>";
        echo $frase [8];
        echo "<br>";
        echo str_replace ("seu","sua", $frase);
        echo "<br>";
        echo substr ($frase, 4);
        echo "<br>";
        echo substr ($frase, 1, 5);
        

    ?>
    
</body>
</html>