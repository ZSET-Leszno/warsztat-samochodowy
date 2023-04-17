<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warsztat - rezerwacja</title>
    <link rel="stylesheet" href="rezerwacja.css">
    <!--<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
	<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>-->
</head>
<body>
    <header>
            <a href="../Main/index.html"><img src="../images/logo.png" alt="logo"></a>
            <p>STACJA KONTROLI POJAZDÓW</p>
            <p>WARSZTAT SAMOCHODOWY</p>
            <a href="https://www.google.pl/maps/dir//Auto+Zagórski,+Szamarzewskiego+42,+60-552+Poznań/@52.4113947,16.8946119,17z/data=!4m16!1m7!3m6!1s0x470444c7d574b2bf:0x67e94e3dc08f37fd!2sAuto+Zagórski!3b1!8m2!3d52.4113915!4d16.8948886!4m7!1m0!1m5!1m1!1s0x470444c7d574b2bf:0x67e94e3dc08f37fd!2m2!1d16.8948886!2d52.4113915" target="_blank"><p>WYZNACZ TRASĘ</p></a> 
            <script>
              function validateForm() {
                var companyName = document.forms["myForm"]["nazwa_firmy"].value;
                var NIP = document.forms["myForm"]["nip"].value;
                var firstName = document.forms["myForm"]["imie"].value;
                var lastName = document.forms["myForm"]["nazwisko"].value;
                
                if ((companyName && NIP) && (!firstName && !lastName)) {
                  return true;
                } else if ((!companyName && !NIP) && (firstName && lastName)) {
                  return true;
                } else {
                  alert("Proszę wypełnić pola zgodnie z wymaganiami.");
                  return false;
                }
              }
            </script>
    </header>
    <main  style="height: 900px;">
        <p style="text-align: center; height:50px">W przypadku firmy uzupełnij pola <b>Nazwę firmy</b> oraz <b>NIP</b>, a w przypadku osoby prywatnej pola <b>Imię</b> i <b>Nazwisko</b> - reszta pól jest wspólna.</p>
        <section class="form" id="calendar">
            <form onsubmit="return validateForm()" action="posrednia.php" method="post" id='form' name="myForm">
            <label for="date-input">Wybierz datę:</label>
            <input type="date" id="date-input" name="date" required>
            <label for="czas">Wybierz godzinę:</label>
            <select id="czas" name="czas" required>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
            </select>
            <br>
                Nazwa firmy: <input type="text" name="nazwa_firmy" id="nazwa_firmy" placeholder="Wpisz nazwę firmy">
                NIP: <input type="text" pattern="[0-9]{9 or 10}" maxlength="10" placeholder="Wpisz numer NIP" name="nip">
                Imie: <input type="text" name="imie" placeholder="Wpisz swoje imię">
                Nazwisko: <input type="text" name="nazwisko"placeholder="Wpisz swoje nazwisko">
                Telefon: <input type="tel" pattern="[0-9]{9}" placeholder="Wpisz numer telefonu" name="telefon" required>
                E-mail: <input type="email" name="e-mail"  placeholder="Wpisz swój adres e-mail" required>
                Kod pocztowy: <input type="text" pattern="[0-9]{2}-[0-9]{3}" placeholder="Wpisz kod pocztowy" name="kod_pocztowy" required>
                Miejscowość: <input type="text" name="miejscowosc" placeholder="Wpisz miejscowość" required>
                Adres: <input type="text" pattern="[a-zA-ZęóąśłżźćńĘÓĄŚŁŻŹĆŃ]+\s[a-zA-Z0-9ęóąśłżźćńĘÓĄŚŁŻŹĆŃ]+\s?[a-zA-Z0-9ęóąśłżźćńĘÓĄŚŁŻŹĆŃ]*" required placeholder="Wpisz nazwę ulicy i numer domu" name="adres">
                <button type="submit" name="button1">Zarezerwuj</button>
            </form>
        </section>
        <script>
          const dateInput = document.querySelector('#date-input');
          const maxDate = new Date();
          const minDate = new Date();
          maxDate.setDate(maxDate.getDate() + 21);
          minDate.setDate(minDate.getDate());
          dateInput.setAttribute('max', maxDate.toISOString().split('T')[0]);
          dateInput.setAttribute('min', minDate.toISOString().split('T')[0]);
        </script>
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