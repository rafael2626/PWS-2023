<?php
require_once  'controllers\Controller.php';
class BOController extends Controller
{
    public function index()
    {
        $this->renderView('bo', 'index',[],'default');

    }

    public function login()
    {

        $this->renderView('bo', 'login',[],'login');
    }
}