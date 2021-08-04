<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/books', function () use ($router) {
    return 'busca';
});


// - Criar roteamento para a busca
// - Criar controller que tratar a requisição
// - Criar service que fará a busca no bd
// - Criar modelo dos dados das tabelas livro e resumo