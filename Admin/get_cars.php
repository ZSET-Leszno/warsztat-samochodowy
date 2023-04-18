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
    $polaczenie = mysqli_connect('localhost', 'root', '', 'warsztat');

    // Pobranie ID samochodu z parametru GET
    $id_samochodu = $_GET["id_samochodu"];

    // Zapytanie SELECT dla tabeli samochody
    $kwerenda_szukanie_wlascicela = "SELECT nazwa_firmy, NIP, imie, nazwisko, telefon, email, kod_pocztowy, miejscowosc, adres FROM klienci WHERE samochod = '$id_samochodu';";
    $szukaj_wlasciciela = mysqli_query($polaczenie, $kwerenda_szukanie_wlascicela);
            while($r = mysqli_fetch_row($szukaj_wlasciciela))
            {
                $nazwa_firmy = $r[0];
                $NIP = $r[1];
                $imie = $r[2];
                $nazwisko = $r[3];
                $telefon = $r[4];
                $email = $r[5];
                $kod_pocztowy = $r[6];
                $miejscowosc = $r[7];
                $adres = $r[8];
            }
            if ((strlen($nazwa_firmy)>0) and (strlen($NIP)>0))
            {
                $kwerenda_samochody = "SELECT samochod FROM klienci WHERE nazwa_firmy='$nazwa_firmy' and NIP='$NIP' and telefon='$telefon' and email='$email' and kod_pocztowy='$kod_pocztowy' and miejscowosc='$miejscowosc' and adres = '$adres';";
                $zapytanie_samochody = mysqli_query($polaczenie, $kwerenda_samochody);
            }
            elseif ((strlen($imie)>0) and (strlen($nazwisko)>0))
            {
                $kwerenda_samochody = "SELECT samochod FROM klienci WHERE imie='$imie' and nazwisko='$nazwisko' and telefon='$telefon' and email='$email' and kod_pocztowy='$kod_pocztowy' and miejscowosc='$miejscowosc' and adres = '$adres';";
                $zapytanie_samochody = mysqli_query($polaczenie, $kwerenda_samochody);
            }
            else
            {
                echo "Błąd";
            }
            $array = [];
            while($r = mysqli_fetch_row($zapytanie_samochody))
            {
                $id_samochodu = $r[0];
                array_push($array, $id_samochodu);
            }
                echo "<table>";
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Marka</th>";
                echo "<th>Model</th>";
                echo "<th>Rodzaj silnika</th>";
                echo "<th>Numer rejestracyjny</th>";
                echo "<th>Rocznik</th>";
                echo "</tr>";
            foreach($array as $id_samochodu)
            {
              $kwerenda_samochody = "SELECT id_samochodu, marki_samochodów.nazwa, model, rodzaj_silnika, numer_rejestracyjny, rocznik FROM samochody join marki_samochodów on marki_samochodów.id_marki = samochody.marka where id_samochodu='$id_samochodu';";
              $samochody = mysqli_query($polaczenie, $kwerenda_samochody);
              while($row = mysqli_fetch_row($samochody))
                {
                    echo "<tr>";
                    echo "<td style='width: 100px; height: 50px; text-align: center'>" . $row[0] . "</td>";
                    echo "<td style='width: 100px; height: 50px; text-align: center'>" . $row[1] . "</td>";
                    echo "<td style='width: 100px; height: 50px; text-align: center'>" . $row[2] . "</td>";
                    echo "<td style='width: 100px; height: 50px; text-align: center'>" . $row[3] . "</td>";
                    echo "<td style='width: 100px; height: 50px; text-align: center'>" . $row[4] . "</td>";
                    echo "<td style='width: 100px; height: 50px; text-align: center'>" . $row[5] . "</td>";
                    echo "</tr>";
                }
            }
            echo "</table>";
    mysqli_close($polaczenie);
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