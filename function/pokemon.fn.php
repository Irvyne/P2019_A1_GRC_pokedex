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
function createPokemon($link) {

}

// UPDATE
function updatePokemon($link, $id) {

}

// DELETE
function deletePokemon($link, $id) {

}