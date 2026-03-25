<?php
//Definir el número a multiplicar
$numero = 7;

//Comprova si el número està fora del rang permès
$valid = ($numero >= 1 && $numero <= 12);
?>
<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8" />
  <title>Taula de multiplicar</title>
</head>
<body>
  <h1>Taula de multiplicar del <?php echo $numero; ?></h1>
  <!--Mostrar el missatge de error-->
  <?php if (!$valid): ?>
    <p style="color: red; font-weight: bold;">
      Error:El teu número no està entre el 1 i el 12.
      El número que has posat és <strong><?php echo $numero; ?></strong>
    </p>
  <?php else: ?>
</body>
</html>