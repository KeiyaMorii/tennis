<?php
  $true = TRUE;
  $false = FALSE;

  $a = $true && $true;
  $b = $true && $false;
  $c = $true && $true && $true;
  $d = $true && $false && $false;
  $e = $true && ($true && $false); // ()内が優先
  var_dump($a, $b, $c, $d, $e);
?>