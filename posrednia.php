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
        <section class="form" style="height: 100px;">
            <form action="samochod.php" method="post">
                <input type="hidden" name="nazwa_firmy" value="<?php echo $nazwa_firmy;?>">
                <input type="hidden" name="nip" value="<?php echo $NIP;?>">
                <input type="hidden" name="imie" value="<?php echo $imie;?>">
                <input type="hidden" name="nazwisko" value="<?php echo $nazwisko;?>">
                <input type="hidden" name="telefon" value="<?php  echo $telefon;?>" required>
                <input type="hidden" name="e-mail" value="<?php echo $email;?>" required>
                <input type="hidden" name="kod_pocztowy" value="<?php echo $kod_pocztowy;?>" required>
                <input type="hidden" name="miejscowosc" value="<?php echo $miejscowosc;?>" required>
                <input type="hidden" placeholder="Ulica i numer" name="adres" value="<?php echo $adres;?>" required>
                <button type="submit" name="button1">Dodaj nowy</button>
            </form>
        </section>
        <p>Lub wybierz swój samochód z listy</p>
        <?php
        if(!empty($nazwa_firmy) and !empty($NIP)){
          $kwerenda = "SELECT `samochod` FROM `klienci` WHERE nazwa_firmy='$nazwa_firmy' and NIP='$NIP' and telefon='$telefon' and email='$email' and kod_pocztowy='$kod_pocztowy' and miejscowosc='$miejscowosc' and adres = '$adres';";
          $polaczenie = mysqli_connect('localhost', 'root', '', 'warsztat');
          $klienci = mysqli_query($polaczenie, $kwerenda);
          $array = [];
          while($r = mysqli_fetch_row($klienci))
          {
            $id_samochodu = $r[0];
            array_push($array, $id_samochodu);
          }
          foreach($array as $id_samochodu)
          {
            $kwerenda_samochody = "SELECT `id_samochodu`, `marka`, `model`, `rodzaj_silnika`, `numer_rejestracyjny`, `rocznik` FROM `samochody` where id_samochodu='$id_samochodu';";
            $samochody = mysqli_query($polaczenie, $kwerenda_samochody);
            while($r = mysqli_fetch_row($samochody)){
            echo "<tr>";
            echo "<td>".$r[0]."</td>";
            echo "<td>".$r[1]."</td>";
            echo "<td>".$r[2]."</td>";
            echo "<td>".$r[3]."</td>";
            echo "<td>".$r[4]."</td>";
            echo "<td>".$r[5]."</td>";
            echo "</tr>";
            }
          }
        }
        else if(!empty($imie) and !empty($nazwisko)){
          echo "Dodano rezerwacje2";
          #klient
          $kwerenda = "SELECT `samochod` FROM `klienci` WHERE imie='$imie' and nazwisko='$nazwisko' and telefon='$telefon' and email='$email' and kod_pocztowy='$kod_pocztowy' and miejscowosc='$miejscowosc' and adres = '$adres';";
          $polaczenie = mysqli_connect('localhost', 'root', '', 'warsztat');
          $klienci = mysqli_query($polaczenie, $kwerenda);
          $array = [];
          while($r = mysqli_fetch_row($klienci))
          {
            $id_samochodu = $r[0];
            array_push($array, $id_samochodu);
          }
          foreach($array as $id_samochodu)
          {
            $kwerenda_samochody = "SELECT `id_samochodu`, `marka`, `model`, `rodzaj_silnika`, `numer_rejestracyjny`, `rocznik` FROM `samochody` where id_samochodu='$id_samochodu';";
            $samochody = mysqli_query($polaczenie, $kwerenda_samochody);
            while($r = mysqli_fetch_row($samochody)){
            echo "<tr>";
            echo "<td>".$r[0]."</td>";
            echo "<td>".$r[1]."</td>";
            echo "<td>".$r[2]."</td>";
            echo "<td>".$r[3]."</td>";
            echo "<td>".$r[4]."</td>";
            echo "<td>".$r[5]."</td>";
            echo "</tr>";
            }
          }
        }
        else
        {
          echo "Błąd w wypełnianiu formularza";
        }
        //if ($_SERVER["REQUEST_METHOD"] == "POST") {
        /*if (isset($_POST['button1'])){
        $nazwa_firmy = $_POST["nazwa_firmy"];
        $NIP = $_POST["nip"];
        $imie = $_POST["imie"];
        $nazwisko = $_POST["nazwisko"];
        $telefon = $_POST["telefon"];
        $email = $_POST["e-mail"];
        $kod_pocztowy = $_POST["kod_pocztowy"];
        $miejscowosc = $_POST["miejscowosc"];
        $adres = $_POST["adres"];
        }*/
        /*if(!empty($nazwa_firmy) and !empty($NIP)){
          //header('Location: samochod.php');
          //echo "Dodano rezerwacje";
          #firma
          $kwerenda = "SELECT `id_klienta`, `nazwa_firmy`, `NIP`, `telefon`, `email`, `kod_pocztowy`, `miejscowosc`, `adres`, `samochod` FROM `klienci` WHERE nazwa_firmy='$nazwa_firmy' and NIP='$NIP' and telefon='$telefon' and email='$email' and kod_pocztowy='$kod_pocztowy' and miejscowosc='$miejscowosc' and adres = '$adres';";
          $polaczenie = mysqli_connect('localhost', 'root', '', 'warsztat');
          $klienci = mysqli_query($polaczenie, $kwerenda);
          $liczba_wierszy = mysqli_num_rows($klienci);
          echo "$liczba_wierszy";
          if ($liczba_wierszy == 0)
          {
            echo "Dodaj swój samochód";
            //if (isset($_POST['button'])){
              echo '<section class="form"><form action="" method="post">
              Marka: <br><br>';//<input type="text" name="marka">
              $kwerenda_marki = "SELECT `id_marki`, `nazwa` FROM `marki_samochodów`";
              $marki = mysqli_query($polaczenie, $kwerenda_marki);
              echo'<select name = "marka">';
              while($r = mysqli_fetch_row($marki)){
                echo "<option value='".$r[0]."'>".$r[1]."</option>";
                }
              echo"</select><br>";
              echo 'Model: <input type="text" name="model">
              Rodzaj silnika: <br><br><select name="rodzaj_silnika"><option>Benzyna</option><option>Diesel</option><option>Hybryda</option><option>Elektryczny</option></select><br>
              Numer rejestracyjny: <input type="text" name="numer_rejestracyjny">
              Rocznik: <input type="text" name="rocznik" required>
              <button type="submit" name="button2"  >Dodaj</button>
              </form></section>';
              //}
              if (isset($_POST['button2'])) {
                $marka = $_POST["marka"];
                $model = $_POST["model"];
                $rodzaj_silnika = $_POST["rodzaj_silnika"];
                $numer_rejestracyjny = $_POST["numer_rejestracyjny"];
                $rocznik = $_POST["rocznik"];
                }
              if(!empty($marka) and !empty($model) and !empty($rodzaj_silnika) and !empty($numer_rejestracyjny) and !empty($rocznik)){
                $kwerenda_dodaj_samochod = "INSERT INTO `samochody`(`marka`, `model`, `rodzaj_silnika`, `numer_rejestracyjny`, `rocznik`, `pojemnosc`) VALUES ('$marka','$model','$rodzaj_silnika','$numer_rejestracyjny','$rocznik')";
                $dodaj_samochod = mysqli_query($polaczenie, $kwerenda_dodaj_samochod);
                echo "Dodano twój samochód do bazy oraz umówiono wizytę";
                }
              
              
          }
          else if($liczba_wierszy > 0)
          {
            echo "Wybierz swój samchód lub dodaj inny.";
            $array = [];
            while($r = mysqli_fetch_row($klienci))
            {
              $id_samochodu = $r[8];
              array_push($array, $id_samochodu);
            }
            foreach($array as $id_samochodu)
            {
              $kwerenda_samochody = "SELECT `id_samochodu`, `marka`, `model`, `rodzaj_silnika`, `numer_rejestracyjny`, `rocznik` FROM `samochody` where id_samochodu='$id_samochodu';";
              $samochody = mysqli_query($polaczenie, $kwerenda_samochody);
              while($r = mysqli_fetch_row($samochody)){
              echo "<tr>";
              echo "<td>".$r[0]."</td>";
              echo "<td>".$r[1]."</td>";
              echo "<td>".$r[2]."</td>";
              echo "<td>".$r[3]."</td>";
              echo "<td>".$r[4]."</td>";
              echo "<td>".$r[5]."</td>";
              echo "</tr>";
              }
            }
          }
          
          mysqli_close($polaczenie);
        }else if(!empty($imie) and !empty($nazwisko)){
          echo "Dodano rezerwacje2";
          #klient
          $kwerenda = "SELECT `id_klienta`, `imie`, `nazwisko`, `telefon`, `email`, `kod_pocztowy`, `miejscowosc`, `adres`, `samochod` FROM `klienci` WHERE imie='$imie' and nazwisko='$nazwisko' and telefon='$telefon' and email='$email' and kod_pocztowy='$kod_pocztowy' and miejscowosc='$miejscowosc' and adres = '$adres';";
          $polaczenie = mysqli_connect('localhost', 'root', '', 'warsztat');
          $klienci = mysqli_query($polaczenie, $kwerenda);
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
            echo "</tr>";
          }
        }*/
        //}
        
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