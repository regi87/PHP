<?php


function Ejercicio_3 ()
{
  $array_ValorDados=array(0,0,0);
  $contador = 0;

  for ($i=0; $i < 3; $i++)
  {
    $array_ValorDados[$i]=rand(1,6);
    echo "Dado ".($i+1)." Número: ".$array_ValorDados[$i];
    echo "<br>";

    if($array_ValorDados[$i] == 6)
    {
      $contador++;
    }
  }
  echo "<br>";
  if($contador == 3)
    echo "ORO";
    else if($contador == 2)
    {
      echo "PLATA";
    }
    else if($contador == 1)
    {
      echo "BRONCE";
    }
    else
    {
      echo "PERDEDOR";
    }

}

Ejercicio_3();

 ?>
