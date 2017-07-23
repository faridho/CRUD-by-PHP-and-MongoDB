<?php 
include 'Crud.php';
$con = new Crud();

$moviesList = $con->getMovies();

foreach($moviesList as $dt){
	echo "$dt[title]";
	echo "<br>";
	echo "$dt[rate]";
}