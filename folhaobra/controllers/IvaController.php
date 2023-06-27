<?php
require_once 'models\Iva.php';
require_once 'controllers\Controller.php';
class IvaController extends Controller
{
    public function __construct()
    {
        $this->authenticationFilterAllows(['admin','funcionario']);
    }
    public function index()
    {
        $this->authenticationFilterAllows(['admin','funcionario']);


        $ivas = Iva::all();
        $this->renderView('iva', 'index', ['ivas' => $ivas]);
    }
    public function show($id)
    {
        $this->authenticationFilterAllows(['admin','funcionario']);
        $iva = Iva::find($id);
        if (is_null($iva)) {
            $this->renderView('iva', 'show', ['ivas' => $iva, 'id' => $id]);
        } else {
            $this->renderView('iva', 'show', ['ivas' => $iva]);
        }
    }
    public function create()
    {
        $this->authenticationFilterAllows(['admin','funcionario']);


        $this->renderView('iva', 'create');
    }
    public function store()
    {
        $this->authenticationFilterAllows(['admin','funcionario']);



        $iva = new Iva($this->getHTTPPost());
        if($iva->is_valid()){
            $iva->save();
            $this->redirectToRoute('iva', 'index');
        } else {
            $this->renderView('iva', 'create',['iva' => $iva]);
        }
    }
    public function edit($id)
    {
        $this->authenticationFilterAllows(['admin','funcionario']);

        $iva = Iva::find($id);
        if (is_null($iva)) {
            $this->redirectToRoute('iva', 'index');
        } else {
            $this->renderView('iva', 'edit', ['iva' => $iva,'id' => $id]);
        }
    }
    public function update($id)
    {
        $this->authenticationFilterAllows(['admin','funcionario']);

        $iva = Iva::find($id);
        $iva->update_attributes($this->getHTTPPost());
        if($iva->is_valid()){
            $iva->save();
            $this->redirectToRoute('iva', 'index');
        } else {
            $this->renderView('iva', 'edit', ['iva' => $iva]);
        }
    }
    public function delete($id)
    {
        $this->authenticationFilterAllows(['admin','funcionario']);

        $iva = Iva::find($id);
        $iva->delete();
        $this->redirectToRoute('iva', 'index');
    }
}