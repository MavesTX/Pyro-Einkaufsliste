<?php

   function ausgabewert_all()
   {
   	
   	global $con;
   	$stmt = $con->prepare("SELECT SUM(anzahl * preis) FROM einkaufsliste");
   	;
   	$stmt->execute();
   	$result = $stmt->fetch();
   	echo number_format($result[0], 2, '.', ',');
   	
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
   
   		function ausgabewert_mueller()
   {
   	
   	global $con;
   	$stmt = $con->prepare("SELECT SUM(anzahl * preis) FROM einkaufsliste WHERE markt = 'MUELLER'");
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
   
   		function ausgabewert_penny()
   {
   	
   	global $con;
   	$stmt = $con->prepare("SELECT SUM(anzahl * preis) FROM einkaufsliste WHERE markt = 'PENNY'");
   	;
   	$stmt->execute();
   	$result = $stmt->fetch();
   	echo number_format($result[0], 2, '.', ',');
   	
   }
   
   function ausgabewert_aldi()
   {
   	
   	global $con;
   	$stmt = $con->prepare("SELECT SUM(anzahl * preis) FROM einkaufsliste WHERE markt = 'ALDI'");
   	;
   	$stmt->execute();
   	$result = $stmt->fetch();
   	echo number_format($result[0], 2, '.', ',');
   	
   }
   
   function ausgabewert_roter_netto()
   {
   	
   	global $con;
   	$stmt = $con->prepare("SELECT SUM(anzahl * preis) FROM einkaufsliste WHERE markt = 'ROTER_NETTO'");
   	;
   	$stmt->execute();
   	$result = $stmt->fetch();
   	echo number_format($result[0], 2, '.', ',');
   	
   }
   
   function ausgabewert_thomas_philipps()
   {
   	
   	global $con;
   	$stmt = $con->prepare("SELECT SUM(anzahl * preis) FROM einkaufsliste WHERE markt = 'THOMAS_PHILIPPS'");
   	;
   	$stmt->execute();
   	$result = $stmt->fetch();
   	echo number_format($result[0], 2, '.', ',');
   	
   }


?>