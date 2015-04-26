<?php
require 'Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

// GET route
$app->get(
    '/',
    function () {
        echo 'get';
    }
);

// Classe de Produto
require 'Classes/Produto.php';

// GET Rota para Produtos
$app->get(
    '/produtos',
    function () {
        $objProduto = new Produto();
        $produtos = $objProduto->carregar_produtos();
        echo json_encode($produtos);
    }
);

// POST Rota para Produtos
$app->post(
    '/produtos',
    function() {
        $request = \Slim\Slim::getInstance()->request();
        $dados = $request->getBody();
    }
);

// PUT Rota para Produtos
$app->put(
    '/produtos/1',
    function () {
        echo 'This is a PUT route';
    }
);

// DELETE Rota para Produtos
$app->delete(
    '/delete/1',
    function () {
        echo 'This is a DELETE route';
    }
);

$app->run();
