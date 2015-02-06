<?php

// CRUD => Create Read Update Delete

// SELECT
function getAllPokemons($link) {
    $sql = "SELECT * FROM pokemon";
    $query = mysqli_query($link, $sql);

    return mysqli_fetch_all($query, MYSQLI_ASSOC);
}

// SELECT
function getPokemon($link, $id) {
    $sql = "SELECT * FROM pokemon WHERE id = $id";
    $query = mysqli_query($link, $sql);

    return mysqli_fetch_assoc($query);
}

// INSERT INTO
function createPokemon($link, array $pokemon) {
    $columns = '';
    $values  = '';

    foreach ($pokemon as $column => $value) {
        $columns .= $column.',';
        $values  .= '"'.$value.'",';
    }

    $columns = substr($columns, 0, -1);
    $values  = substr($values, 0, -1);

    $sql = 'INSERT INTO pokemon ('.$columns.') VALUES ('.$values.')';

    return mysqli_query($link, $sql);
}

// UPDATE
function updatePokemon($link, $id) {
    //TODO mettre a jour le pokemon
}

// DELETE
function deletePokemon($link, $id) {
    $sql = "DELETE FROM pokemon WHERE id = $id";

    return mysqli_query($link, $sql);
}