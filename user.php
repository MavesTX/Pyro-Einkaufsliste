<?php if (isset($_SESSION['userID'])) {  ?>
    <!-- Angemeldet -->
    <form class="form-inline">
        <ul class="nav navbar-nav pull-lg-right">
            <li style="margin-right: 47px;" class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="Preview" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <?= showUsername(); ?>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Listen</a>
                </div>
            </li>
        </ul>
    </form>
<?php } else { ?>
<!-- nicht Angemeldet -->
    <form class="form-inline">
        <a href="/login.php" id="login_button" class="btn btn-success" role="button">Einloggen</a>
        <a href="/register.php" id="register_button" class="btn btn-success " role="button">Jetzt Registrieren!</a>
    </form>

<?php } ?>