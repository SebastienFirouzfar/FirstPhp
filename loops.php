<!--BEGIN EXAMPLE-->
<?php
$plates= array(1, 2, 3, 4, 5, 57 );
foreach( $plates as $plate){
	echo $plate; 
}



$names= array('John', 'jeanne', 'Joan', 'émile');
var_dump($names);

foreach ($names as $key=> $value){
    $names[$key] = $value;
    
}
var_dump($names);
echo'<pre>';
print_r($names); 
echo'<pre>';

/****EXERCICE***/
$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
var_dump($pronouns);
foreach($pronouns as $keys => $value){
    if($pronouns[$keys] == 'He/She'){
        echo $value. " codes<br>";
    } else {
        echo $value." code<br>";
    }
};

echo '<pre>';
print_r($pronouns) ;
echo '<pre>';



/***EXECICE SIMPSON****/
$tableau = []; 
$amount_of_lines = 1;

while ($amount_of_lines <= 10){
    echo $amount_of_lines . '. : I shall not watch flies fly when I am learning PHP.<br />';
    // shorthand writing for 
    // $amount_of_lines = $amount_of_lines +1;
    $amount_of_lines ++; 
}

echo "<br>";

//for
for ($i=1; $i <= 120 ; $i++) {  # code...
    echo $i. " "; 
}

echo "<br>";

//while
$indice = 1;
while($indice <= 120){
    echo $indice. " "; 
    $indice++; 
}

echo "<br>";

//table name our start-up
$nameBeCode = array("Sebastien", "Djamal", "Gema", "Celine", "Azad", "Ahmad", "Louis");
foreach($nameBeCode as $keyBecode => $developpeurBeCode){
    echo $developpeurBeCode. "<br> "; 
}

echo "<br>";

//create section countrie
$pays = array(
    "Be" => "Belgique", 
    "Fr" => "France", 
    "Al" => "Allemagne", 
    "Es" => "Espagne", 
    "Po" => "Portugal", 
    "Ir" => "Iran", 
    "Ja" => "Japon",
    "It" => "Italie", 
    "Pol" => "Pologne", 
    "Su" => "Suède", 
    "Fi" => "Finlande"
); 


?>

<form method="GET" action="">
  <select name="">
    <option value="" selected>Select a country</option>
    <option> <?php foreach ($pays as $keyCountry => $valuePays) {
        echo "<option>  $valuePays </option> "; 
    }?> </option>
  </select>
</form>