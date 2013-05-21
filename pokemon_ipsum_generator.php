<?php 
//===================================PARAMETERS=====================================
//$type = 'pokemon-and-filler'; //can be 'pokemon', 'filler', or 'mix'
//$number_of_paragraphs = 2;
//$start_with_lorum = true;
//================================END OF PARAMETERS=================================

$type = $_POST["type"];
echo $type;
$number_of_paragraphs = $_POST["number"];
if ($_POST["start"] == 'yes') {
	$start_with_lorum = true;
} elseif ($_POST["start"] == 'no') {
	$start_with_lorum = false;
}

require_once 'generator.php';
$pokemon_ipsum_generator = new PokemonIpsumGenerator();
$pokemon_filler = $pokemon_ipsum_generator->Make_Some_Pokemon_Filler($type, $number_of_paragraphs, $start_with_lorum);

foreach ($pokemon_filler as $curr) {
	echo $curr; ?> <br>
<?php } ?>
