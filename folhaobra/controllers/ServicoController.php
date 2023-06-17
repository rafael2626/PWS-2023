<?php
require_once 'models\Servico.php';
require_once 'controllers\Controller.php';

class ServicoController extends Controller
{
    public function index()
    {
        $this->authenticationFilterAllows(['admin','funcionario']);

        $servicos = Servico::all();
        $this->renderView('servico', 'index', ['servicos' => $servicos]);
    }

    public function show($id)
    {
        $this->authenticationFilterAllows(['admin','funcionario']);

        $servico = Servico::find($id);
        if (is_null($servico)) {
            $this->renderView('servico', 'show', ['servicos' => $servico, 'id' => $id]);
        } else {
            $this->renderView('servico', 'show', ['servicos' => $servico]);
        }
    }

    public function create()
    {
        $this->authenticationFilterAllows(['admin','funcionario']);
        $ivas = Iva::all();
        $this->renderView('servico', 'create', ['ivas' => $ivas]);
    }

    public function store()
    {
        $this->authenticationFilterAllows(['admin','funcionario']);

        $servico = new Servico($this->getHTTPPost());
        if($servico->is_valid()){
            $servico->save();
            $this->redirectToRoute('servico', 'index');
        } else {
            $ivas = Iva::all();
            $this->renderView('servico', 'create',['servico' => $servico,'ivas' => $ivas]);
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
        $this->authenticationFilterAllows(['admin','funcionario']);

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
        $this->authenticationFilterAllows(['admin','funcionario']);

        $servico = Servico::find($id);
        $servico->delete();
        $this->redirectToRoute('servico', 'index');
    }
}