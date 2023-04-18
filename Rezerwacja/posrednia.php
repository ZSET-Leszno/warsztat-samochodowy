
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
            <p>STACJA KONTROLI POJAZDÓW</p>
            <p>WARSZTAT SAMOCHODOWY</p>
            <a href="https://www.google.pl/maps/dir//Auto+Zagórski,+Szamarzewskiego+42,+60-552+Poznań/@52.4113947,16.8946119,17z/data=!4m16!1m7!3m6!1s0x470444c7d574b2bf:0x67e94e3dc08f37fd!2sAuto+Zagórski!3b1!8m2!3d52.4113915!4d16.8948886!4m7!1m0!1m5!1m1!1s0x470444c7d574b2bf:0x67e94e3dc08f37fd!2m2!1d16.8948886!2d52.4113915" target="_blank"><p>WYZNACZ TRASĘ</p></a> 
    </header>
    <main>
      <div id="posrednia">
        <?php
          $data = $_POST["date"];
          $godzina = $_POST["czas"];
          $nazwa_firmy = $_POST["nazwa_firmy"];
          $NIP = $_POST["nip"];
          $imie = $_POST["imie"];
          $nazwisko = $_POST["nazwisko"];
          $telefon = $_POST["telefon"];
          $email = $_POST["e-mail"];
          $kod_pocztowy = $_POST["kod_pocztowy"];
          $miejscowosc = $_POST["miejscowosc"];
          $adres = $_POST["adres"];
        ?>
        <section style="height: 100px;">
            <form action="samochod.php" method="post">
                <input type="hidden" name="date" value="<?php echo $data;?>">
                <input type="hidden" name="czas" value="<?php echo $godzina;?>">
                <input type="hidden" name="nazwa_firmy" value="<?php echo $nazwa_firmy;?>">
                <input type="hidden" name="nip" value="<?php echo $NIP;?>">
                <input type="hidden" name="imie" value="<?php echo $imie;?>">
                <input type="hidden" name="nazwisko" value="<?php echo $nazwisko;?>">
                <input type="hidden" name="telefon" value="<?php  echo $telefon;?>" required>
                <input type="hidden" name="e-mail" value="<?php echo $email;?>" required>
                <input type="hidden" name="kod_pocztowy" value="<?php echo $kod_pocztowy;?>" required>
                <input type="hidden" name="miejscowosc" value="<?php echo $miejscowosc;?>" required>
                <input type="hidden" placeholder="Ulica i numer" name="adres" value="<?php echo $adres;?>" required>
                <button type="submit" name="button">Dodaj nowy</button>
            </form>
        </section>
        <?php
        if(!empty($nazwa_firmy) and !empty($NIP)){
          $kwerenda = "SELECT `samochod` FROM `klienci` WHERE nazwa_firmy='$nazwa_firmy' and NIP='$NIP' and telefon='$telefon' and email='$email' and kod_pocztowy='$kod_pocztowy' and miejscowosc='$miejscowosc' and adres = '$adres';";
          $polaczenie = mysqli_connect('localhost', 'root', '', 'warsztat');
          $klienci = mysqli_query($polaczenie, $kwerenda);
          $liczba_wierszy = mysqli_num_rows($klienci);
          if ($liczba_wierszy == 0)
          {
            ?><form action="samochod.php" method="post">
                <input type="hidden" name="date" value="<?php echo $data;?>">
                <input type="hidden" name="czas" value="<?php echo $godzina;?>">
                <input type="hidden" name="nazwa_firmy" value="<?php echo $nazwa_firmy;?>">
                <input type="hidden" name="nip" value="<?php echo $NIP;?>">
                <input type="hidden" name="imie" value="<?php echo $imie;?>">
                <input type="hidden" name="nazwisko" value="<?php echo $nazwisko;?>">
                <input type="hidden" name="telefon" value="<?php  echo $telefon;?>" required>
                <input type="hidden" name="e-mail" value="<?php echo $email;?>" required>
                <input type="hidden" name="kod_pocztowy" value="<?php echo $kod_pocztowy;?>" required>
                <input type="hidden" name="miejscowosc" value="<?php echo $miejscowosc;?>" required>
                <input type="hidden" name="adres" value="<?php echo $adres;?>" required>
            <button type='sumbit' name="Dalej" id="Dalej">Wybierz</button>
            <?php
            if(!isset($_POST['Dalej']))
            {?>
              <script>
                document.querySelector("#Dalej").click()
              </script>
            <?php
            }
          }
          elseif ($liczba_wierszy > 0)
          {
          echo "<p>Lub wybierz swój samochód z listy</p>";
          $array = [];
          while($r = mysqli_fetch_row($klienci))
          {
            $id_samochodu = $r[0];
            array_push($array, $id_samochodu);
          }
          foreach($array as $id_samochodu)
          {
            $kwerenda_samochody = "SELECT `id_samochodu`, marki_samochodów.nazwa, `model`, `rodzaj_silnika`, `numer_rejestracyjny`, `rocznik` FROM `samochody` join marki_samochodów on marki_samochodów.id_marki = samochody.marka where id_samochodu='$id_samochodu';";
            $samochody = mysqli_query($polaczenie, $kwerenda_samochody);
            while($r = mysqli_fetch_row($samochody)){
            ?>
            <section style="height: 100px; display:flex; flex-direction: row; align-items:center;">
            <form action="koncowa.php" method="post">
                <input type="hidden" name="date" value="<?php echo $data;?>">
                <input type="hidden" name="czas" value="<?php echo $godzina;?>">
                <input type="hidden" name="nazwa_firmy" value="<?php echo $nazwa_firmy;?>">
                <input type="hidden" name="nip" value="<?php echo $NIP;?>">
                <input type="hidden" name="imie" value="<?php echo $imie;?>">
                <input type="hidden" name="nazwisko" value="<?php echo $nazwisko;?>">
                <input type="hidden" name="telefon" value="<?php  echo $telefon;?>" required>
                <input type="hidden" name="e-mail" value="<?php echo $email;?>" required>
                <input type="hidden" name="kod_pocztowy" value="<?php echo $kod_pocztowy;?>" required>
                <input type="hidden" name="miejscowosc" value="<?php echo $miejscowosc;?>" required>
                <input type="hidden" name="adres" value="<?php echo $adres;?>" required>
            <?php
            echo '<input type="hidden" name="id_samochodu" value="'.$r[0].'" >';
            ?>
            <button type='sumbit' name="Wybierz">Wybierz</button>
            </form>
            <?php
            echo "<table style='border: 1px solid black;border-collapse: collapse;'>";
            echo "<tr>";
            echo "<td style='border: 1px solid black;'>".$r[1]."</td>";
            echo "<td style='border: 1px solid black;'>".$r[2]."</td>";
            echo "<td style='border: 1px solid black;'>".$r[3]."</td>";
            echo "<td style='border: 1px solid black;'>".$r[4]."</td>";
            echo "<td style='border: 1px solid black;'>".$r[5]."</td>";
            echo "</tr>";
            echo "</table>";?>
            </section><?php
            }
            }
            }
            else
            {
              echo "Błąd";
            }
        }
        else if(!empty($imie) and !empty($nazwisko)){
          #klient
          $kwerenda = "SELECT `samochod` FROM `klienci` WHERE imie='$imie' and nazwisko='$nazwisko' and telefon='$telefon' and email='$email' and kod_pocztowy='$kod_pocztowy' and miejscowosc='$miejscowosc' and adres = '$adres';";
          $polaczenie = mysqli_connect('localhost', 'root', '', 'warsztat');
          $klienci = mysqli_query($polaczenie, $kwerenda);
          $liczba_wierszy = mysqli_num_rows($klienci);
          if ($liczba_wierszy == 0)
          {
            ?><form action="samochod.php" method="post">
                <input type="hidden" name="date" value="<?php echo $data;?>">
                <input type="hidden" name="czas" value="<?php echo $godzina;?>">
                <input type="hidden" name="nazwa_firmy" value="<?php echo $nazwa_firmy;?>">
                <input type="hidden" name="nip" value="<?php echo $NIP;?>">
                <input type="hidden" name="imie" value="<?php echo $imie;?>">
                <input type="hidden" name="nazwisko" value="<?php echo $nazwisko;?>">
                <input type="hidden" name="telefon" value="<?php  echo $telefon;?>" required>
                <input type="hidden" name="e-mail" value="<?php echo $email;?>" required>
                <input type="hidden" name="kod_pocztowy" value="<?php echo $kod_pocztowy;?>" required>
                <input type="hidden" name="miejscowosc" value="<?php echo $miejscowosc;?>" required>
                <input type="hidden" name="adres" value="<?php echo $adres;?>" required>
            <button type='sumbit' name="Dalej" id="Dalej">Wybierz</button>
            <?php
            if(!isset($_POST['Dalej']))
            {?>
              <script>
                document.querySelector("#Dalej").click()
              </script>
            <?php
            }
          }
          elseif ($liczba_wierszy > 0)
          {
          echo "<p>Lub wybierz swój samochód z listy</p>";
          $array = [];
          while($r = mysqli_fetch_row($klienci))
          {
            $id_samochodu = $r[0];
            array_push($array, $id_samochodu);
          }
          foreach($array as $id_samochodu)
          {
            $kwerenda_samochody = "SELECT `id_samochodu`, marki_samochodów.nazwa, `model`, `rodzaj_silnika`, `numer_rejestracyjny`, `rocznik` FROM `samochody` join marki_samochodów on marki_samochodów.id_marki = samochody.marka where id_samochodu='$id_samochodu';";
            $samochody = mysqli_query($polaczenie, $kwerenda_samochody);
            while($r = mysqli_fetch_row($samochody)){
            ?>
            <section style="height: 100px; display:flex; flex-direction: row; align-items:center;">
            <form action="koncowa.php" method="post">
                <input type="hidden" name="date" value="<?php echo $data;?>">
                <input type="hidden" name="czas" value="<?php echo $godzina;?>">
                <input type="hidden" name="nazwa_firmy" value="<?php echo $nazwa_firmy;?>">
                <input type="hidden" name="nip" value="<?php echo $NIP;?>">
                <input type="hidden" name="imie" value="<?php echo $imie;?>">
                <input type="hidden" name="nazwisko" value="<?php echo $nazwisko;?>">
                <input type="hidden" name="telefon" value="<?php  echo $telefon;?>" required>
                <input type="hidden" name="e-mail" value="<?php echo $email;?>" required>
                <input type="hidden" name="kod_pocztowy" value="<?php echo $kod_pocztowy;?>" required>
                <input type="hidden" name="miejscowosc" value="<?php echo $miejscowosc;?>" required>
                <input type="hidden" name="adres" value="<?php echo $adres;?>" required>
            <?php
            echo '<input type="hidden" name="id_samochodu" value="'.$r[0].'" >';
            ?>
            <button type='sumbit'  name="Wybierz">Wybierz</button>
            </form>
            <?php
            echo "<table style='border: 1px solid black;border-collapse: collapse;'>";
            echo "<tr>";
            echo "<td style='border: 1px solid black;'>".$r[1]."</td>";
            echo "<td style='border: 1px solid black;'>".$r[2]."</td>";
            echo "<td style='border: 1px solid black;'>".$r[3]."</td>";
            echo "<td style='border: 1px solid black;'>".$r[4]."</td>";
            echo "<td style='border: 1px solid black;'>".$r[5]."</td>";
            echo "</tr>";
            echo "</table>";?>
            </section><?php
            }
            }
            }
            else
            {
              echo "Błąd";
            }
        }
        else
        {
          echo "Błąd w wypełnianiu formularza";
        }
        ?>
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