<?php

require 'function/database.fn.php';
require 'function/pokemon.fn.php';

$parameters = require 'config/parameters.php';

$link = database_connect($parameters);

$pokemons = getAllPokemons($link);
$pokemon  = getPokemon($link, 1);

$pokemonData = [
    'name'    => 'Magikarp2',
    'type'    => 'Water',
    'attack'  => 99,
    'defense' => 10,
    'level'   => 50,
];

if (false === createPokemon($link, $pokemonData)) {
    var_dump(mysqli_error($link));
    // Seulement sur un vrai serveur
    /*mail(
        'thibaud.bardin@gmail.com',
        'Erreur BDD',
        mysqli_error($link)
    );*/
}
