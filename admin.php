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
        <a href="index.html"><img src="logo.png" alt="logo"></a>
        <!--MENU-->
        <div id="menu">
            <span>STACJA KONTROLI POJAZDÓW</span>
            <span>WARSZTAT SAMOCHODOWY</span>
            <a href="https://www.google.pl/maps/dir//Auto+Zagórski,+Szamarzewskiego+42,+60-552+Poznań/@52.4113947,16.8946119,17z/data=!4m16!1m7!3m6!1s0x470444c7d574b2bf:0x67e94e3dc08f37fd!2sAuto+Zagórski!3b1!8m2!3d52.4113915!4d16.8948886!4m7!1m0!1m5!1m1!1s0x470444c7d574b2bf:0x67e94e3dc08f37fd!2m2!1d16.8948886!2d52.4113915"><span>WYZNACZ TRASĘ</span></a> 
        </div>
    </header>
    <main>
       <section class="baza">
        <h3>Tabela - klienci</h3>
        <table>
        <?php  
                $polaczenie = mysqli_connect('localhost', 'root', '', 'warsztat');
                $klienci = mysqli_query($polaczenie, "SELECT id_klienta, nazwa_firmy, NIP, imie, nazwisko, telefon, email, kod_pocztowy, miejscowosc, adres, samochod FROM klienci;");
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
                    echo "<td>".$r[8]."</td>";
                    echo "<td>".$r[9]."</td>";
                    echo "<td>".$r[10]."</td>";
                    echo "</tr>";
                }
                mysqli_close($polaczenie);
            ?>
        </table>
       </section>
       <section class="baza">
        <h3>Tabela - marki samochodów</h3>
        <table>
        <?php  
                $polaczenie = mysqli_connect('localhost', 'root', '', 'warsztat');
                $klienci = mysqli_query($polaczenie, "SELECT id_marki, nazwa FROM marki_samochodów;");
                while($r = mysqli_fetch_row($klienci)){
                    echo "<tr>";
                    echo "<td>".$r[0]."</td>";
                    echo "<td>".$r[1]."</td>";
                    echo "</tr>";
                }
                mysqli_close($polaczenie);
            ?>
        </table>
       </section>
       <section class="baza">
        <h3>Tabela - samochody</h3>
        <table>
        <?php  
                $polaczenie = mysqli_connect('localhost', 'root', '', 'warsztat');
                $klienci = mysqli_query($polaczenie, "SELECT id_samochodu, marka, model,rodzaj_silnika, numer_rejestracyjny, nr_VIN, rocznik, pojemnosc FROM samochody;");
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
       <section class="baza">
        <h3>Tabela - zgloszenia</h3>
        <table>
        <?php  
                $polaczenie = mysqli_connect('localhost', 'root', '', 'warsztat');
                $klienci = mysqli_query($polaczenie, "SELECT id_uslugi, data_przyjecia, godzina_przyjecia, data_wydania, usluga, koszt, samochod, wlasciciel FROM zgloszenia;");
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