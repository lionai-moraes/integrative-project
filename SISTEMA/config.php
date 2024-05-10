<?php
//Conexão com o banco de dados
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'usbw';
$dbName = 'cadastro_adm';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

//Teste da coneção
// if($conexao->connet_errno)
// {
//     echo "erro";
// }
// else 
// {
//     echo "Conexão efetuada com sucesso";
// }
?>