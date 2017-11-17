<?php
session_start();
?>

<head>
    <title>Silvester - Einkaufsliste</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="https://fonts.googleapis.com/css?family=Hammersmith+One|Exo+2" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script>
        var countDownDate = new Date("<?= $month; ?> <?= $day; ?>, <?= $year; ?> <?= $hour; ?>:<?= $minutes; ?>:<?= $secounds; ?>").getTime();

        var x = setInterval(function () {

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