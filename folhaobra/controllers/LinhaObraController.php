<?php
require_once 'models\LinhaObra.php';
require_once 'controllers\Controller.php';
class LinhaObraController extends Controller
{
    public function index()
    {

    }
    public function show($id)
    {

    }
    public function create()
    {

        $this->renderView('linhaobra', 'create');
    }
}