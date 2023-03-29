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
                        $polaczenie = mysqli_connect('localhost', 'root', '', 'warsztat');
                        $klienci = mysqli_query($polaczenie, 'SELECT date_format(`data_wydania`, "%Y") as Rok , date_format(`data_wydania`, "%M") as Miesiąc, sum(`koszt`) as suma FROM `zgloszenia` WHERE `data_wydania` is not null or data_wydania != "" group by Rok, Miesiąc;');
                        while ($row = mysqli_fetch_assoc($klienci)) {
                            $rok = $row['Rok'];
                            $month = $row['Miesiąc'];
                            $suma = $row['suma'];

                            if($month == 'October') {$month = 'Październik';}
                            elseif ($month == 'November') {$month = 'Listopad';}
                            elseif ($month == 'December') {$month = 'Grudzień';}
                            elseif ($month == 'September') {$month = 'Wrzesień';}
                            elseif ($month == 'August') {$month = 'Sierpień';}
                            elseif ($month == 'July') {$month = 'Lipiec';}
                            elseif ($month == 'June') {$month = 'Czerwiec';}
                            elseif ($month == 'May') {$month = 'Maj';}
                            elseif ($month == 'April') {$month = 'Kwiecień';}
                            elseif ($month == 'March') {$month = 'Marzec';}
                            elseif ($month == 'February') {$month = 'Luty';}
                            elseif ($month == 'January') {$month = 'Styczeń';}
                    
                            else {$month = $month;}

                            echo "<tr>";
                            echo "<td>".$rok."</td>";
                            echo "<td>".$month."</td>";
                            echo "<td>".$suma."</td>";
                            echo "</tr>";
                        }
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
