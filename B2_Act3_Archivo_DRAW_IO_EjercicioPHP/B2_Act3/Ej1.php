<?php

$arrayFacultad = array("Sistemas", "Electr�nica", "Industrial", "Aministraci�n");
$arrayFacultadNumero = array(100, 90, 80, 70);

$numSolicitado= 100;



function Facultad($arrayNombre,$arrayNota,$num)
{
    
    for ($i = 0; $i < count($arrayNota); $i++)
    {
        if($arrayNota[$i] == $num)
            echo $arrayNombre[$i];
    }
    
        
}

Facultad($arrayFacultad,$arrayFacultadNumero,$numSolicitado);

?>