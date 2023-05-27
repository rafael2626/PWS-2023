<?php
require_once 'models\Empresa.php';
require_once 'controllers\Controller.php';
class EmpresaController extends Controller
{
    public function index()
    {
        $empresas = Empresa::all();
        $this->renderView('empresa', 'index', ['empresas' => $empresas]);
    }
    public function show($id)
    {
        $empresa = Empresa::find($id);
        if (is_null($empresa)) {
            $this->renderView('empresa', 'show', ['empresas' => $empresa,'id' => $id]);
        } else {
            $this->renderView('empresa', 'show', ['empresas' => $empresa]);
        }
    }
    public function create()
    {
        $empresas = Empresa::all();
        $this->renderView('empresa', 'create', ['empresas' => $empresas]);
    }
    public function store()
    {
        $empresa = new Empresa($this->getHTTPPost());
        if($empresa->is_valid()){
            $empresa->save();
            $this->redirectToRoute('empresa', 'index');
        } else {
            $empresa = Empresa::all();
            $this->renderView('empresa', 'create',['empresa' => $empresa]);
        }
    }
    public function edit($id)
    {
        $empresa = Empresa::find($id);
        if (is_null($empresa)) {
            $this->redirectToRoute('empresa', 'index');
        } else {
            $this->renderView('empresa', 'edit', ['book' => $empresa,'id' => $id]);
        }
    }
    public function update($id)
    {
        $empresa = Empresa::find($id);
        $empresa->update_attributes($this->getHTTPPost());
        if($empresa->is_valid()){
            $empresa->save();
            $this->redirectToRoute('empresa', 'index');
        } else {
            $this->renderView('empresa', 'edit', ['empresa' => $empresa]);
        }
    }
    public function delete($id)
    {
        $empresa = Empresa::find($id);
        $empresa->delete();
        $this->redirectToRoute('empresa', 'index');
    }
}