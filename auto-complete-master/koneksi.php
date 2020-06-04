<?php

$DB_HOST="localhost";
$DB_USERNAME="root";
$DB_PASSWORD="";
$DB_DATABESE="db_starbhak";
$DB_PORT="3306";

$dbl = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_DATABESE, $DB_PORT);

if($dbl->connect_error){
    die('koneksi gagal :' .$dbl->connect_error);
}