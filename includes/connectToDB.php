<?php

function db_connect()
{
    $host = "localhost";
    $user = "xras38.skp-dp";
    $password = "zyzy4k32";
    $database = "xras38_skp_dp_sde_dk";

    $mysqli = new mysqli($host, $user, $password, $database);
    $mysqli->set_charset(utf8);
    return $mysqli;
}

