<?php
require_once 'models\Folhaobra.php';
require_once 'controllers\Controller.php';
class FolhaobraController extends Controller
{
    public function index()
    {
        $folhaobras = Folhaobra::all();
        $this->renderView('folhaobra', 'index', ['folhaobras' => $folhaobras]);
    }
    public function show($id)
    {
        $folhaobra = Folhaobra::find($id);
        if (is_null($folhaobra)) {
            $this->renderView('folhaobra', 'show', ['folhaobras' => $folhaobra, 'id' => $id]);
        } else {
            $this->renderView('folhaobra', 'show', ['folhaobras' => $folhaobra]);
        }
    }
    public function create()
    {
        $this->renderView('folhaobra', 'create');
    }
    public function store()
    {
        $servico = new Folhaobra($this->getHTTPPost());
        if($servico->is_valid()){
            $servico->save();
            $this->redirectToRoute('folhaobra', 'index');
        } else {
            $this->renderView('folhaobra', 'create',['servico' => $servico]);
        }
    }
    public function edit($id)
    {
        $linhaobras = LinhaObra::all();
        $folhaobra = Folhaobra::find($id);
        if (is_null($folhaobra)) {
            $this->redirectToRoute('folhaobra', 'index');
        } else {
            $this->renderView('folhaobra', 'edit', ['folhaobra' => $folhaobra,'id' => $id, 'linhaobras' => $linhaobras]);
        }
    }
    public function update($id)
    {
        $linhaobras = LinhaObra::all();
        $folhaobra = Folhaobra::find($id);
        $folhaobra->update_attributes($this->getHTTPPost());
        if($folhaobra->is_valid()){
            $folhaobra->save();
            $this->redirectToRoute('folhaobra', 'index');
        } else {
            $this->renderView('folhaobra', 'edit', ['folhaobra' => $folhaobra, 'linhaobras' => $linhaobras]);
        }
    }
    public function delete($id)
    {
        $folhaobra = Folhaobra::find($id);
        $folhaobra->delete();
        $this->redirectToRoute('folhaobra', 'index');
    }
}