<?php
require_once 'controllers/AuthController.php';
require_once 'controllers/BOController.php';
require_once 'controllers/LoginController.php';
require_once 'controllers/EmpresaController.php';
require_once 'controllers/ServicoController.php';
require_once 'controllers/IvaController.php';


return [
    'defaultRoute' => ['GET', 'BOController', 'index'],
    'bo' => [
        'index' => ['GET', 'BOController', 'index'],
        'login' => ['GET', 'BOController', 'login'],
    ],
    'login' => [
        'index' => ['GET', 'LoginController', 'index'],
        ],
    'home' => [
        'index' => ['GET', 'HomeController', 'index'],
        'show' => ['POST', 'PlanoController', 'show'],
    ],
    'empresa' => [
        'index' => ['GET', 'EmpresaController', 'index'],
        'show' => ['GET', 'EmpresaController', 'show'],
        'create' => ['GET', 'EmpresaController', 'create'],
        'store' => ['POST', 'EmpresaController', 'store'],
        'edit' => ['GET', 'EmpresaController', 'edit'],
        'update' => ['POST', 'EmpresaController', 'update'],
        'delete' => ['GET', 'EmpresaController', 'delete'],

    ],
    'servico' => [
        'index' => ['GET', 'ServicoController', 'index'],
        'create' => ['GET', 'ServicoController', 'create'],
        'store' => ['POST', 'ServicoController', 'store'],
        'show' => ['GET', 'ServicoController', 'show'],
        'edit' => ['GET', 'ServicoController', 'edit'],
        'update' => ['POST', 'ServicoController', 'update'],
        'delete' => ['GET', 'ServicoController', 'delete'],
    ],
    'iva' => [
        'index' => ['GET', 'IvaController', 'index'],
        'create' => ['GET', 'IvaController', 'create'],
        'store' => ['POST', 'IvaController', 'store'],
        'show' => ['GET', 'IvaController', 'show'],
        'edit' => ['GET', 'IvaController', 'edit'],
        'update' => ['POST', 'IvaController', 'update'],
        'delete' => ['GET', 'IvaController', 'delete'],
    ],
];
?>