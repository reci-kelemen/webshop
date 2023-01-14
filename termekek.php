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
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Név</th>
                    <th>E-mail</th>
                    <th>Jelszó</th>
                    <th>Nem</th>
                    <th>Iskola végzetség</th>
                </tr>
            </thead>
            <tbody>

                <?php
            $file = fopen("adatok.csv", "r");
            $i = 0;
            while ($sor = fgets($file)) {
                $i++;
                $adatok = explode(";", $sor);
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $adatok[0] ?></td>
                    <td><?php echo $adatok[1] ?></td>
                    <td><?php echo $adatok[2] ?></td>
                    <td><?php echo $adatok[3] ?></td>
                    <td><?php echo $adatok[4] ?></td>
                </tr>
                <?php
            }
            fclose($file);
            ?>
            </tbody>
            
            <tfoot>
                <tr>
                    <th>#</th>
                    <th>Név</th>
                    <th>E-mail</th>
                    <th>Jelszó</th>
                    <th>Nem</th>
                    <th>Iskola végzetség</th>
                </tr>
            </tfoot>
        </table>
    </main>
</body>
</html>
