<?php

$HOST = "localhost";
$USER = "root";
$PASSWORD = "$4B4C4t3";
$DATABASE = "biblioteca";

$my_sql = new mysqli( $HOST,$USER,$PASSWORD,$DATABASE );

if ( $my_sql->connect_errno ) {
    echo "Falha ao conectar: ( ".$my_sql->connect_errno." )";
    exit;
}

$sql_code = "SELECT * FROM livros;";
$sql_query = $my_sql->query($sql_code) or die("Erro ao consultar: ".$my_sql->error);

?>