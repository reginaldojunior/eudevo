<?php
require 'Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();
$app->response()->header('Content-Type', 'application/json;charset=utf-8');

$app->get(
    '/',
    function() {
        echo 'Hello World';
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

$app->get(
    '/produtos/:id',
    function ($id) {
        $objProduto = new Produto();
        $produto = $objProduto->carregar_produtos($id);
        echo json_encode($produto);
    }
);

// POST Rota para Produtos
$app->post(
    '/produtos',
    function() {
        $objProduto = new Produto();
        $request = \Slim\Slim::getInstance()->request();
        $produto = json_decode($request->getBody());
        $objProduto->adicionar_produto($produto);
    }
);

// PUT Rota para Produtos
$app->put(
    '/produtos/:id',
    function ($id) {
        echo 'Sou um PUT e esse é meu ID '. $id;
    }
);

// DELETE Rota para Produtos
$app->delete(
    '/produtos/:id',
    function ($id) {
        echo 'Sou um DELETE e esse é meu ID '. $id;
    }
);

$app->run();
