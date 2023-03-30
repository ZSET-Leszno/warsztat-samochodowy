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
                <h3>Wyświetlenie samochodu danego klienta lub firmy</h3>
                <table>
                <?php  
                        $polaczenie = mysqli_connect('localhost', 'root', '', 'warsztat');
                        $klienci = mysqli_query($polaczenie, 'SELECT * FROM `zgloszenia` WHERE `data_wydania` is null or `data_wydania` = "";');
                        while($r = mysqli_fetch_row($klienci)){
                            echo "<tr>";
                            echo "<td>".$r[0]."</td>";
                            echo "<td>".$r[1]."</td>";
                            echo "<td>".$r[2]."</td>";
                            echo "<td>".$r[3]."</td>";
                            echo "<td>".$r[4]."</td>";
                            echo "<td>".$r[5]."</td>";
                            echo "<td>".$r[6]."</td>";
                            echo "<td>".$r[7]."</td>";
                            echo "</tr>";
                        }
                        mysqli_close($polaczenie);
                    ?>
            </table>
        </section>
        <section id="form2">
        <h1>Wyświetlanie samochodów klienta</h1>
        <form action="wyswietl_samochody.php" method="POST">
            <label>Imię:</label>
            <input type="text" name="imie"><br>
            <label>Nazwisko:</label>
            <input type="text" name="nazwisko"><br>
            <input type="submit" name="submit" value="Wyświetl samochody">
        </form>
        </section>
        <?php
        // dane do połączenia z bazą danych
        $host = 'localhost';
        $dbname = 'warsztat';
        $user = 'root';
        $password = '';

        // połączenie z bazą danych
        $conn = mysqli_connect($host, $user, $password, $dbname);

        if(isset($_POST['submit'])) {
            $imie = $_POST['imie'];
            $nazwisko = $_POST['nazwisko'];
            
            // zapytanie SQL
            $sql = "SELECT * FROM `klienci` WHERE `imie` = '$imie' AND `nazwisko` = '$nazwisko'";
            
            // wykonanie zapytania SQL
            $result = mysqli_query($conn, $sql);
            
            if(mysqli_num_rows($result) > 0) {
                // wyświetlenie wyników
                while($row = mysqli_fetch_assoc($result)) {
                    echo "Marka: " . $row['marka'] . " | Model: " . $row['model'] . " | Numer rejestracyjny: " . $row['numer_rejestracyjny'] . "<br>";
                }
            } else {
                echo "Brak wyników";
            }
        }

        // zamknięcie połączenia z bazą danych
        mysqli_close($conn);
        ?>
        <section id="form2">
        <h1>Wyświetlanie samochodów firmy</h1>
        <form action="wyswietl_samochody.php" method="POST">
            <label>Nazwa firmy:</label>
            <input type="text" name="firma"><br>
            <input type="submit" name="submit" value="Wyświetl samochody">
        </form>
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
