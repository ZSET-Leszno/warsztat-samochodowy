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
    <table>
		<thead>
			<tr>
				<th>ID klienta</th>
				<th>Nazwa firmy</th>
				<th>NIP</th>
				<th>Imię</th>
				<th>Nazwisko</th>
				<th>Telefon</th>
				<th>E-mail</th>
				<th>Kod pocztowy</th>
				<th>Miejscowość</th>
				<th>Adres</th>
				<th>Samochód</th>
			</tr>
		</thead>
		<tbody>
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

				// Zapytanie SELECT dla tabeli klienci
				$sql = "SELECT id_klienta, nazwa_firmy, NIP, imie, nazwisko, telefon, email, kod_pocztowy, miejscowosc, adres, samochod FROM klienci";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// Wyświetlenie danych w tabeli
					while($row = $result->fetch_assoc()) {
						echo "<tr>";
						echo "<td>" . $row["id_klienta"] . "</td>";
						echo "<td>" . $row["nazwa_firmy"] . "</td>";
						echo "<td>" . $row["NIP"] . "</td>";
						echo "<td>" . $row["imie"] . "</td>";
						echo "<td>" . $row["nazwisko"] . "</td>";
						echo "<td>" . $row["telefon"] . "</td>";
						echo "<td>" . $row["email"] . "</td>";
						echo "<td>" . $row["kod_pocztowy"] . "</td>";
						echo "<td>" . $row["miejscowosc"] . "</td>";
						echo "<td>" . $row["adres"] . "</td>";
						echo "<td>";
						echo "<button onclick=\"showCars(" . $row['samochod'] . ")\">Pokaż samochody</button>";
						echo "</td>";
						echo "</tr>";
					}
				} else {
					echo "Brak danych";
				}
				$conn->close();
                echo "<script>
                function showCars(samochod) {
                window.location.href = 'get_cars.php?id_samochodu=' + samochod;
                }
                </script>";
			?>
		</tbody>
	</table>
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
