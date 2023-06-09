<?php
require_once 'models\Empresa.php';
require_once 'controllers\Controller.php';
class EmpresaController extends Controller
{
    public function __construct()
    {
        $this->authenticationFilterAllows(['admin','funcionario','cliente']);
    }
    public function index()
    {
        $this->authenticationFilterAllows(['admin','funcionario']);
        $empresas = Empresa::all();
        $this->renderView('empresa', 'index', ['empresas' => $empresas]);
    }
    public function show($id)
    {
        $this->authenticationFilterAllows(['admin','funcionario']);

        $empresa = Empresa::find($id);
        if (is_null($empresa)) {
            $this->renderView('empresa', 'show', ['empresas' => $empresa,'id' => $id]);
        } else {
            $this->renderView('empresa', 'show', ['empresas' => $empresa]);
        }
    }
    public function create()
    {
        $this->authenticationFilterAllows(['admin','funcionario']);

        $this->renderView('empresa', 'create');
    }
    public function store()
    {
        $this->authenticationFilterAllows(['admin','funcionario']);

        $empresa = new Empresa($this->getHTTPPost());
        if($empresa->is_valid()){
            $empresa->save();
            $this->redirectToRoute('empresa', 'index');
        } else {
            $this->renderView('empresa', 'create',['empresa' => $empresa]);
        }
    }
    public function edit($id)
    {
        $this->authenticationFilterAllows(['admin','funcionario']);

        $empresa = Empresa::find($id);
        if (is_null($empresa)) {
            $this->redirectToRoute('empresa', 'index');
        } else {
            $this->renderView('empresa', 'edit', ['empresa' => $empresa,'id' => $id]);
        }
    }
    public function update($id)
    {
        $this->authenticationFilterAllows(['admin','funcionario']);

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
        $this->authenticationFilterAllows(['admin','funcionario']);

        $empresa = Empresa::find($id);
        $empresa->delete();
        $this->redirectToRoute('empresa', 'index');
    }
}