<?php
  session_start();

  // Einige wichtige CAPTCHA-Konstanten setzen
  define('CAPTCHA_ANZZEICHEN', 6);  // Anzahl Zeichen in captcha
  define('CAPTCHA_BREITE', 100);   // Bildbreite
  define('CAPTCHA_HOEHE', 25);   // Bildhöhe

  // Zufällige captcha generieren
  $captcha = "";
  for ($i = 0; $i < CAPTCHA_ANZZEICHEN; $i++) {
    $captcha .= chr(rand(97, 122));
  }

  // Verschlüsselte captcha in Sitzungsvariable speichern
  $_SESSION['captcha'] = sha1($captcha);

  // Bild erstellen
  $img = imagecreatetruecolor(CAPTCHA_BREITE, CAPTCHA_HOEHE);

  // Weißen Hintergrund, schwarzen Text und graue Zeichnungen einrichten
  $hg_farbe = imagecolorallocate($img, 255, 255, 255);     // Weiß
  $textfarbe = imagecolorallocate($img, 0, 0, 0);         // Schwarz
  $malfarbe = imagecolorallocate($img, 64, 64, 64);   // Dunkelgrau

  // Hintergrund füllen
  imagefilledrectangle($img, 0, 0, CAPTCHA_BREITE, CAPTCHA_HOEHE, $hg_farbe);

  // Einige zufällige Linien zeichnen
  for ($i = 0; $i < 5; $i++) {
    imageline($img, 0, rand() % CAPTCHA_HOEHE, CAPTCHA_BREITE, rand() % CAPTCHA_HOEHE, $malfarbe);
  }

  // Einige Punkte verstreuen
  for ($i = 0; $i < 50; $i++) {
    imagesetpixel($img, rand() % CAPTCHA_BREITE, rand() % CAPTCHA_HOEHE, $malfarbe);
  }

  // Den captcha-String zeichnen
  imagettftext($img, 18, 0, 5, CAPTCHA_HOEHE - 5, $textfarbe, "../other/courbd.ttf", $captcha);
  // Mit Header Bild als PNG ausgeben
  header("Content-type: image/png");
  imagepng($img);

  // Aufräumen
  imagedestroy($img);
?>