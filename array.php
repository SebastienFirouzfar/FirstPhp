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

<!--Exo1-->
<?php 

$me = array(
    'firstname' => 'sebastien', 
    "lastname" => "firouzfar",
    "favoriteMovie" => array("spiderman", "conjuring", "matrix"),
    "hobbies" => array("Play football", "travel")
);


echo '<pre>';
print_r($me);
echo '</pre>';

$mother = array(
    'firstname' => 'Jacline', 
    "lastname" => "moms", 
); 

$me['hobbies'] = $mother; 
 

echo '<pre>';
print_r($me);
echo '</pre>';


?>