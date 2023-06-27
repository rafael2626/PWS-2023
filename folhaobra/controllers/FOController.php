<?php
require_once  'controllers\Controller.php';
class FOController extends Controller
{
    public function index()
    {
        $this->authenticationFilterAllows(['cliente']);
        $this->renderView('fo', 'index',[],'frontoffice');
    }
}