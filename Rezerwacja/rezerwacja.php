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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
	<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</head>
<body>
  <header>
            <a href="../Main/index.html"><img src="../images/logo.png" alt="logo"></a>
            <p>STACJA KONTROLI POJAZDÓW</p>
            <p>WARSZTAT SAMOCHODOWY</p>
            <a href="https://www.google.pl/maps/dir//Auto+Zagórski,+Szamarzewskiego+42,+60-552+Poznań/@52.4113947,16.8946119,17z/data=!4m16!1m7!3m6!1s0x470444c7d574b2bf:0x67e94e3dc08f37fd!2sAuto+Zagórski!3b1!8m2!3d52.4113915!4d16.8948886!4m7!1m0!1m5!1m1!1s0x470444c7d574b2bf:0x67e94e3dc08f37fd!2m2!1d16.8948886!2d52.4113915" target="_blank"><p>WYZNACZ TRASĘ</p></a> 
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
        <section id="calendar">
          <form>
            <label for="date">Wybierz datę:</label>
            <input type="text" id="date" name="date">
	        </form>
        </section>
        <section class="form">
            <!--<form action="samochod.php" method="post">-->
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
        <p class="white">STACJA KONTROLI POJAZDÓW
</p>
        <p class="white">WARSZTAT SAMOCHODOWY</p>
        <br>
        <p>© 2023 AUTO ZAGÓRSKI | Wykorzystujemy pliki cookies. </p>
        <br>
        <p>Warsztat Samochodowy Tomasz Zagórski, ul. Augustyna Szamarzewskiego 42, 60-552 Poznań, NIP: 7772507820, REGON: 634640527</p>
    </footer>
    <script>
		flatpickr("#date", {
			enableTime: false,
			dateFormat: "Y-m-d",
		});
    </script>
</body>
</html>