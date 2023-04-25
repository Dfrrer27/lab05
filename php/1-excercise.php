<?php
  $totalAmount = $_POST['totalAmount'];
  $children = $_POST['children'];

  $bon = $children * 50;
  $comi = $totalAmount * 0.075;
  $sbruto = 600 + $comi + $bon;
  $desc = $sbruto * 0.11;
  $sneto = $sbruto - $desc;

  echo "Bonificación: S/." . $bon;
  echo '<br>';
  echo "Comisión: S/." . $comi;
  echo '<br>';
  echo "Sueldo bruto: S/." . $sbruto;
  echo '<br>';
  echo "Descuento: S/." . $desc;
  echo '<br>';
  echo "Sueldo neto: S/." . $sneto;

?>