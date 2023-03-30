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
        <section id="form">
            <form method="POST" action="wydanie.php">
                <label for="id_samochodu">ID samochodu:</label>
                <input type="text" id="id_samochodu" name="id_samochodu">
                <button type="submit" name="submit_zaktualizuj">Zaktualizuj</button>
            </form>
            <?php
            // połączenie z bazą danych
            $conn = mysqli_connect('localhost', 'root', '', 'warsztat');

            if(isset($_POST['submit_zaktualizuj'])) {
                $id_samochodu = $_POST['id_samochodu'];
                $sql = "UPDATE `zgloszenia` SET `data_wydania`= ( SELECT CURDATE()) WHERE samochod = $id_samochodu";
                
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
