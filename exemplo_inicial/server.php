<?php

// Criar um socket SERVIDOR TCP
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

// Vincular o socket ao endereço e a porta
socket_bind($socket, '127.0.0.1', 50000);

// Escutar por conexões
socket_listen($socket);

echo "Servidor aguardando conexões...\n";

// Aceitar conexão do cliente
$clientSocket = socket_accept($socket);
echo "Cliente conectado.\n";

// Ler dados do cliente
$recebido = socket_read($clientSocket, 1024);
echo "Cliente disse: " . $recebido . "\n";

// Enviar uma resposta ao cliente
$msg = "Olá Cliente! Bem-vindo à comunicação usando sockets!";
socket_write($clientSocket, $msg, strlen($msg));
// Fechar os sockets
socket_close($clientSocket);
socket_close($socket);
