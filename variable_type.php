<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php 
    $name = "sebastien"; 
    $age = 27; 
    $colorEyes = "black"
    ?>

    <?php $nameFamilly = array("Sebastien", "Aidin", "Alice");?>

    <p>Hi! My name is <?php echo "$name"?></p>
    <p>I am <?php echo "$age" ?> </p>
    <p>My eyes are <?php echo $colorEyes ?> </p>
    <p>La première personne de la famille est <?php echo "$nameFamilly[1]"?></p>

    <?php 
        $isTrue = "is true";
        $isFalse = "is false";
        $hungry = false; 
        if($hungry == true){
            echo $isTrue;
        }else{
            echo $isFalse;
        }
    ?>

</body>

</html>