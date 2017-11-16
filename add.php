<?php include_once("database.php"); ?>
<?php include_once("functions.php"); ?>
<?php include_once("config.php"); ?>
<?php
$error = "";
if (isset($_POST['submit'])) {
    $artikel_name = !empty($_POST['artikel_name']) ? trim($_POST['artikel_name']) : null;
    $artikel_anzahl = !empty($_POST['artikel_anzahl']) ? trim($_POST['artikel_anzahl']) : null;
    $artikel_preis = !empty($_POST['artikel_preis']) ? trim($_POST['artikel_preis']) : null;
    $select_markt = !empty($_POST['select_markt']) ? trim($_POST['select_markt']) : null;


    if (strlen($artikel_name) < 2) {
        $error = true;
        $artikel_name_error = "Trage den Artikel Namen ein.";
    } else if ($artikel_anzahl < 1) {
        $error = true;
        $artikel_anzahl_error = "Trage die Artikel Anzahl ein.";
    } else if (strlen($artikel_preis) < 1) {
        $error = true;
        $artikel_preis_error = "Trage den Preis des Artikels ein.";
    } else if (strlen($select_markt) < 1) {
        $error = true;
        $select_markt_error = "Wähle einen Markt.";
    }

    if (!$error) {
        $stmt = $con->prepare("INSERT INTO einkaufsliste (name, anzahl, preis, markt) VALUES (:name, :anzahl, :preis, :markt)");
        $stmt->bindValue(':name', $artikel_name);
        $stmt->bindValue(':anzahl', $artikel_anzahl);
        $stmt->bindValue(':preis', $artikel_preis);
        $stmt->bindValue(':markt', $select_markt);
        $result = $stmt->execute();

        if (isset($result)) {
            $successfully = "Artikel wurde erfolgreich hinzugefügt.";
        } else {
            $error_query = "Artikel wurde erfolgreich hinzugefügt.";
        }
    }

}

?>
<!DOCTYPE html>
<html>
<?php include_once("head.php"); ?>
<body>
<?php include_once("navigation.php"); ?>
<br>
<br>
<br>
<div class="container">
    <div class="card bg-light text-dark">
        <div class="card-body">
            <form method="post">
                <center>
                    <?php
                    if (isset($successfully)) {
                        echo "<div class='alert alert-success'><b>$successfully</b>";
                    }
                    if (isset($error_query)) {
                        echo "<div class='alert alert-danger'><b>$error_query</b>";
                    }
                    if (isset($artikel_name_error)) {
                        echo "<div class='alert alert-danger'><b>$artikel_name_error</b>";
                    }
                    if (isset($artikel_anzahl_error)) {
                        echo "<div class='alert alert-danger'><b>$artikel_anzahl_error</b>";
                    }
                    if (isset($artikel_preis_error)) {
                        echo "<div class='alert alert-danger'><b>$artikel_preis_error</b>";
                    }
                    if (isset($select_markt_error)) {
                        echo "<div class='alert alert-danger'><b>$select_markt_error</b>";
                    }
                    ?>
                </center>
                <div class="form-group">
                    <label for="artikel_name">Artikel Name:</label>
                    <input type="text" name="artikel_name" class="form-control" id="artikel_name">
                </div>
                <div class="form-group">
                    <label for="artikel_anzahl">Anzahl:</label>
                    <input type="text" name="artikel_anzahl" class="form-control" id="artikel_anzahl">
                </div>
                <div class="form-group">
                    <label for="artikel_preis">Preis:</label>
                    <input type="text" name="artikel_preis" class="form-control" id="artikel_preis">
                </div>
                <div class="form-group">
                    <label for="select_markt">Markt auswählen:</label>
                    <select class="form-control" name="select_markt" id="select_markt">
                        <option> -</option>
                        <?php
                        $stmt = $con->prepare("SELECT * FROM markt_list");
                        $stmt->execute();
                        while ($row = $stmt->fetch()) {
                            $markt = $row['name'];
                            echo "<option>$markt</option>";
                        }
                        ?>
                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-success">Artikel hinzufügen</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>