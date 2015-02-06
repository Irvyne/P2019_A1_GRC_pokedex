<?php

$link = require '_header.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header('Location: index.php');
    die('Restricted Area');
}

$pokemon = getPokemon($link, $id);

if (null === $pokemon) {
    header('Location: index.php');
    die('Pokemon Not Found');
}

include 'template/pokemon.php';