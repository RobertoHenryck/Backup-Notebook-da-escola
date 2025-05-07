<?php

$carros = array(
    "Camaro" => 2012,
    "Corvete" => 2025,
    "Lancer" => 2020
);

foreach ($carros as $carro => $ano) {
    echo "modelo:" . $carro . ", ano" . $ano . "<br>";
}
