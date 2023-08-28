<?php


$host = "localhost";
$dbname = "biblioteca";
$username = "root";
$password = "senac2023";

try{

    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$username,$password);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    echo "Conexão com o banco de dados esta estabelecida";

}catch(PDOException){
    echo "Erro na conexão com o banco de dados";
}