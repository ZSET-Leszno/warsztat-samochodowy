<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warsztat - rezerwacja</title>
    <link rel="stylesheet" href="rezerwacja.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
</head>
<body>
    <header>
        <a href="index.html"><img src="../images/logo.png" alt="logo"></a>
        <!--MENU-->
        <div id="menu">
            <span>STACJA KONTROLI POJAZDÓW</span>
            <span>WARSZTAT SAMOCHODOWY</span>
            <a href="https://www.google.pl/maps/dir//Auto+Zagórski,+Szamarzewskiego+42,+60-552+Poznań/@52.4113947,16.8946119,17z/data=!4m16!1m7!3m6!1s0x470444c7d574b2bf:0x67e94e3dc08f37fd!2sAuto+Zagórski!3b1!8m2!3d52.4113915!4d16.8948886!4m7!1m0!1m5!1m1!1s0x470444c7d574b2bf:0x67e94e3dc08f37fd!2m2!1d16.8948886!2d52.4113915"><span>WYZNACZ TRASĘ</span></a> 
        </div>
    </header>
    <main>
        <?php
        $polaczenie = mysqli_connect('localhost', 'root', '', 'warsztat');
        $data = $_POST["date"];
        $godzina = $_POST["time"];
        $nazwa_firmy = $_POST["nazwa_firmy"];
        $NIP = $_POST["nip"];
        $imie = $_POST["imie"];
        $nazwisko = $_POST["nazwisko"];
        $telefon = $_POST["telefon"];
        $email = $_POST["e-mail"];
        $kod_pocztowy = $_POST["kod_pocztowy"];
        $miejscowosc = $_POST["miejscowosc"];
        $adres = $_POST["adres"];
        if (isset($_POST['Wybierz'])) {
        $id_samochodu = $_POST["id_samochodu"];
        }
        if (isset($_POST['button2'])) {
            $marka = $_POST["marka"];
            $model = $_POST["model"];
            $rodzaj_silnika = $_POST["rodzaj_silnika"];
            $numer_rejestracyjny = $_POST["numer_rejestracyjny"];
            $rocznik = $_POST["rocznik"];
        }
        if(!empty($nazwa_firmy) and !empty($NIP) and !empty($marka) and !empty($model) and !empty($rodzaj_silnika) and !empty($numer_rejestracyjny) and !empty($rocznik)){
            $kwerenda_dodaj_samochod = "INSERT INTO `samochody`(`marka`, `model`, `rodzaj_silnika`, `numer_rejestracyjny`, `rocznik`) VALUES ('$marka','$model','$rodzaj_silnika','$numer_rejestracyjny','$rocznik')";
            $dodaj_samochod = mysqli_query($polaczenie, $kwerenda_dodaj_samochod);
            $kwerenda_szukanie_id_samochodu = "SELECT `id_samochodu` FROM `samochody` WHERE `numer_rejestracyjny`='$numer_rejestracyjny';";
            $szukaj_id_samochodu = mysqli_query($polaczenie, $kwerenda_szukanie_id_samochodu);
            $r = mysqli_fetch_row($szukaj_id_samochodu);
            $id_samochodu = $r[0];
            $kwerenda_dodawnie_klienta = "INSERT INTO `klienci`(`nazwa_firmy`, `NIP`, `telefon`, `email`, `kod_pocztowy`, `miejscowosc`, `adres`, `samochod`) VALUES ('$nazwa_firmy','$NIP','$telefon','$email','$kod_pocztowy','$miejscowosc','$adres','$id_samochodu');";
            $dodaj_klienta = mysqli_query($polaczenie, $kwerenda_dodawnie_klienta);
            echo "Dodano twój samochód do bazy oraz umówiono wizytę";
        }
        else if(!empty($imie) and !empty($nazwisko) and !empty($marka) and !empty($model) and !empty($rodzaj_silnika) and !empty($numer_rejestracyjny) and !empty($rocznik)){
            $kwerenda_dodaj_samochod = "INSERT INTO `samochody`(`marka`, `model`, `rodzaj_silnika`, `numer_rejestracyjny`, `rocznik`) VALUES ('$marka','$model','$rodzaj_silnika','$numer_rejestracyjny','$rocznik')";
            $dodaj_samochod = mysqli_query($polaczenie, $kwerenda_dodaj_samochod);
            $kwerenda_szukanie_id_samochodu = "SELECT `id_samochodu` FROM `samochody` WHERE `numer_rejestracyjny`='$numer_rejestracyjny';";
            $szukaj_id_samochodu = mysqli_query($polaczenie, $kwerenda_szukanie_id_samochodu);
            $r = mysqli_fetch_row($szukaj_id_samochodu);
            $id_samochodu = $r[0];
            $kwerenda_dodawnie_klienta = "INSERT INTO `klienci`(`imie`, `nazwisko`, `telefon`, `email`, `kod_pocztowy`, `miejscowosc`, `adres`, `samochod`) VALUES ('$imie','$nazwisko','$telefon','$email','$kod_pocztowy','$miejscowosc','$adres','$id_samochodu');";
            $dodaj_klienta = mysqli_query($polaczenie, $kwerenda_dodawnie_klienta);
            echo "Dodano twój samochód do bazy oraz umówiono wizytę";
        }
        else
        {
            echo "Błąd";
        }
        mysqli_close($polaczenie);
        ?>
        <p>Twoja wizyta została zarezerwowana<p>
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