<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warsztat - administrator</title>
    <link rel="stylesheet" href="admin.css">
    <script>
        function Tabele(){
            var element = document.getElementById("tabele");
        if (element.style.display === "block") {
            element.style.display = "none";
        } else {
            element.style.display = "block";
        }
        }

        function Raporty(){
            var element = document.getElementById("raporty");
        if (element.style.display === "block") {
            element.style.display = "none";
        } else {
            element.style.display = "block";
        }
        }

        function Dzialania(){
            var element = document.getElementById("dzialania");
        if (element.style.display === "block") {
            element.style.display = "none";
        } else {
            element.style.display = "block";
        }
        }

        /*function cheekDisplay(){
            var element1 = document.getElementById("tabele");
            var element2 = document.getElementById("raporty");
            var element3 = document.getElementById("dzialania");
            if (element1.style.display === "block"){
                element2.style.display = "none";
                element3.style.display = "none";
            }
            if(element2.style.display === "block")
            {
                element1.style.display = "none";
                element3.style.display = "none";
            }
            if(element3.style.display === "block")
            {
                element1.style.display = "none";
                element2.style.display = "none";
            }
        }*/
    </script>
</head>
<body>
    <header>
        <a href="index.html"><img src="logo.png" alt="logo"></a>
        <!--MENU-->
        <div id="menu">
            <a href="/"><span>PANEL ADMINISTRATORA</span></a>
        </div>
    </header>
    <main id="content">
        <div id="przyciski-kontener">
            <button class="navi" onclick="Tabele()">
                Tabele
            </button>
            <button class="navi" onclick="Raporty()">
                Raporty
            </button>
            <button class="navi" onclick="Dzialania()">
                Działania
            </button>
        </div>
    <div id="tabele" class="div">
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
    </div>

        <div id="raporty" class="div">
            <button class="margin">Podgląd klientów</button>
            <!--<div id="klienci">
                <button>Osoby prywatne</button>
                <button>Firmy</button>
            </div>-->
            <button class="margin">TOP Raporty</button>
    </div>

        <div id="dzialania" class="div">
            TEST 3
    </div>
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
