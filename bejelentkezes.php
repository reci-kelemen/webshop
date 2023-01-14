<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bejelentkezés</title>
     <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> 
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <a href="fooldal.php">Főoldal</a>
        <a href="regisztracio.php">Regisztráció</a>
        <a href="bejelentkezes.php">Bejelentkezes</a>
        <a href="termekek.php">Termékek hozzáadása</a>
        <button><a href="fooldal.php">Kijelentkezés</a></button>
    </nav>
    <main class="container">
        <form action="termekek.php" method="POST" name="termekek_urlap" id="termekek_urlap">
            <h2>Bejelentkezés</h2>
            <div class="mb-3">
                <label class="form-label" for="fnev_input">Felhasználó név:</label>
                <input class="form-control" type="text" name="fnev" id="fnev_input" placeholder="Felhasználó név">
            </div>
            <div class="mb-3">
                <label class="form-label" for="jelszo_input">Jelszó:</label>
                <input class="form-control" type="password" name="jelszo" id="jelszo_input" placeholder="Jelszó">
            </div>
            <input class="btn btn-outline-primary" type="submit" value="Bejelentkezés">
        </form>
        <?php if (isset($_POST) && !empty($_POST)) : ?>
            <?php if (count($_POST) < 3) : ?>
                <h2>Hiba a bejelentkezesnél</h2>
                <ul>
                    <?php if (!isset($_POST['fnev']) || empty($_POST['fnev'])) : ?>
                        <li>A név megadása kötelező</li>
                    <?php endif; ?>
                    <?php if (!isset($_POST['jelszo']) || empty($_POST['jelszo'])) : ?>
                        <li>A jelszó megadása kötelező</li>
                    <?php endif; ?>
                </ul>
            <?php else : ?>
                <?php 
                    $nev = $_POST['fnev'];
                    $ar = $_POST['jelszo'];
                    $sor = "$nev;$leiras;". PHP_EOL;
                ?>
            <?php endif; ?>
        <?php endif; ?>
    </main>
</body>
</html>
