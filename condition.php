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

<!--Exercice age people-->
<form method="get" action="">
	<label for="">...</label>
	<input type="" name="age">
	<input type="submit" name="submit" value="Greet me now">
</form>

<?php
if (isset($_GET['age'])){
    // Form processing
    if($_GET['age'] == 12){
        echo "Hello kiddo"; 
    }elseif ($_GET['age'] >=12 && $_GET['age'] < 18) {
        echo "Hello teenager"; 
    }elseif ($_GET['age'] > 18 && $_GET['age'] < 115) {
        echo "Hello adult"; 
    }else{
        echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
    }
}
?>

<!--Exo 4-->
<form method="get" action="">
	<label for="language">Do you speak english ?</label>
	<input type="" name="agePeople">
    
    <label for="yes">yes</label>
    <input type="radio" name="language" value = "yes" >
    
    <label for="no">no</label>
    <input type="radio"  name="language" value = "no" >
	<input type="submit" name="submit" value="Greet me now">
</form>
<?php

if (isset($_GET['language'])){
    // Form processing
    if($_GET['language'] < 12 && $_GET['language'] == "yes"){
        echo "Hello boy! "; 
    }else {
        echo "Aloha boy"; 
    }
}
?>


<!--Exo 5-->
<form method="get" action="">
	<label for="soccers">Give me your information </label>
    
    <label for="yes">Name </label>
    <input type="text" name="soccers" >

    <label for="">Age</label>
    <input type="text" name="ageplayer"  >
    
    <label for="">Gender</label>
     <input type="radio"  name="gender" value = "femelle" > femalle
     <input type="radio"  name="gender" value = "man" > man
	<input type="submit" name="submit" value="Greet me now">
</form>

<?php 
    if(isset($_GET['soccers']) && isset($_GET['ageplayer'])){
        /*
        exo 5
        if($_GET['age'] > 21 && $_GET['age'] < 40 && $_GET['gender'] == "femelle" ){
            echo "welcome to the team !"; 
        }else{
            echo "Sorry you don't fit the criteria";
        }
             */

    //exercice 6 
    $accepPlayer = ($_GET['ageplayer'] > 21 && $_GET['ageplayer'] < 40 && $_GET['gender'] == "femelle" ?  "welcome to the team" :  "Sorry you don't fit the criteria"); 
        echo "$accepPlayer"; 
}
?>


<!--Exercice 7-->
<form method="get" action="">
    <label for="coteEleve">Donnez moi la cote de l'eleve </label>
    <input type="text" name="coteEleve" >
    <input type="submit" name="submit" value="Cliquer ici">
</form>

<?php 
    // tester exo
    if(isset($_GET['coteEleve'])){
        if($_GET['coteEleve'] <= 4){
            echo "This work is really bad. What a dumb kid! "; 
        }elseif ($_GET['coteEleve'] >= 5 && $_GET['coteEleve'] <= 9) {
            echo "This is not sufficient. More studying is required."; 
        }elseif ($_GET['coteEleve'] == 10) {
            echo "barely enough!"; 
        }elseif ($_GET['coteEleve'] > 10 && $_GET['coteEleve'] <= 14) {
            echo  "Not bad!"; 
        }elseif ($_GET['coteEleve'] > 14 && $_GET['coteEleve'] <= 18){
            echo  "Bravo, bravissimo!"; 
        }elseif ($_GET['coteEleve'] > 18 && $_GET['coteEleve'] <= 20) {
            echo  "Too good to be true : confront the cheater!";
        }else {
            echo  "Votre cote doivent être coté entre 0 et 20"; 
        }
    }
?>



</body>
</html>