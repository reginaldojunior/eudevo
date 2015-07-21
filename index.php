<?php
$entityManager = require __DIR__ . "/bootstrap.php";

$app = new \Slim\Slim();

$app->get(
    '/',
    function() {
        echo 'Hello World';
    }
);


$app->get("/teste", function() use ($app, $entityManager) {
  $users = $entityManager
    ->getRepository("Entities\User")
    ->findAll();
    echo '<pre>';print_r($users);exit();
  foreach($users as $user) {
    echo $user->getName();
  }
});

$app->run();