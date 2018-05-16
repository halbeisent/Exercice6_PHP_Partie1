<!-- Il peut être intéressant de placer une partie du PHP au dessus du DOCTYPE pour "aérer le code" -->
<?php
$nom = 'John';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Exercice 6 Partie 1 PHP</title>
</head>
<body>
  <!-- Si un echo se trouve juste derrière du un < ?php, on peut raccourcir notre code par < ?=  -->
  <p><?= 'Bonjour '.$nom.', comment vas-tu?';?>
  </p>
</body>
</html>
