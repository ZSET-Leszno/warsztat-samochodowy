<?php
// Połącz z bazą danych i pobierz wolne godziny
$date = $_GET["date"];
$kwerenda = "SELECT godzina_przyjecia FROM `zgloszenia` WHERE data_przyjecia = '$date';";
$polaczenie = mysqli_connect('localhost', 'root', '', 'warsztat');
$godziny_k = mysqli_query($polaczenie, $kwerenda);
/*$dsn = "mysql:host=localhost;dbname=warsztat;charset=utf8mb4";
$username = "root";
$password = "";
$options = [
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES => false,
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci"
];*/
//try {
    $freeTimes = [];
          while($r = mysqli_fetch_row($godziny_k))
          {
            $godzina = $r[0];
            array_push($freeTimes, $godzina);
          }
  /*$pdo = new PDO($dsn, $username, $password, $options);
  $stmt = $pdo->prepare("SELECT godzina_przyjecia FROM `zgloszenia` WHERE data_przyjecia = '$date';");
  $stmt->execute([$date]);
  $freeTimes = [];
  while ($row = $stmt->fetch()) {
    $freeTimes[] = $row["godzina_przyjecia"];
  }*/
  echo json_encode($freeTimes);
/*} catch (PDOException $e) {
  echo "Błąd połączenia z bazą danych: " . $e->getMessage();
}
?>*/