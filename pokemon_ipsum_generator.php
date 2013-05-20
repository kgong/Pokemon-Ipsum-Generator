<?php 
//===================================PARAMETERS=====================================
$type = 'pokemon-and-filler'; //can be 'pokemon', 'filler', or 'pokemon-and-filler'
$number_of_paragraphs = 2;
$start_with_lorum = true;
//================================END OF PARAMETERS=================================

require_once 'generator.php';
$pokemon_ipsum_generator = new PokemonIpsumGenerator();
$pokemon_filler = $pokemon_ipsum_generator->Make_Some_Pokemon_Filler($type, $number_of_paragraphs, $start_with_lorum);

foreach ($pokemon_filler as $curr)
	print $curr;
	print "\n"
?>