<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warsztat - administrator</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <header>
    <a href="http://localhost/warsztat-samochodowy/Main/index.html"><img src="../images/logo.png" alt="logo"></a>
        <div id="menu">
            <a href="http://localhost/warsztat-samochodowy/admin/admin.php"><span>PANEL ADMINISTRATORA</span></a>
        </div>
    </header>
    <main>
	<?php
    // Połączenie z bazą danych
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "warsztat";
    $conn = new mysqli($host, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Pobranie ID samochodu z parametru GET
    $id_samochodu = $_GET["id_samochodu"];

    // Zapytanie SELECT dla tabeli samochody
    $sql = "SELECT id_samochodu, marki_samochodów.nazwa, model, rodzaj_silnika, numer_rejestracyjny, rocznik FROM samochody join marki_samochodów on marki_samochodów.id_marki = samochody.marka where id_samochodu='$id_samochodu';";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Wyświetlenie wyników w tabeli HTML
        echo "<table>";
		echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Marka</th>";
        echo "<th>Model</th>";
        echo "<th>Rodzaj silnika</th>";
        echo "<th>Numer rejestracyjny</th>";
        echo "<th>Rocznik</th>";
        echo "</tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td style='width: 100px; height: 50px; text-align: center'>" . $row["id_samochodu"] . "</td>";
            echo "<td style='width: 100px; height: 50px; text-align: center'>" . $row["nazwa"] . "</td>";
            echo "<td style='width: 100px; height: 50px; text-align: center'>" . $row["model"] . "</td>";
            echo "<td style='width: 100px; height: 50px; text-align: center'>" . $row["rodzaj_silnika"] . "</td>";
            echo "<td style='width: 100px; height: 50px; text-align: center'>" . $row["numer_rejestracyjny"] . "</td>";
            echo "<td style='width: 100px; height: 50px; text-align: center'>" . $row["rocznik"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Brak danych";
    }
    $conn->close();
?>

    </main>
    <footer>
        <span class="white">STACJA KONTROLI POJAZDÓW
        </span>
        <span class="white">WARSZTAT SAMOCHODOWY</span>
        <br>
        <span>© 2023 AUTO ZAGÓRSKI | Wykorzystujemy pliki cookies. </span>
        <br>
        <p>Warsztat Samochodowy Tomasz Zagórski, ul. Augustyna Szamarzewskiego 42, 60-552 Poznań, NIP: 7772507820, REGON: 634640527</p>
    </footer>
</body>
</html>