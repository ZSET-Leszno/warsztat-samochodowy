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
	$sql = "SELECT * FROM `samochody` WHERE `id_samochodu` = $id_samochodu";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// Przygotowanie danych w formacie JSON
		$cars = array();
		while($row = $result->fetch_assoc()) {
			$cars[] = $row;
		}
		echo json_encode($cars);
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