<?php

// Criar um socket CLIENTE  TCP
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

// Conectar ao servidor
socket_connect($socket, '127.0.0.1', 50000);

// Enviar dados para o servidor
$msg = "Olá servidor! Daqui fala o Cliente!";
socket_write($socket, $msg, strlen($msg));

// Ler a resposta do servidor
$recebido = socket_read($socket, 1024);
echo "Servidor disse: " . $recebido . "\n";

socket_close($socket);
