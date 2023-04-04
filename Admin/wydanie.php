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
    <section class="baza">
                <h3>Samochody do wydania</h3>
                <table>
                <?php  
                        $polaczenie = mysqli_connect('localhost', 'root', '', 'warsztat');
                        $klienci = mysqli_query($polaczenie, 'SELECT `id_uslugi`, `data_przyjecia`, `godzina_przyjecia`, marki_samochodów.nazwa, samochody.model, samochody.numer_rejestracyjny FROM `zgloszenia` join samochody on samochody.id_samochodu = zgloszenia.samochod join marki_samochodów on marki_samochodów.id_marki = samochody.marka WHERE `data_wydania` is null or `data_wydania` = "";');
                        while($r = mysqli_fetch_row($klienci)){
                            echo "<tr>";
                            echo "<td>".$r[0]."</td>";
                            echo "<td>".$r[1]."</td>";
                            echo "<td>".$r[2]."</td>";
                            echo "<td>".$r[3]."</td>";
                            echo "<td>".$r[4]."</td>";
                            echo "<td>".$r[5]."</td>";
                            echo "</tr>";
                        }
                        mysqli_close($polaczenie);
                    ?>
            </table>
        </section>
        <section id="form3">
            <form method="POST" action="wydanie.php">
                <label for="id_samochodu">ID samochodu:</label>
                <input type="text" id="id_uslugi" name="id_uslugi">
                <label for="usluga">Usługa:</label>
                <input type="text" id="usluga" name="usluga">
                <label for="koszt">Koszt usługi:</label>
                <input type="text" id="koszt" name="koszt">
                <button type="submit" name="submit_zaktualizuj">Zaktualizuj</button>
            </form>
            <?php
            // połączenie z bazą danych
            $conn = mysqli_connect('localhost', 'root', '', 'warsztat');

            if(isset($_POST['submit_zaktualizuj'])) {
                $id_uslugi = $_POST['id_uslugi'];
                $usluga = $_POST['usluga'];
                $koszt = $_POST['koszt'];
                $sql = "UPDATE `zgloszenia` SET `data_wydania`= ( SELECT CURDATE()), `usluga` = '$usluga' , `koszt` = '$koszt' WHERE id_uslugi = '$id_uslugi'";
                
                // wykonanie zapytania SQL
                if(mysqli_query($conn, $sql)) {
                    echo "Zapytanie SQL wykonane";
                } else {
                    echo "Błąd wykonania zapytania SQL: " . mysqli_error($conn);
                }
            }

            // zamknięcie połączenia z bazą danych
            mysqli_close($conn);
            ?>
        </section>
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
