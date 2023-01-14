<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Az adatok feldolgozása</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> 
    <link rel="stylesheet" href="style.css">
</head>
    
<body>
    
    <a href="regisztracio.php">Vissza az űrlaphoz</a>
    <main class="container">
    <?php if (isset($_POST) && !empty($_POST)) : ?>
            <?php if (count($_POST) < 6) : ?>
                <h2>Hiba az űrlap elküldésekor</h2>
                <ul>
                    <?php if (!isset($_POST['nev']) || empty($_POST['nev'])) : ?>
                        <li>A név megadása kötelező</li>
                    <?php endif; ?>
                    <?php if (!isset($_POST['email']) || empty($_POST['email'])) : ?>
                        <li>Az e-mail megadása kötelező</li>
                    <?php endif; ?>
                    <?php if (!isset($_POST['jelszo']) || empty($_POST['jelszo'])) : ?>
                        <li>A jelszó megadása kötelező</li>
                    <?php endif; ?>
                    <?php if (!isset($_POST['nem']) || empty($_POST['nem'])) : ?>
                        <li>A nem megadása kötelező</li>
                    <?php endif; ?>
                    <?php if (!isset($_POST['iskola']) || empty($_POST['iskola'])) : ?>
                        <li>Az iskolai végzettség megadása kötelező</li>
                    <?php endif; ?>
                    <?php if (!isset($_POST['feltetelek']) || empty($_POST['feltetelek'])) : ?>
                        <li>A feltételek elfogadása kötelező</li>
                    <?php endif; ?>
                </ul>
            <?php else : ?>
                <?php 
                    $file = fopen("adatok.csv", 'a');
                    $nev = $_POST['nev'];
                    $email = $_POST['email'];
                    $jelszo = "";
                    for ($i = 0; $i < strlen($_POST['jelszo']); $i++) { 
                        $jelszo .= "*";
                    }
                    $nem = "";
                    switch ($_POST['nem']) {
                        case "ferfi":
                            $nem = "Férfi";
                            break;
                        case "no":
                            $nem = "Nő";
                            break;
                        default:
                            $nem = "Egyéb";
                            break;
                    } 
                    $iskola = "";
                    switch ($_POST['iskola']) {
                        case "altalanos":
                            $iskola = "Általános Iskola";
                            break;
                        case "szakmunkas":
                            $iskola = "Szakmunkás képző / szakiskola";
                            break;
                        case "erettsegi":
                            $iskola = "Érettségi";
                            break;
                        case "okj":
                            $iskola = "OKJ";
                            break;
                        case "egyetem":
                            $iskola = "Főiskola / Egyetem";
                            break;
                    }
                    $sor = "$nev;$email;$jelszo;$nem;$iskola". PHP_EOL;
                    fwrite($file, $sor);
                    fclose($file);
                ?>
                <section id="megadott_adatok">
                    <h2>Megadott adatok</h2>
                    <ul>
                        <li>Név: <?php echo $nev ?> </li>
                        <li>E-mail: <?php echo $email ?> </li>
                        <li>Jelszó: <?php echo $jelszo ?> </li>
                        <li>Nem: <?php echo $nem ?> </li>
                        <li>Iskolai végzettség: <?php echo $iskola ?></li>
                    </ul>
                </section>
            <?php endif; ?>
        <?php endif; ?>
    </main>
</body>
</html>