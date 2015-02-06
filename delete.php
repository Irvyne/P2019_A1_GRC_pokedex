<?php

$link = require '_header.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header('Location: index.php');
    die('Restricted Area');
}

if (true === deletePokemon($link, $id)) {
    echo 'Pokemon successfully removed!';
} else {
    echo 'An error occurred when trying to remove pokemon!';
}