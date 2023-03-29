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
            <form action="posrednia.php" method="post" id='form'>
                Nazwa firmy: <input type="text" name="nazwa_firmy" id="nazwa_firmy" placeholder="Wpisz nazwę firmy" required>
                NIP: <input type="text" pattern="[0-9]{10}" maxlength="10" placeholder="Wpisz numer NIP" name="nip" required>
                Imie: <input type="text" name="imie" placeholder="Wpisz swoje imię" required>
                Nazwisko: <input type="text" name="nazwisko"placeholder="Wpisz swoje nazwisko" required>
                Telefon: <input type="tel" pattern="[0-9]{9}" placeholder="Wpisz numer telefonu" name="telefon" required>
                E-mail: <input type="email" name="e-mail"  placeholder="Wpisz swój adres e-mail" required>
                Kod pocztowy: <input type="text" pattern="[0-9]{2}-[0-9]{3}" placeholder="Wpisz kod pocztowy" name="kod_pocztowy" required>
                Miejscowość: <input type="text" name="miejscowosc" placeholder="Wpisz miejscowość" required>
                Adres: <input type="text" pattern="[a-zA-ZęóąśłżźćńĘÓĄŚŁŻŹĆŃ]+\s[a-zA-Z0-9ęóąśłżźćńĘÓĄŚŁŻŹĆŃ]+\s?[a-zA-Z0-9ęóąśłżźćńĘÓĄŚŁŻŹĆŃ]*" required placeholder="Wpisz nazwę ulicy i numer domu" name="adres">
                <button type="submit" name="button1">Zarezerwuj</button>
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
