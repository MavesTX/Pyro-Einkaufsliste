<?php include_once("database.php"); ?>
<?php include_once("functions.php"); ?>
<?php include_once("config.php"); ?>
<!DOCTYPE html>
<html>
<?php include_once("head.php"); ?>
<body>
<?php include_once("navigation.php"); ?>
<center>
    <a class="btn btn-primary" href="add.php" id="add_button" role="button">Artikel hinzufügen</a>
</center>
<?php include_once("cards.php"); ?>
<button class="btn btn-success" style='margin-left: 43%; margin-top: 10px;' role="button">Ausgaben für alle Märkte:
    <b><?= ausgabewert_all(0); ?>€</b></button>
</body>
</html>