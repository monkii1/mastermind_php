<?php
try {
  $pdo = new PDO('mysql:host=localhost;dbname=php_mastermind', 'php_mastermind', 'S@Y]_IA.tPy*YktP', [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}
catch(PDOException $e) {
  echo 'Probleme mit der Datenbankverbindung...';
  die();
}