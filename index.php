<?php

$link = require '_header.php';

$pokemons = getAllPokemons($link);

include 'template/pokemons.php';