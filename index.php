<?php
$entityManager  = require __DIR__ . "/bootstrap.php";
$app = new \Slim\Slim();

$app->get(
    '/',
    function() {
        echo 'Seja bem vindo a nossa API, para mais informações acesse. http://github.com/reginaldojunior/aniversarios';
    }
);

$app->get(
    '/user', 
    function() use ($app, $entityManager) {
        $users = new Entities\User;
        
        $users->setName('REginaldo teste 123');
        $result = $entityManager->persist($users);

        $entityManager->flush();

        echo json_encode($result);
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