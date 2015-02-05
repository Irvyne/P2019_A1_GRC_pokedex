<?php

function database_connect(array $parameters) {
    return mysqli_connect(
        $parameters['hostname'],
        $parameters['username'],
        $parameters['password'],
        $parameters['dbname'],
        $parameters['port']
    );
}
