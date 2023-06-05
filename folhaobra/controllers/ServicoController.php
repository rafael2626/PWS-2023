<?php
require_once 'models\Servico.php';
require_once 'controllers\Controller.php';

class ServicoController extends Controller
{
    public function index()
    {
        $servicos = Servico::all();
        $this->renderView('servico', 'index', ['servicos' => $servicos]);
    }

    public function show($id)
    {
        $servico = Servico::find($id);
        if (is_null($servico)) {
            $this->renderView('servico', 'show', ['servicos' => $servico, 'id' => $id]);
        } else {
            $this->renderView('servico', 'show', ['servicos' => $servico]);
        }
    }

    public function create()
    {

        $this->renderView('servico', 'create');
    }

    public function store()
    {
        $servico = new Servico($this->getHTTPPost());
        if($servico->is_valid()){
            $servico->save();
            $this->redirectToRoute('servico', 'index');
        } else {
            $this->renderView('servico', 'create',['servico' => $servico]);
        }
    }

    public function edit($id)
    {
        $ivas = Iva::all();
        $servico = Servico::find($id);
        if (is_null($servico)) {
            $this->redirectToRoute('servico', 'index');
        } else {
            $this->renderView('servico', 'edit', ['servico' => $servico,'id' => $id, 'ivas' => $ivas]);
        }
    }

    public function update($id)
    {
        $ivas = Iva::all();
        $servico = Servico::find($id);
        $servico->update_attributes($this->getHTTPPost());
        if($servico->is_valid()){
            $servico->save();
            $this->redirectToRoute('servico', 'index');
        } else {
            $this->renderView('servico', 'edit', ['servico' => $servico, 'ivas' => $ivas]);
        }
    }

    public function delete($id)
    {
        $servico = Servico::find($id);
        $servico->delete();
        $this->redirectToRoute('servico', 'index');
    }
}