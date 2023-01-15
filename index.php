<?php
require_once "./classes/Movie.php";

$myMovie = new Movie( "azione", "2002");
$yourMovie = new Movie( "drammatico", "2020");

var_dump($myMovie);
var_dump($yourMovie);

?>