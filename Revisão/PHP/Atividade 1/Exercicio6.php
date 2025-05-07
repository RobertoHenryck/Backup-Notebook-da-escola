<?php

 $notas = array("Matemática" => 6.5, "Português" => 9.0, "Ciências" => 5.0);
 $soma = 0;
 $contador = 0;


 foreach ($notas as $disciplina => $nota)
 {
 $soma += $nota; $contador++;
 } $media = $soma / $contador;

 echo "Média: " . $media; ?>`