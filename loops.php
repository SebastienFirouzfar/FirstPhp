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
$amount_of_lines = 1;

while ($amount_of_lines <= 100){
    echo $amount_of_lines . '. : I shall not watch flies fly when I am learning PHP.<br />';
    // shorthand writing for 
    // $amount_of_lines = $amount_of_lines +1;
    $amount_of_lines ++; 

}

?>