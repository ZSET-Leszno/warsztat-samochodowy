<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warsztat - samochod</title>
    <link rel="stylesheet" href="rezerwacja.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
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
        <?php
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
        if(!empty($nazwa_firmy) and !empty($NIP)){
          #firma
          $kwerenda = "SELECT `id_klienta`, `nazwa_firmy`, `NIP`, `telefon`, `email`, `kod_pocztowy`, `miejscowosc`, `adres`, `samochod` FROM `klienci` WHERE nazwa_firmy='$nazwa_firmy' and NIP='$NIP' and telefon='$telefon' and email='$email' and kod_pocztowy='$kod_pocztowy' and miejscowosc='$miejscowosc' and adres = '$adres';";
          $polaczenie = mysqli_connect('localhost', 'root', '', 'warsztat');
          $klienci = mysqli_query($polaczenie, $kwerenda);
          echo "Dodaj swój samochód";
              echo '<section class="form"><form action="koncowa.php" method="post">
              Marka: <br><br>';
              $kwerenda_marki = "SELECT `id_marki`, `nazwa` FROM `marki_samochodów`";
              $marki = mysqli_query($polaczenie, $kwerenda_marki);
              echo'<select name = "marka">';
              while($r = mysqli_fetch_row($marki)){
                echo "<option value='".$r[0]."'>".$r[1]."</option>";
                }
              echo"</select><br>";
              ?>Model: <input type="text" name="model">
              Rodzaj silnika: <br><br><select name="rodzaj_silnika"><option>Benzyna</option><option>Diesel</option><option>Hybryda</option><option>Elektryczny</option></select><br>
              Numer rejestracyjny: <input type="text" name="numer_rejestracyjny">
              Rocznik: <input type="text" name="rocznik" required>
                <input type="hidden" name="date" value="<?php echo $data;?>">
                <input type="hidden" name="time" value="<?php echo $godzina;?>">
                <input type="hidden" name="nazwa_firmy" value="<?php echo $nazwa_firmy;?>">
                <input type="hidden" name="nip" value="<?php echo $NIP;?>">
                <input type="hidden" name="imie" value="<?php echo $imie;?>">
                <input type="hidden" name="nazwisko" value="<?php echo $nazwisko;?>">
                <input type="hidden" name="telefon" value="<?php  echo $telefon;?>" required>
                <input type="hidden" name="e-mail" value="<?php echo $email;?>" required>
                <input type="hidden" name="kod_pocztowy" value="<?php echo $kod_pocztowy;?>" required>
                <input type="hidden" name="miejscowosc" value="<?php echo $miejscowosc;?>" required>
                <input type="hidden" placeholder="Ulica i numer" name="adres" value="<?php echo $adres;?>" required>
              <button type="submit" name="button2">Dodaj</button><?php
              echo "</form></section>";
          }
        else if(!empty($imie) and !empty($nazwisko)){
          #klient
          $kwerenda = "SELECT `id_klienta`, `imie`, `nazwisko`, `telefon`, `email`, `kod_pocztowy`, `miejscowosc`, `adres`, `samochod` FROM `klienci` WHERE imie='$imie' and nazwisko='$nazwisko' and telefon='$telefon' and email='$email' and kod_pocztowy='$kod_pocztowy' and miejscowosc='$miejscowosc' and adres = '$adres';";
          $polaczenie = mysqli_connect('localhost', 'root', '', 'warsztat');
          $klienci = mysqli_query($polaczenie, $kwerenda);
          echo "Dodaj swój samochód";
              echo '<section class="form"><form action="koncowa.php" method="post">
              Marka: <br><br>';
              $kwerenda_marki = "SELECT `id_marki`, `nazwa` FROM `marki_samochodów`";
              $marki = mysqli_query($polaczenie, $kwerenda_marki);
              echo'<select name = "marka">';
              while($r = mysqli_fetch_row($marki)){
                echo "<option value='".$r[0]."'>".$r[1]."</option>";
                }
              echo"</select><br>";
              ?>Model: <input type="text" name="model">
              Rodzaj silnika: <br><br><select name="rodzaj_silnika"><option>Benzyna</option><option>Diesel</option><option>Hybryda</option><option>Elektryczny</option></select><br>
              Numer rejestracyjny: <input type="text" name="numer_rejestracyjny">
              Rocznik: <input type="text" name="rocznik" required>
                <input type="hidden" name="date" value="<?php echo $data;?>">
                <input type="hidden" name="time" value="<?php echo $godzina;?>">
                <input type="hidden" name="nazwa_firmy" value="<?php echo $nazwa_firmy;?>">
                <input type="hidden" name="nip" value="<?php echo $NIP;?>">
                <input type="hidden" name="imie" value="<?php echo $imie;?>">
                <input type="hidden" name="nazwisko" value="<?php echo $nazwisko;?>">
                <input type="hidden" name="telefon" value="<?php  echo $telefon;?>" required>
                <input type="hidden" name="e-mail" value="<?php echo $email;?>" required>
                <input type="hidden" name="kod_pocztowy" value="<?php echo $kod_pocztowy;?>" required>
                <input type="hidden" name="miejscowosc" value="<?php echo $miejscowosc;?>" required>
                <input type="hidden" placeholder="Ulica i numer" name="adres" value="<?php echo $adres;?>" required>
              <button type="submit" name="button2">Dodaj</button><?php
              echo "</form></section>";
          }
          else{
          echo"Uzupełnij dane formularza według wytycznych.";
        }
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