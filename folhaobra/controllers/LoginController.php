<?php
require_once 'controllers\Controller.php';

class LoginController extends Controller
{

    public function index()
    {
        $this->renderView('login', 'index', [], 'login');
    }

    public function checklogin()
    {
        $username = $this->getHTTPPostParam('username');
        $password = $this->getHTTPPostParam('password');
        $auth = new Auth();
        if ($auth->CheckAuth($username, $password)) {
            //verfificar o role
            switch ($auth->getUserRole()) {
                case 'admin':
                    $this->redirectToRoute('bo', 'index');
                    break;
                case 'funcionario':
                    $this->redirectToRoute('bo', 'index');
                    break;
                case 'cliente':
                    $this->redirectToRoute('fo', 'index');
                    break;
                default:
                    $this->redirectToRoute('login', 'index');
            }
        } else {
            $this->redirectToRoute('login', 'index');

        }
    }
}