<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>

    <form action="checkbox.php" method="post">
        Uvas :<input type="checkbox" name="fruits[]" value="Uvas"> <br>
        Laranja :<input type="checkbox" name="fruits[]" value="Laranja"> <br>
        Banana :<input type="checkbox" name="fruits[]" value="Banana"> <br>
    
        <input type="submit">

    </form>

    <?php
        $fruit = $_POST ["fruits"];
        echo $fruit[0]

    ?>
    
</body>
</html>