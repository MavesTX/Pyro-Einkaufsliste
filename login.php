<?php include_once("database.php"); ?>
<?php include_once("functions.php"); ?>
<?php include_once("config.php"); ?>
<?php
if(isset($_POST['username'], $_POST['password'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashed_password = hash($HashValue,$password);
    $stmt = $con->prepare("SELECT user_id FROM accounts WHERE username=BINARY(:xname) AND password=:xpass LIMIT 1");
    $stmt->bindParam(':xname', $username);
    $stmt->bindParam(':xpass', $hashed_password);
    $stmt->execute();
    $result = $stmt->fetch();

    if($result == false){
        $errormsg = "<div class='alert alert-danger'><b>Fehler</b></div>";
    } else {
        $_SESSION['userID'] = $result['user_id'];
        $_SESSION['username'] = $_POST['username'];
        header("Location: index.php");
        exit();
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
            <form method="post" role="form" name="login">
                <center>
                    <?php if(isset($errormsg)) { echo $errormsg; } ?>
                </center>
                <div class="form-group">
                    <label for="username">Benutzername:</label>
                    <input type="text" name="username" class="form-control" id="username">
                </div>
                <div class="form-group">
                    <label for="password">Passwort:</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <button type="submit" name="login" class="btn btn-success">Anmelden</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>