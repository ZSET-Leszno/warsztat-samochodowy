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
        <a href="../Main/index.html"><img src="../images/logo.png" alt="logo"></a>
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
        <section class="form">
            <!--<form action="samochod.php" method="post">-->
            <form action="posrednia.php" method="post">
                Nazwa firmy: <input type="text" name="nazwa_firmy">
                NIP: <input type="text" name="nip">
                Imie: <input type="text" name="imie">
                Nazwisko: <input type="text" name="nazwisko">
                Telefon: <input type="text" name="telefon" required>
                E-mail: <input type="text" name="e-mail" required>
                Kod pocztowy: <input type="text" name="kod_pocztowy" required>
                Miejscowość: <input type="text" name="miejscowosc" required>
                Adres: <input type="text" placeholder="Ulica i numer" name="adres" required>
                <button type="submit" name="button"  >Zarezerwuj</button>
            </form>
        </section>
        <?php
          echo"Uzupełnij dane formularza według wytycznych.";
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