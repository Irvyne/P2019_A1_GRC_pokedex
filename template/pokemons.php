<?php

include 'template/_header.php';

foreach ($pokemons as $pokemon) {
    echo '<article>';
        echo '<h1>'.$pokemon['name'].'</h1>';
        echo '<small>'.$pokemon['type'].'</small>';
        echo '<p>';
            echo '<a class="btn btn-info" href="pokemon.php?id='.$pokemon['id'].'">Show</a>';
            echo '<a class="btn btn-danger" href="delete.php?id='.$pokemon['id'].'">Remove</a>';
        echo '</p>';
    echo '</article>';
}

include 'template/_footer.php';