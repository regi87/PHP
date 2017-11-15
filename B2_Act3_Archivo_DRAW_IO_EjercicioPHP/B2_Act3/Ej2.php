<?php

function Ejercicio_2 ()
{
    $colegio = "Particular";
    $nivel="Nivel B";
    
    $array_Nacional=array
    (array("Nivel A",300),
        array("Nivel B",200),
        array("Nivel C",100)
    );
    
    $array_Particular= array
    (array("Nivel A",400),
        array("Nivel B", 300),
        array("Nivel C", 200)
        );
   
    
    for ($row = 0; $row < 3; $row++)
    {
        for ($col = 0; $col <2; $col++)
        {
            if($colegio == "Nacional")
            {
                if($array_Nacional[$row][$col] == $nivel)
                {
                    echo  $array_Nacional[$row][$col]," ",$array_Nacional[$row][$col+1];
                    
                }
            }
            
        }
        
        for ($col = 0; $col <2; $col++)
        {
            if($colegio == "Particular")
            {
                if($array_Particular[$row][$col] == $nivel)
                {
                    echo  $array_Particular[$row][$col]," ",$array_Particular[$row][$col+1];
                    
                }
            }
            
        }
        
    }
    
    
}



Ejercicio_2();

?>

