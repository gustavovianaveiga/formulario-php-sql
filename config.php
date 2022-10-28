<?php

$server = 'localhost';
$name= 'root';
$senha= '062230';
$form='formulario';

$conexao = new MySQLi($server, $name, $senha, $form);

if ($conexao -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  }
  else{
    echo "Connect";
  };
?>