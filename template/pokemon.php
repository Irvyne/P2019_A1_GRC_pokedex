<?php

include 'template/_header.php';

// TODO afficher les infos du pokemon

echo '<h1>'.$pokemon['name'].'</h1>';

echo '<p>Type: '.$pokemon['type'].'</p>';
echo '<p>HP: '.$pokemon['hp'].'</p>';
echo '<p>Level: '.$pokemon['level'].'</p>';

include 'template/_footer.php';