<?php include_once("database.php"); ?><?php include_once("config.php"); ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Silvester - Einkaufsliste</title>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1" name="viewport">
      <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet">
      <link href="/css/style.css" rel="stylesheet">
      <link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
      <script>
         var countDownDate = new Date("<?= $month; ?> <?= $day; ?>, <?= $year; ?> <?= $hour; ?>:<?= $minutes; ?>:<?= $secounds; ?>").getTime();
         
         var x = setInterval(function() {
         
             var now = new Date().getTime();
             
             var distance = countDownDate - now;
             
             var days = Math.floor(distance / (1000 * 60 * 60 * 24));
             var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
             var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
             var seconds = Math.floor((distance % (1000 * 60)) / 1000);
             
             document.getElementById("timer").innerHTML = days + " Tage | " + hours + " Std. | "
             + minutes + " Min. | " + seconds + " Sek.";
              
             if (distance < 0) {
                 clearInterval(x);
                 document.getElementById("timer").innerHTML = "<?= $end_message ?>";
             }
         }, 1000);
      </script>
   </head>
   <body>
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
         <ul class="navbar-nav">
            <li class="nav-item"></li>
            <li class="nav-link" id="timer">Timer loaded..</li>
         </ul>
      </nav>
      <center>
         <a class="btn btn-primary" href="/add/" id="add_button" type="button">Artikel hinzufügen</a>
      </center>
      <div class="container">
         <div id="accordion">
            <div class="card">
               <div class="card-header">
                  <a class="card-link" data-parent="#accordion" data-toggle="collapse" href="#collapseOne">#1 LIDL</a>
               </div>
               <div class="collapse show" id="collapseOne">
                  <div class="card-body">
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                              <th>Name</th>
                              <th>Anzahl</th>
                              <th>Preis</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                              $stmt = $con->prepare("SELECT * FROM einkaufsliste where markt = 'LIDL'");
                              $stmt->execute();
                              while($row = $stmt->fetch()) {
                              $name = $row['name'];
                              $anzahl = $row['anzahl'];
                              $preis = $row['preis'];
                              echo "<tr>";
                              echo "<td>$name</td>";
                              echo "<td>$anzahl x</td>";
                              echo "<td>$preis €</td>";
                              echo "</tr>";
                              }
                               ?>
                        </tbody>
                     </table>
                     <button class="btn btn-success" style='margin-left: 80%' type="button">Insgesamt: <?= ausgabewert_lidl(0); ?>
                     €</button>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header">
                  <a class="collapsed card-link" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">#2 KAUFLAND</a>
               </div>
               <div class="collapse" id="collapseTwo">
                  <div class="card-body">
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                              <th>Name</th>
                              <th>Anzahl</th>
                              <th>Preis</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                              $stmt = $con->prepare("SELECT * FROM einkaufsliste where markt = 'KAUFLAND'");
                              $stmt->execute();
                              while($row = $stmt->fetch()) {
                              $name = $row['name'];
                              $anzahl = $row['anzahl'];
                              $preis = $row['preis'];
                              echo "<tr>";
                              echo "<td>$name</td>";
                              echo "<td>$anzahl x</td>";
                              echo "<td>$preis €</td>";
                              echo "</tr>";
                              }
                               ?>
                        </tbody>
                     </table>
                     <button class="btn btn-success" style='margin-left: 80%' type="button">Insgesamt: <?= ausgabewert_kaufland(0); ?>
                     €</button>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header">
                  <a class="collapsed card-link" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">#3 NORMA</a>
               </div>
               <div class="collapse" id="collapseThree">
                  <div class="card-body">
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                              <th>Name</th>
                              <th>Anzahl</th>
                              <th>Preis</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                              $stmt = $con->prepare("SELECT * FROM einkaufsliste where markt = 'NORMA'");
                              $stmt->execute();
                              while($row = $stmt->fetch()) {
                              $name = $row['name'];
                              $anzahl = $row['anzahl'];
                              $preis = $row['preis'];
                              echo "<tr>";
                              echo "<td>$name</td>";
                              echo "<td>$anzahl x</td>";
                              echo "<td>$preis €</td>";
                              echo "</tr>";
                              }
                               ?>
                        </tbody>
                     </table>
                     <button class="btn btn-success" style='margin-left: 80%' type="button">Insgesamt: <?= ausgabewert_norma(0); ?>
                     €</button>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header">
                  <a class="collapsed card-link" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">#3 NORMA</a>
               </div>
               <div class="collapse" id="collapseThree">
                  <div class="card-body">
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                              <th>Name</th>
                              <th>Anzahl</th>
                              <th>Preis</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                              $stmt = $con->prepare("SELECT * FROM einkaufsliste where markt = 'NORMA'");
                              $stmt->execute();
                              while($row = $stmt->fetch()) {
                              $name = $row['name'];
                              $anzahl = $row['anzahl'];
                              $preis = $row['preis'];
                              echo "<tr>";
                              echo "<td>$name</td>";
                              echo "<td>$anzahl x</td>";
                              echo "<td>$preis €</td>";
                              echo "</tr>";
                              }
                               ?>
                        </tbody>
                     </table>
                     <button class="btn btn-success" style='margin-left: 80%' type="button">Insgesamt: <?= ausgabewert_norma(0); ?>
                     €</button>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header">
                  <a class="collapsed card-link" data-parent="#accordion" data-toggle="collapse" href="#collapseFour">#4 ALDI</a>
               </div>
               <div class="collapse" id="collapseFour">
                  <div class="card-body">
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                              <th>Name</th>
                              <th>Anzahl</th>
                              <th>Preis</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                              $stmt = $con->prepare("SELECT * FROM einkaufsliste where markt = 'ALDI'");
                              $stmt->execute();
                              while($row = $stmt->fetch()) {
                              $name = $row['name'];
                              $anzahl = $row['anzahl'];
                              $preis = $row['preis'];
                              echo "<tr>";
                              echo "<td>$name</td>";
                              echo "<td>$anzahl x</td>";
                              echo "<td>$preis €</td>";
                              echo "</tr>";
                              }
                               ?>
                        </tbody>
                     </table>
                     <button class="btn btn-success" style='margin-left: 80%' type="button">Insgesamt: <?= ausgabewert_aldi(0); ?>
                     €</button>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header">
                  <a class="collapsed card-link" data-parent="#accordion" data-toggle="collapse" href="#collapseFive">#5 PENNY</a>
               </div>
               <div class="collapse" id="collapseFive">
                  <div class="card-body">
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                              <th>Name</th>
                              <th>Anzahl</th>
                              <th>Preis</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                              $stmt = $con->prepare("SELECT * FROM einkaufsliste where markt = 'PENNY'");
                              $stmt->execute();
                              while($row = $stmt->fetch()) {
                              $name = $row['name'];
                              $anzahl = $row['anzahl'];
                              $preis = $row['preis'];
                              echo "<tr>";
                              echo "<td>$name</td>";
                              echo "<td>$anzahl x</td>";
                              echo "<td>$preis €</td>";
                              echo "</tr>";
                              }
                               ?>
                        </tbody>
                     </table>
                     <button class="btn btn-success" style='margin-left: 80%' type="button">Insgesamt: <?= ausgabewert_penny(0); ?>
                     €</button>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header">
                  <a class="collapsed card-link" data-parent="#accordion" data-toggle="collapse" href="#collapseSix">#6 Müller</a>
               </div>
               <div class="collapse" id="collapseSix">
                  <div class="card-body">
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                              <th>Name</th>
                              <th>Anzahl</th>
                              <th>Preis</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                              $stmt = $con->prepare("SELECT * FROM einkaufsliste where markt = 'MUELLER'");
                              $stmt->execute();
                              while($row = $stmt->fetch()) {
                              $name = $row['name'];
                              $anzahl = $row['anzahl'];
                              $preis = $row['preis'];
                              echo "<tr>";
                              echo "<td>$name</td>";
                              echo "<td>$anzahl x</td>";
                              echo "<td>$preis €</td>";
                              echo "</tr>";
                              }
                               ?>
                        </tbody>
                     </table>
                     <button class="btn btn-success" style='margin-left: 80%' type="button">Insgesamt: <?= ausgabewert_mueller(0); ?>
                     €</button>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header">
                  <a class="collapsed card-link" data-parent="#accordion" data-toggle="collapse" href="#collapseSeven">#7 Thomas Philipps</a>
               </div>
               <div class="collapse" id="collapseSeven">
                  <div class="card-body">
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                              <th>Name</th>
                              <th>Anzahl</th>
                              <th>Preis</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                              $stmt = $con->prepare("SELECT * FROM einkaufsliste where markt = 'THOMAS_PHILIPPS'");
                              $stmt->execute();
                              while($row = $stmt->fetch()) {
                              $name = $row['name'];
                              $anzahl = $row['anzahl'];
                              $preis = $row['preis'];
                              echo "<tr>";
                              echo "<td>$name</td>";
                              echo "<td>$anzahl x</td>";
                              echo "<td>$preis €</td>";
                              echo "</tr>";
                              }
                               ?>
                        </tbody>
                     </table>
                     <button class="btn btn-success" style='margin-left: 80%' type="button">Insgesamt: <?= ausgabewert_thomas_philipps(0); ?>
                     €</button>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header">
                  <a class="collapsed card-link" data-parent="#accordion" data-toggle="collapse" href="#collapseEight">#8 Netto Marken Discount</a>
               </div>
               <div class="collapse" id="collapseEight">
                  <div class="card-body">
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                              <th>Name</th>
                              <th>Anzahl</th>
                              <th>Preis</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                              $stmt = $con->prepare("SELECT * FROM einkaufsliste where markt = 'ROTER_NETTO'");
                              $stmt->execute();
                              while($row = $stmt->fetch()) {
                              $name = $row['name'];
                              $anzahl = $row['anzahl'];
                              $preis = $row['preis'];
                              echo "<tr>";
                              echo "<td>$name</td>";
                              echo "<td>$anzahl x</td>";
                              echo "<td>$preis €</td>";
                              echo "</tr>";
                              }
                               ?>
                        </tbody>
                     </table>
                     <button class="btn btn-success" style='margin-left: 80%' type="button">Insgesamt: <?= ausgabewert_roter_netto(0); ?>
                     €</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
	  <button class="btn btn-success" style='margin-left: 43%; margin-top: 10px;' type="button">Ausgaben für alle Märkte: <b><?= ausgabewert_all(0); ?>€</b></button>
   </body>
</html>