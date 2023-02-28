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
        <!--<section id="calendar">
            <div class="container">
                <div class="calendar">
                  <div class="month">
                    <i class="fas fa-angle-left prev"></i>
                    <div class="date">
                      <h1></h1>
                      <p></p>
                    </div>
                    <i class="fas fa-angle-right next"></i>
                  </div>
                  <div class="weekdays">
                    <div>Sun</div>
                    <div>Mon</div>
                    <div>Tue</div>
                    <div>Wed</div>
                    <div>Thu</div>
                    <div>Fri</div>
                    <div>Sat</div>
                  </div>
                  <div class="days"></div>
                </div>
              </div>
          
              <script src="script.js" defer></script>
          
        </section>-->
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
        if(empty($nazwa_firmy)){
          echo "Dodano rezerwacje";
          #klient
          $kwerenda;
          $polaczenie = mysqli_connect('localhost', 'root', '', 'warsztat');
          mysqli_query($polaczenie, $kwerenda);
          mysqli_close($polaczenie);
        }else{
          echo "Dodano rezerwacje";
          #firma
          $kwerenda;
          $polaczenie = mysqli_connect('localhost', 'root', '', 'warsztat');
          mysqli_query($polaczenie, $kwerenda);
          mysqli_close($polaczenie);
        }
        ?>
        <section class="form">
            <form action="rezerwacja.php" method="$_POST">
                Nazwa firmy: <input type="text" name="nazwa_firmy">
                NIP: <input type="text" name="nip">
                Imie: <input type="text" name="imie">
                Nazwisko: <input type="text" name="nazwisko">
                Telefon: <input type="text" name="telefon">
                E-mail: <input type="text" name="e-mail">
                Kod pocztowy: <input type="text" name="kod_pocztowy">
                Miejscowość: <input type="text" name="miejscowosc">
                Adres: <input type="text" placeholder="Ulica i numer" name="adres">
                <button type="submit">Zarezerwuj</button>
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