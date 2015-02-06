<?php

require 'function/database.fn.php';
require 'function/pokemon.fn.php';

$parameters = require 'config/parameters.php';

return database_connect($parameters);