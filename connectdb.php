<?php 
try{

  $conn = new PDO("mysql:host=localhost;dbname=fashion", "root", "");

	}catch(PDOException $e){

		echo "database error";

	}  
