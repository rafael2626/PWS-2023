<?php
require_once  'controllers\Controller.php';
class LoginController extends  Controller
{
    public function index()
    {
        $this->renderView('login', 'index',[],'login');

    }
    public  function checklogin()
    {
        $username = $this->getHTTPPostParam('username');
        $password = $this->getHTTPPostParam('password');
        $auth = new Auth();
        if($auth->CheckAuth($username,$password))
        {
            echo  'login válido <br>';

            echo  $auth->getUserId() . '<br>';
            echo  $auth->getUsername() . '<br>';
            echo  $auth->getUserRole() . '<br>';
        }else
        {
            echo 'login invalido';
        }

    }
}