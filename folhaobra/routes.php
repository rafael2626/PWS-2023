<?php
require_once 'controllers/AuthController.php';
require_once 'controllers/BOController.php';
require_once 'controllers/LoginController.php';
require_once 'controllers/EmpresaController.php';
require_once 'controllers/ServicoController.php';
require_once 'controllers/IvaController.php';
require_once 'controllers/UserController.php';
require_once 'controllers/LinhaObraController.php';
require_once 'controllers/FolhaobraController.php';
require_once 'controllers/FOController.php';

return [
    'defaultRoute' => ['GET', 'BOController', 'index'],
    'bo' => [
        'index' => ['GET', 'BOController', 'index'],
    ],
    'fo' => [
        'index' => ['GET', 'FOController', 'index'],
    ],
    'login' => [
        'index' => ['GET', 'LoginController', 'index'],
        'checklogin' => ['POST' , 'LoginController','checklogin']
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
    'linhaobra' => [
        'index' => ['GET', 'LinhaobraController', 'index'],
        'show' => ['GET', 'LinhaobraController', 'show'],
        'create' => ['GET', 'LinhaobraController', 'create'],
        'store' => ['POST', 'LinhaobraController', 'store'],
        'edit' => ['GET', 'LinhaobraController', 'edit'],
        'update' => ['POST', 'LinhaobraController', 'update'],
        'delete' => ['GET', 'LinhaobraController', 'delete'],
        'select' => ['GET', 'LinhaobraController', 'select'],

    ],
    'folhaobra' => [
        'index' => ['GET', 'FolhaobraController', 'index'],
        'show' => ['GET', 'FolhaobraController', 'show'],
        'create' => ['GET', 'FolhaobraController', 'create'],
        'store' => ['POST', 'FolhaobraController', 'store'],
        'edit' => ['GET', 'FolhaobraController', 'edit'],
        'update' => ['POST', 'FolhaobraController', 'update'],
        'delete' => ['GET', 'FolhaobraController', 'delete'],
        'select' => ['GET', 'FolhaobraController', 'select'],

    ],
    'user' => [
        'index' => ['GET', 'UserController', 'index'],
        'show' => ['GET', 'UserController', 'show'],
        'create' => ['GET', 'UserController', 'create'],
        'store' => ['POST', 'UserController', 'store'],
        'edit' => ['GET', 'UserController', 'edit'],
        'update' => ['POST', 'UserController', 'update'],
        'delete' => ['GET', 'UserController', 'delete'],

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