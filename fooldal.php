<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Főoldal</title>
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
            <?php
            $mysqli = new mysqli("localhost", "root", "", "webshop");
            // $connection = mysqli_connect("localhost", "root", "");
            // if ($mysqli -> connect_errno) {
            //     echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
            //     exit();
            //   }
             
            // $mysqli -> query("select * from termek");  
            // $result = mysqli_query($connection,$mysqli);

            // while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
            //     echo "<tr><td>" . htmlspecialchars($row['name']) . "</td><td>" . htmlspecialchars($row['age']) . "</td></tr>";  //$row['index'] the index here is a field name
            //     }

            $mysqli -> close();
            ?>
    </main>
</body>
</html>
