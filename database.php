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

		
		
		function ausgabewert_lidl()
		{
			
			global $con;
			$stmt = $con->prepare("SELECT SUM(anzahl * preis) FROM einkaufsliste WHERE markt = 'LIDL'");
			;
			$stmt->execute();
			$result = $stmt->fetch();
			echo number_format($result[0], 2, '.', ',');
			
		}

		function ausgabewert_kaufland()
		{
			
			global $con;
			$stmt = $con->prepare("SELECT SUM(anzahl * preis) FROM einkaufsliste WHERE markt = 'KAUFLAND'");
			;
			$stmt->execute();
			$result = $stmt->fetch();
			echo number_format($result[0], 2, '.', ',');
			
		}

		function ausgabewert_norma()
		{
			
			global $con;
			$stmt = $con->prepare("SELECT SUM(anzahl * preis) FROM einkaufsliste WHERE markt = 'NORMA'");
			;
			$stmt->execute();
			$result = $stmt->fetch();
			echo number_format($result[0], 2, '.', ',');
			
		}

		
?>