<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

$room_is_filthy = true;
if($room_is_filthy == true){
    echo "Yuk, Room is dirty : let's clean it up !";
    
    echo "<br>Room is now clean!";
    $room_is_filthy = false;
} else {
echo "<br>Nothing to do, room is neat.";
}


?>

<?php 
   $possible_states = [" danger pour la santé", "sale", "propre", "immaculée"];

   // When testing, change the index value to navigate to the possible array values
   //test
   $room_filthiness = $possible_states[0];
   
       if($room_filthiness == $possible_states[0] || $room_filthiness == $possible_states[1]){
           echo "<br> Yuk, Room is Disgusting! Let's clean it up  !";
       } else if($room_filthiness == $possible_states[2]){
           echo "<br> Yuk, Room is dirty : let's clean it up !";
       // ...
       } else {
       echo "<br>Nothing to do, room is neat.";
       }
?>

<?php 
//affiche l'horaire local 
date_default_timezone_set('Europe/Paris');
$heure = date("G") ; // How to get the current time in PHP ? Google is your friend ;-)
$minutes = date("i");
echo "$heure". " : " ."$minutes";

// 05h00 and 09h00
if($heure == 5 && $heure == 9){
    echo " Good morning";

    // 09h01 and 12h00
} elseif ($heure == 9 || $minutes > 1  && $heure < 12) {
    echo " Good day"; 

//12h01 and 16h00
}elseif ($heure == 12 || $minutes > 1  && $heure < 16) {
    echo " Good afternoon !"; 
}

//16h01 and 21h00 
elseif ($heure == 16 || $minutes > 1  && $heure < 21) {
    echo " Good evening  !"; 
}


//21h01 and 4h59 
elseif ($heure == 21 || $minutes > 1  && $heure == 4 || $minutes == 59) {
    echo " Good night !"; 
}
// Test the value of $now and display the right message according to the specifications.


?>


</body>
</html>