<?php
   $host     = "";
   $user     = "";
   $pass     = "";
   $database = "";
   
   try {
   	$con = new PDO("mysql:host=$host;dbname=$database", $user, $pass);
   	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   	$con->exec('SET CHARACTER SET utf8');
   	//echo "Database connected successfully";
   }
   catch (PDOException $error) {
   	die("Database connection failed:" . $error->getMessage());
   }
 
   
   ?>