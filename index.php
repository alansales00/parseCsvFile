<?php
$arquivo = fopen("authlist.CSV", "r");
$primeiraLinha = fgetcsv($arquivo, 0, ",");
$lista = array();
while (($linha = fgetcsv($arquivo, 0, ",")) !== false) {
    $lista[] = array_combine($primeiraLinha, $linha);
}

for ($i = 0; $i <= count($lista) - 1; $i++){
    $listaFinal[]["UPC#12"] = strval($lista[$i]["UPC#12"]);
    $listaFinal[$i]["ITEM_STATUS"] = strval($lista[$i]["ITEM STATUS"]);
    $listaFinal[$i]["PACK"] = intval($lista[$i]["PACK"]);
    $listaFinal[$i]["CASE_PRICE"] = floatval($lista[$i]["CASE PRICE"]);
    $listaFinal[$i]["BTW_PRICE"] = floatval($lista[$i]["CASE PRICE"] * 1.15);
}

echo "<pre>";
print_r($listaFinal);
echo "</pre>";