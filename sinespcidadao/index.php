<?php

require 'Sinesp.php';

use Sinesp\Sinesp;

//$rustart = getrusage();

$veiculo = new Sinesp;
//$veiculo->proxy('199.83.131.33', '8080');

try {
    $veiculo->buscar($_GET["placa"]);
    if ($veiculo->existe()) {
		header('Content-Type: application/json');
        print_r(json_encode($veiculo->dados()));
    }
} catch (Exception $e) {
    echo $e->getMessage();
}


// Script end
/*function rutime($ru, $rus, $index) {
    return ($ru["ru_$index.tv_sec"]*1000 + intval($ru["ru_$index.tv_usec"]/1000))
     -  ($rus["ru_$index.tv_sec"]*1000 + intval($rus["ru_$index.tv_usec"]/1000));
}

$ru = getrusage();
echo "Esta consulta demorou " . rutime($ru, $rustart, "utime") .
    " ms para o processamento\n";
echo "e gastou " . rutime($ru, $rustart, "stime") .
    " ms na chamada.\n";*/