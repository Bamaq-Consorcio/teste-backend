<?php

namespace App\Exceptions;

class CSV{


    public static function readCSV($arquivo, $cabecalho = true, $delimitador = ','){
       $dados = [];
       $csv = fopen($arquivo, 'r');

       $cabecalhoDados = $cabecalho ? fgetcsv($csv, 0, $delimitador) : [];

       while ($linha = fgetcsv($csv, 0, $delimitador)) {
        $dados[] = $cabecalho ?
                   array_combine($cabecalhoDados, $linha) :
                   $linha;
       }
       return $dados;
    }
}

?>
