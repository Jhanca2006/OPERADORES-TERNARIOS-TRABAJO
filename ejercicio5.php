<?php



echo "digite su edad\n";



$edad = readline();


$condicion = ($edad >= 18) ? (readline("tiene lisencia?\n ") == "si" ? "puedes conducir" : "no puedes conducir") : "no tienes la edad suficiente";



echo $condicion;

?>
