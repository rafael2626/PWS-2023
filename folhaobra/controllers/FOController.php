<?php
require_once  'controllers\Controller.php';
class FOController extends Controller
{
    public function index()
    {
        $this->renderView('fo', 'index',[],'default');

    }
}