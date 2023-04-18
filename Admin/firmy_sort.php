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
                <h3>Wyświetlenie firm posortowanych po zostawionych pieniądzach:</h3>
                <table>
                <?php   
                        echo "<table>";
                        echo "<tr>";
                        echo "<th>Nazwa firmy</th>";
                        echo "<th>NIP</th>";
                        echo "<th>E-mail</th>";
                        echo "<th>Suma</th>";
                        echo "</tr>";
                        $polaczenie = mysqli_connect('localhost', 'root', '', 'warsztat');
                        $klienci = mysqli_query($polaczenie, 'SELECT klienci.nazwa_firmy, klienci.NIP, klienci.email , sum(`koszt`) as suma FROM `zgloszenia` join klienci on klienci.id_klienta = zgloszenia.wlasciciel WHERE klienci.imie is null or klienci.imie = "" and klienci.nazwisko is null or klienci.nazwisko = "" GROUP by klienci.email order by sum(koszt) desc;') ;
                        while($r = mysqli_fetch_row($klienci)){
                            echo "<tr>";
                            echo "<td>".$r[0]."</td>";
                            echo "<td>".$r[1]."</td>";
                            echo "<td>".$r[2]."</td>";
                            echo "<td>".$r[3]."</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        mysqli_close($polaczenie);
                    ?>
            </table>
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
