<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PH Aula 1</title>
</head>
<body>
    <a href="#">Home</a>
    <a href="./.php">Exemplo</a>
    
<hr>exemplo
<h1> Aula de array, constantes</h1>


<?php

#chave em aspas porque é uma string
#array('nome' => "Isabelle", 'idade' => "30", 'ddd' => '41')

$array = array('nome' => "Isabelle", 'idade' => "30", 'ddd' => '41');

#adicionando um elemento no array
$array['telefone'] = "3333-3333";

#var_dump mostra todas as informações de um elemento, sendo array ou não
echo var_dump($array);

#imprimindo o valor de uma chave especifica
echo $array['nome'];

#percorrendo o array criado
foreach($array as $apelido)
{
    echo "$apelido <br>";

}

#criando um array com vários clientes
$clientes = array(
    "cliente1" => array('nome' => 'Isabelle', 'idade'=> 25, 'ddd' => '21', 'telefone' => '1238972'),
    "cliente2" => array('nome' => 'Kamilla', 'idade'=> 12, 'ddd' => '31', 'telefone' => '8764873'),
    "cliente3" => array('nome' => 'Felipe', 'idade'=> 22, 'ddd' => '41', 'telefone' => '3648723'),
);


#criando um array especificando qual cliente quero percorrer
foreach($clientes['cliente1'] as $cli){
    echo $cli;
}

#para pegar todos os dados de um array de um fez, realizamos dois foreach
foreach($clientes as $client){
    foreach($client as $c){
        echo $c;
    }
    echo "<hr>";
}

#imiprimir o valor especifico de um cliente especifico
echo $clientes["cliente1"]['idade'];

#função que vai inserir as informações que o usuário digitar no array
function cadCliente($nome, $idade, $ddd){
    $customer = array('nome'=>$nome, 'idade'=>$idade, 'ddd'=>$ddd);
    return $customer;
}

#adicionando valores ao array do cliente há uma variavel
$clienteNovo = cadCliente('Joaquina','22','11');

#imprimindo o array
echo var_dump($clienteNovo);

#criando uma constante
const N_PI = 3.14;


?>


</body>
</html>
