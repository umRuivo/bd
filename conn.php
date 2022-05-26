<?php


# Substitua abaixo os dados, de acordo com o banco criado
$user = "root"; 
$password = "usbw"; 
$database = "tucanoservicos";



# O hostname deve ser sempre localhost 
$hostname = "localhost";

# Conecta com o servidor de banco de dados 
mysql_connect( $hostname, $user, $password ) or die( ' Erro na conexão ' ); 

# Seleciona o banco de dados 
mysql_select_db( $database ) or die( 'Erro na seleção do banco' );