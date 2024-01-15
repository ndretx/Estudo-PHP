<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="madlib.php" method="get">
        Color: <input type="text" name="color"> <br>
        Plural Noum: <input type="text" name="pluralNoum"> <br>
        Celebrity: <input type="text" name="celebrity"><br><br>
        <input type="submit" value="submita">

    </form>
    <br><br>

    <?php
    $color = $_GET ["color"];
    $pluralNoum = $_GET ["pluralNoum"];
    $celebrity = $_GET ["celebrity"];
    echo "Rose are $color <br>";
    echo " $pluralNoum are blue <br>";
    echo "I love $celebrity <br>";
    ?>
</body>

</html>