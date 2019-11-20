<?php
    ini_set('display_error',1);
    error_reporting(E_ALL);
    header('Content-Type: text/html; charset=utf-8');

    echo "<h1>Up Bank</h1>";

    require "contaCorrente.php";

    echo "<h2>Conta Corrente: Titular: ".$contaMaria->getTitular()."</h2>";
    var_dump($contaJoao);
    
    /*$contaMaria = new ContaCorrente("Maria Silva", "3186", "02393-7" ,15000.00);
    $contaJoao = new ContaCorrente("João Silva", "3186", "02292-6", 10000.00);

    var_dump($contaMaria);
    var_dump($contaJoao);

    $contaMaria->transferir(50, $contaJoao);

    var_dump($contaMaria);
    var_dump($contaJoao); */

    echo "<h3>Apos uma transferencia R$ 20,00 </h3>";
    $contaMaria->transferir(20, $contaJoao);

    var_dump($contaMaria);

