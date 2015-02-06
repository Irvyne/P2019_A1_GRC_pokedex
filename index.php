<?php

require 'function/database.fn.php';
require 'function/pokemon.fn.php';

$parameters = require 'config/parameters.php';

$link = database_connect($parameters);

$pokemons = getAllPokemons($link);
$pokemon  = getPokemon($link, 1);

var_dump($pokemon);