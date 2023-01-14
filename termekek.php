<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <h2>Termékek hozzáadása</h2>
            <div class="mb-3">
                <label class="form-label" for="nev_input">Termék név:</label>
                <input class="form-control" type="text" name="nev" id="nev_input" placeholder="Termék név">
            </div>
            <div class="mb-3">
                <label class="form-label" for="leiras_input">Leírás:</label>
                <textarea class="form-control" id="leiras_input" name="leiras" rows="4" cols="50" placeholder="Leírás">Leírás</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label" for="ar_input">Ár:</label>
                <input class="form-control" type="number" name="ar" id="ar_input" placeholder="Ár">
            </div>
            <div class="mb-3">
                <label class="form-label" for="kep_input">Kép:</label>
                <input class="form-control" type="url" name="kep" id="kep_input" placeholder="Kép">
            </div>
            <input class="btn btn-outline-primary" type="submit" value="Elküld">
        </form>
        <?php if (isset($_POST) && !empty($_POST)) : ?>
            <?php if (count($_POST) < 3) : ?>
                <h2>Hiba a termék fevételekor</h2>
                <ul>
                    <?php if (!isset($_POST['nev']) || empty($_POST['nev'])) : ?>
                        <li>A név megadása kötelező</li>
                    <?php endif; ?>
                    <?php if (!isset($_POST['ar']) || empty($_POST['ar'])) : ?>
                        <li>A ár megadása kötelező</li>
                    <?php endif; ?>
                    <?php if (intval($_POST['ar']) < 0) : ?>
                        <li>Az ár nem lehet negatív</li>
                    <?php endif; ?>
                    <?php if (!isset($_POST['kep']) || empty($_POST['kep'])) : ?>
                        <li>Kép csatolása kötelező</li>
                    <?php endif; ?>
                    <?php if (!isset($_POST['leiras']) || empty($_POST['leiras'])) : 
                        $leiras = ""; ?>
                    <?php endif; ?>
                </ul>
            <?php else : ?>
                <?php 
                    $file = fopen("termekek.csv", 'a');
                    $nev = $_POST['nev'];
                    $ar = $_POST['ar'];
                    $leiras = $_POST['leiras'];
                    $kep = $_POST['kep'];
                    $sor = "$nev;$leiras;$ar;$kep". PHP_EOL;
                    fwrite($file, $sor);
                    fclose($file);
                ?>
            <?php endif; ?>
        <?php endif; ?>
    </main>
</body>
</html>
