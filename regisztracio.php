<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regisztráció</title>
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
        <form action="regisztracio.php" method="POST" name="jelentkezesi_urlap" id="jelentkezesi_urlap">
            <h2>Jelentkezési űrlap</h2>
            <div class="mb-3">
                <label class="form-label" for="fnev_input">Felhasználó név:</label>
                <input class="form-control" type="text" name="fnev" id="fnev_input" placeholder="Felhasználó név">
            </div>
            <div class="mb-3">
                <label class="form-label" for="email_input">E-mail:</label>
                <input class="form-control" type="email" name="email" id="email_input" placeholder="E-mail">
            </div>
            <div class="mb-3">
                <label class="form-label" for="jelszo_input">Jelszó:</label>
                <input class="form-control" type="password" name="jelszo" id="jelszo_input" placeholder="Jelszó">
            </div>
            <div class="mb-3">
                <label class="form-label" for="tnev_input">Teljes név:</label>
                <input class="form-control" type="text" name="tnev" id="tnev_input" placeholder="Teljes név">
            </div>
            <div class="mb-3">
                <label class="form-label" for="szuletesi_datum">Születési dátum:</label>
                <input class="form-control" type="date" name="szuletesi_datum" id="szuletesi_datum_input" placeholder="Születési dátum">
            </div>
            <div class="mb-3">
                <label class="form-label" for="iranyito_szam">Irányító szám:</label>
                <input class="form-control" type="number" name="iranyito_szam" id="iranyito_szam_input" placeholder="Irányító szám">
            </div>
            <div class="mb-3">
                <label class="form-label" for="varos">Város:</label>
                <input class="form-control" type="text" name="varos" id="varos_input" placeholder="Város">
            </div>
            <div class="mb-3">
                <label class="form-label" for="cim">Cím:</label>
                <input class="form-control" type="text" name="cim" id="cim_input" placeholder="Cím">
            </div>
            <div class="mb-3">
                <input class="form-check-input" type="checkbox" name="feltetelek" id="feltetelek_input">
                <label class="checkbox_label form-check-label" for="feltetelek_input">Elolvastam és elfogadom a felhasználói feltételeket</label>
            </div>
            <input class="btn btn-outline-primary" type="submit" value="Elküld">
        </form>
        <?php if (isset($_POST) && !empty($_POST)) : ?>
            <?php if (count($_POST) < 6) : ?>
                <h2>Hiba az űrlap elküldésekor</h2>
                <ul>
                    <?php if (!isset($_POST['fnev']) || empty($_POST['fnev'])) : ?>
                        <li>A felhasználó név megadása kötelező</li>
                    <?php endif; ?>
                    <?php if (!isset($_POST['email']) || empty($_POST['email'])) : ?>
                        <li>Az e-mail megadása kötelező</li>
                    <?php endif; ?>
                    <?php if (!isset($_POST['jelszo']) || empty($_POST['jelszo'])) : ?>
                        <li>A jelszó megadása kötelező</li>
                    <?php endif; ?>
                    <?php if (!isset($_POST['tnev']) || empty($_POST['tnev'])) : ?>
                        <li>A teljes név megadása kötelező</li>
                    <?php endif; ?>
                    <?php if (!isset($_POST['szuletesi_datum']) || empty($_POST['szuletesi_datum'])) : ?>
                        <li>A születési dátum megadása kötelező</li>
                    <?php endif; ?>
                    <?php if (!isset($_POST['iranyito_szam']) || empty($_POST['iranyito_szam'])) : ?>
                        <li>Az irányító szám megadása kötelező</li>
                    <?php endif; ?>
                    <?php if (!isset($_POST['varos']) || empty($_POST['varos'])) : ?>
                        <li>A város megadása kötelező</li>
                    <?php endif; ?>
                    <?php if (!isset($_POST['cim']) || empty($_POST['cim'])) : ?>
                        <li>A cím megadása kötelező</li>
                    <?php endif; ?>
                </ul>
            <?php else : ?>
                <?php 
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "webshop";

                    $fnev = $_POST['fnev'];
                    $email = $_POST['email'];
                    $jelszo = "";
                    $tnev = $_POST['tnev'];
                    $szuletesi_datum = $_POST['szuletesi_datum'];
                    $iranyito_szam= $_POST['iranyito_szam'];
                    $varos= $_POST['varos'];
                    $cim= $_POST['cim'];
                    for ($i = 0; $i < strlen($_POST['jelszo']); $i++) { 
                        $jelszo .= "*";
                    }
                    $sor = "$fnev;$email;$jelszo;$tnev;$szuletesi_datum;$iranyito_szam;$varos;$cim". PHP_EOL;

                    $conn = new mysqli($servername, $username, $password, $dbname);

                    $sql = "INSERT INTO felhasznalo (felhasznalo_nev, email, jelszo, teljes_nev, szuletesi_datum, iranyito_szam, varos, cim) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
                    
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("sssssiss", $fnev, $email, $jelszo, $tnev, $szuletesi_datum, $iranyito_szam, $varos, $cim);
                    $stmt->execute();

                    $conn->close();
                ?>
            <?php endif; ?>
        <?php endif; ?>
    </main>
</body>
</html>
