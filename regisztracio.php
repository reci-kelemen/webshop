<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="fooldal.php">Főoldal</a>
        <a href="regisztracio.php">Regisztráció</a>
        <a href="bejelentkezes.php">Bejelentkezes</a>
        <a href="termekek.php">Termékek hozzáadása</a>
        <button>Kijelentkezés</button>
    </nav>
    <h1>
    </h1>
    <p>
        <?php
        if(isset($_POST) && !empty($_POST)){
            if(isset($_POST['nev']) && !empty($_POST['nev'])){
             
            }
        }
        ?>
        
    </p>

    <form action="index.php" method="POST" name="jelentkezesi_urlap">
    <label for="nev_input">Név:</label>
        <input type="text" name="nev" id="nev_input" placeholder="Név">
        <br>
        <label for="email_input">E-mail:</label>
        <input type="email" name="email" id="email_input" placeholder="E-mail">
        <br>
        <label for="jelszo_input">Jelszó:</label>
        <input type="password" name="jelszo" id="jelszo_input" placeholder="Jelszó">
        <br>
        <label>Nem:</label>
        <input type="radio" name="nem" id="ferfi_input" value="ferfi">
        <label for="ferfi_input">Férfi</label>
        <input type="radio" name="nem" id="no_input" value="no">
        <label for="no_input">Nő</label>
        <input type="radio" name="nem" id="egyeb_input" value="egyeb">
        <label for="egyeb_input">Egyéb</label>
        <br>
        <label for="iskola_input">Iskolai végzettség</label>
        <select name="iskola" id="iskola_input">
            <option value="altalanos">Általános Iskola</option>
            <option value="szakmunkas">Szakmunkás képző / szakiskola</option>
            <option value="erettsegi">Érettségi</option>
            <option value="okj">OKJ</option>
            <option value="egyetem">Főiskola / Egyetem</option>
        </select>
        <br>
        <input type="checkbox" name="feltetelek" id="feltetelek_input">
        <label for="feltetelek_input">Elolvastam és elfogadom a felhasználói feltételeket</label>
        <br>
        <input type="button" value="Elküld">
    </form>
</body>
</html>
