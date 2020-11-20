<!--BEGIN THE EXAMPLE-->
<?php 

$countries = array('Belgium', 'France' , 'Germany', 'Netherlands', 'Ukraine');
echo "$countries[2] </br>"; 

$familly = array('Sebastien', 'Aidin' , 'Alice', 'Morgane', 'Laurine');
print_r($familly);

echo  '</br>';
$recipes = array('Khoubideh', 'Nouille' , 'Sushi', 'Pizza', 'Patte');
print_r($recipes);

$favoriteMovie = array('Fast And furious', 'Saw' , 'Conjuring', 'Spiderman');
print_r($favoriteMovie[2]);

echo '<pre>';
print_r($countries);
echo '</pre>';

var_dump($countries);

array_push($countries, 'England');
print_r($countries);

$person['function'] = 'Junior Web Developer';
echo $person['function'];

?>
<!--END THE EXAMPLE-->

<!--EXO1-->
<?php 
//tableau me
$me = array(
    'firstname' => 'sebastien', 
    "lastname" => "firouzfar",
    "favoriteMovie" => array("spiderman", "conjuring", "matrix"),
    "hobbies" => array("Play football", "travel"), 

     //tableau mother
    $mother = array(
        'firstname' => 'Alicia', 
        "lastname" => "Van dame",
        "hobbies" => array("make up", "shopping", "voyager")  
    )
);


echo '<pre>';
print_r($me);
echo '</pre>';
echo '</br>'; 

//add the new hobies
array_push($me['hobbies'], ' taxidermie '); 

//replace the last name in the array
$changelastname = array_replace($mother, ['lastname' => 'Durant']); 
echo '<pre>';
print_r($changelastname); 
echo '<pre>'; 


//count to mother
//var_dump($mother['hobbies']) ;
echo "Loisir mother "; 
$x = count($mother['hobbies']); 
echo $x; 
echo "</br>"; 
//var_dump($me['hobbies']) ;
echo "Loisir me "; 
$y = count($me['hobbies']); 
echo $y; 
$total = $x + $y; 
echo "</br>"; 
echo "Total de tout leur loisir $total "; 


//Create a new array from 2 others (or more)


?>