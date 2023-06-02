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
        $ivas = Iva::all();
        $this->renderView('servico', 'create', ['ivas' => $ivas]);
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

    }

    public function update($id)
    {

    }

    public function delete($id)
    {

    }
}