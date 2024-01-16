<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <form action="associativeArray.php" method="post">
        <input type="text" name="student">    

        <input type="submit">

    </form>
    <?php
        $grades = array ("Jim" => "A+", "John" => 1, "Oscar" => 6 ) ;
        echo $grades[$_POST["student"]];
       
        /* $grades['John'] = 14;
        echo $grades ["John"]*/

    ?>
</body>
</html>