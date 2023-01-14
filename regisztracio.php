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
        <form action="adatfeldolgozas.php" method="POST" name="jelentkezesi_urlap" id="jelentkezesi_urlap">
            <h2>Jelentkezési űrlap</h2>
            <div class="mb-3">
                <label class="form-label" for="nev_input">Név:</label>
                <input class="form-control" type="text" name="nev" id="nev_input" placeholder="Név">
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
                <label class="form-label radio_label checkbox_label">Nem:</label>
                <div>
                    <input class="form-check-input" type="radio" name="nem" id="ferfi_input" value="ferfi">
                    <label class="form-check-label radio_label" for="ferfi_input">Férfi</label>
                    <input class="form-check-input" type="radio" name="nem" id="no_input" value="no">
                    <label class="form-check-label radio_label" for="no_input">Nő</label>
                    <input class="form-check-input" type="radio" name="nem" id="egyeb_input" value="egyeb">
                    <label class="form-check-label radio_label" for="egyeb_input">Egyéb</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="iskola_input">Iskolai végzettség</label>
                <select class="form-select" name="iskola" id="iskola_input">
                    <option value="altalanos">Általános Iskola</option>
                    <option value="szakmunkas">Szakmunkás képző / szakiskola</option>
                    <option value="erettsegi">Érettségi</option>
                    <option value="okj">OKJ</option>
                    <option value="egyetem">Főiskola / Egyetem</option>
                </select>
            </div>
            <div class="mb-3">
                <input class="form-check-input" type="checkbox" name="feltetelek" id="feltetelek_input">
                <label class="checkbox_label form-check-label" for="feltetelek_input">Elolvastam és elfogadom a felhasználói feltételeket</label>
            </div>
            <input class="btn btn-outline-primary" type="submit" value="Elküld">
        </form>

    </main>
</body>
</html>
