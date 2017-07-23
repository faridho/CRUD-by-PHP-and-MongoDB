<?php 
class Crud{
	var $mongodb;
	var $db;
	var $tname_movie;
	function __construct(){
		require 'vendor/autoload.php';
		try{
			$this->mongodb = new MongoDB\Client('mongodb://localhost:27017');
			$this->db      = $this->mongodb->db_movie;
			$t_movie       = 't_movie';
			$this->table   = $this->db->$t_movie; 
		}catch(Exception $e){
			echo "Failed";
			exit();
		}
	}

	function getMovies() {
        $movies = $this->table->find();
        return $movies;
    }	
}
