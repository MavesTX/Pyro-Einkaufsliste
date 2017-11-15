<?php include_once("database.php"); ?>
<?php include_once("config.php"); ?>
<html>
   <head>
      <title>Silvester - Einkaufsliste</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Play">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="/css/style.css">
      <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
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
            <li class="nav-item">
            <li class="nav-link" id="timer">Timer loaded..</li>
            </li>
         </ul>
      </nav>
      <center><a href="/add/" type="button" id="add_button" class="btn btn-primary">Artikel hinzufügen</a></center>
      <div class="container">
         <div id="accordion">
            <div class="card">
               <div class="card-header">
                  <a class="card-link" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                  Collapsible Group Item #1
                  </a>
               </div>
               <div id="collapseOne" class="collapse show">
                  <div class="card-body">
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header">
                  <a class="collapsed card-link" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                  Collapsible Group Item #2
                  </a>
               </div>
               <div id="collapseTwo" class="collapse">
                  <div class="card-body">
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header">
                  <a class="collapsed card-link" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                  Collapsible Group Item #3
                  </a>
               </div>
               <div id="collapseThree" class="collapse">
                  <div class="card-body">
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>