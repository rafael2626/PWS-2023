<?php
require_once 'models\Iva.php';
require_once 'controllers\Controller.php';
class IvaController extends Controller
{
    public function index()
    {
        $ivas = Iva::all();
        $this->renderView('iva', 'index', ['ivas' => $ivas]);
    }
    public function show($id)
    {
        $iva = Iva::find($id);
        if (is_null($iva)) {
            $this->renderView('iva', 'show', ['ivas' => $iva, 'id' => $id]);
        } else {
            $this->renderView('iva', 'show', ['ivas' => $iva]);
        }
    }
    public function create()
    {
        $this->renderView('iva', 'create');
    }
    public function store()
    {
        $iva = new Empresa($this->getHTTPPost());
        if($iva->is_valid()){
            $iva->save();
            $this->redirectToRoute('iva', 'index');
        } else {
            $this->renderView('iva', 'create',['iva' => $iva]);
        }
    }
    public function edit($id)
    {
        $iva = Iva::find($id);
        if (is_null($iva)) {
            $this->redirectToRoute('iva', 'index');
        } else {
            $this->renderView('iva', 'edit', ['iva' => $iva,'id' => $id]);
        }
    }
    public function update($id)
    {
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
        $iva = Iva::find($id);
        $iva->delete();
        $this->redirectToRoute('iva', 'index');
    }
}