<?php
/* Database connexion */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'db_user');
define('DB_PASSWORD', '12345');
define('DB_NAME', 'blog');

/* Connexion à la base de données */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

/* verifier connection */
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>