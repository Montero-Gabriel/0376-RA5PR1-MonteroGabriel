<?php
// Recollir el número del formulari (si s'ha enviat)
$numero = null;
$valid = false;
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //Comprovar si el numero està entre el 1 i el 12
  $numero = (int) $_POST["numero"];
  $valid = ($numero >= 1 && $numero <= 12);
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8" />
  <title>Taula de multiplicar</title>
</head>
<body>
  <h1>Taula de multiplicar del <?php echo $numero; ?></h1>
   
  <!--Formulari per introduir el número -->
  <form method="POST" action="">
    <label for="numero">Introdueix un número (1-12):</label>
    <input type="number" id="numero" name="numero" min="1" max="12" required />
    <button type="submit">Enviar</button>
  </form>
  <br>
  <!--Mostrar resultats només si s'ha enviat el formulari -->
  <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
  <!--Mostrar el missatge de error-->
  <?php if (!$valid): ?>
    <p style="color: red; font-weight: bold;">
      Error:El teu número no està entre el 1 i el 12.
      El número que has posat és <strong><?php echo $numero; ?></strong>
    </p>
  <?php else: ?>
    <!--Crear la taula i el bucle for-->
    <table border="1" cellpadding="8">
      <?php for ($i = 1; $i <= 10; $i++): ?>
      <!--IF per al numero parell o senar-->
      <?php
        if ($i % 2 == 0) {
          $color = "lightgray"; //fila parell de color gris
        } else {
          $color = "white"; //fila senar de color blanc
        }
      ?>
      <!--Pintar cada fila amb el color que li toqui-->
      <tr bgcolor="<?php echo $color; ?>">
        <td><?php echo $numero; ?></td>
        <td>x</td>
        <td><?php echo $i; ?></td>
        <td>=</td>
        <td><?php echo $numero * $i; ?></td>
      </tr>
      <?php endfor; ?>
    </table>
  <?php endif; ?>
  <?php endif; ?> 
</body>
</html>
