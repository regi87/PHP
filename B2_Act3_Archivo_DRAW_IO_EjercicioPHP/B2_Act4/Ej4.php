<?php

function Ejercicio_4()
{
  $arrayEstacion = array("Verano","Otoño","Invierno","Primavera");
  $num_aleatorio = rand(1, 4);

switch ($num_aleatorio) {
  case '1':
    echo $arrayEstacion[0]."<br>";
    break;
    case '2':
      echo $arrayEstacion[1]."<br>";
      break;
      case '3':
        echo $arrayEstacion[2]."<br>";
        break;
        case '4':
          echo $arrayEstacion[3]."<br>";
          break;

  default:
    echo "FALLO";
    break;
}

}

function Ejercicio_5()
{
  $arrayEstacion = array("Primavera","Verano","Otoño","Invierno");
  $num_aleatorio = rand(1,12);

switch ($num_aleatorio) {
  case '1':
    echo $arrayEstacion[3];
    break;
    case '2':
      echo $arrayEstacion[3];
      break;
      case '3':
        echo $arrayEstacion[0];
        break;
        case '4':
          echo $arrayEstacion[0];
          break;
          case '5':
            echo $arrayEstacion[0];
            break;
            case '6':
              echo $arrayEstacion[1];
              break;
              case '7':
                echo $arrayEstacion[1];
                break;
                case '8':
                  echo $arrayEstacion[1];
                  break;
                  case '9':
                    echo $arrayEstacion[2];
                    break;
                    case '10':
                      echo $arrayEstacion[2];
                      break;
                      case '11':
                        echo $arrayEstacion[3];
                        break;
                        case '12':
                          echo $arrayEstacion[3];
                          break;

  default:
    echo "FALLO";
    break;
}

}

function Ejercicio_1()
{
  $numero_calculo = 7;
  $resultado =0;

  for ($i=1; $i <= $numero_calculo; $i++)
   {
    $resultado +=$i;
  }
  echo "<br>";
  echo $resultado;

}

function Ejercicio_2()
{
  $numero_INI = 1;
  $numero_FIN= 10;
  $contador=0;

  for ($i=$numero_INI+1; $i < $numero_FIN; $i++)
   {
      if($i%2==0)
      {
        $contador++;
      }
  }
  echo "<br>";
  echo $contador;

}

Ejercicio_4();
Ejercicio_5();
Ejercicio_1();
Ejercicio_2();
 ?>
