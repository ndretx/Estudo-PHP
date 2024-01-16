<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    
    <?php
        $isMale = false;
        $isTall = true;
        // || or operator , && and operator , ! negation operator
       
        if ($isMale && $isTall){
            echo "You're a tall male ";
        }elseif($isMale && !$isTall){
            echo "You're a short male";
        }elseif(!$isMale && $isTall){
            echo "You're not male but are tall";

        }else{
            echo "You're not male and not tall";
        }


    ?>


</body>
</html>