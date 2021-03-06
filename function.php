<?php 
function say_hello($firstname){
	echo "<p>Hello $firstname!</p>";
	echo '<hr>';
}
say_hello("sebastien");

//letters
$letter = "sébastien";
function capitalLetters($letter){
    return ucwords($letter); 
}



//years
$annee = 2020;
function years($annee){
    return $annee - 1993;  
}

//time
date_default_timezone_set('Europe/Brussels');
$heure = date("G") ; // How to get the current time in PHP ? Google is your friend ;-)
$minutes = date("i");
$secondes = date("s");
function timeBelgium($heure, $minutes, $secondes){
    return $heure. " : " .$minutes. " : " .$secondes; 
}

//sum
$number1 = 0;
$number2 = 0;
function sum($number1, $number2){
    //check if the number's à numbers.
    if(is_numeric($number1) && is_numeric($number2)){
        echo 'C est bien des numéros ' ;
        return $number1 + $number2;
    }else{
        echo 'Error: argument is not a number.';
    }
}

//abbreviate test
$test = "Institut Paul Lambin"; 
function abbreviate($test){
    $abbreviation = "";
    $words = explode(" ", "$test"); 
      foreach($words as $word){
          $abbreviation .= $word[0]; 
      }
   return $abbreviation; 
}



//replace letters
function remplaceLetters(){
$tableauReplace = array("caecotrophie", "chaenichthys","microsphaera", "sphaerotheca");
$remplace = "";
print_r($tableauReplace); 
    $remplace = str_replace("ae", "æ" ,$tableauReplace);  
    return $remplace;  
}

//remplace inverse
function remplaceInverse(){
$tab = array("cæcotrophie", "chænichthys", "microsphæra", "sphærotheca"); 
$remplaceInverse = ""; 
    print_r($tab); 
    $remplaceInverse = str_replace("æ", "ae", $tab); 
    return $remplaceInverse; 
}

//message error
function feedback($message, $cssClass){
    echo "<div class=$cssClass>$cssClass :   $message </div>"; 
}


//word generate
function generateRandomString($length) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    /* Uncomment below to include symbols /
    / $includechars .= "[{(!@#$%^/&*+;?:)}]"; */
    $charLength = strlen($chars); //compter la longueur de chars
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $chars [rand(0, $charLength - 1)]; // - 1 pour aller à la lettre Z
    }
    return $randomString;
}

$lenght = 12; # Set result string lenght / Définir la longueur de la chaîne de résultats qui sera afficher
$result = generateRandomString($lenght);
echo $result; 

?>

<p> <?php echo capitalLetters($letter) ?> </p>
<p> <?php echo years($annee) ?> </p>
<p> <?php echo timeBelgium($heure, $minutes, $secondes); ?> </p>
<p> <?php echo sum(10, 15) ?> </p>
<p> <?php echo abbreviate($test) ?> </p>
<p> <?php print_r(remplaceLetters()) ?> </p>
</br>
<p> <?php print_r(remplaceInverse()) ?> </p>
</br>
<p> <?php echo feedback("esays", "pas valide") ?> </p>




