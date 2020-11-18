<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
   $possible_states = [" danger pour la santé", "sale", "propre", "immaculée"];

   // When testing, change the index value to navigate to the possible array values
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
    
</body>
</html>