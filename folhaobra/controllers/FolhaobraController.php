<?php
require_once 'models\Folhaobra.php';
require_once 'models\LinhaObra.php';
require_once 'models\Empresa.php';
require_once 'controllers\Controller.php';
use Carbon\Carbon;
class FolhaobraController extends Controller
{
    public function index()
    {
        $empresas = Empresa::all();
        $folhaobras = Folhaobra::all();
        $this->renderView('folhaobra', 'index', ['folhaobras' => $folhaobras,'empresas' => $empresas]);
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
        $folhaobra = Folhaobra::all();
        $empresas = Empresa::all();
        $this->renderView('folhaobra', 'create',['empresas' => $empresas]);
    }
    public function store($idcliente)
    {
        $auth = new Auth();
        $folhaobra = new Folhaobra();
        $folhaobra->data =  Carbon::now();
        $folhaobra->valortotal = 0;
        $folhaobra->ivatotal = 0;
        $folhaobra->estado = 'lancamento';
        $folhaobra->user_id = $auth->getUserId();
        $folhaobra->cliente_id = $idcliente;
        if($folhaobra->is_valid()){
            $folhaobra->save($idcliente);
            $this->redirectToRoute('folhaobra', 'create',['idcliente' => $idcliente,'folhaobra' => $folhaobra]);
        } else {
            $this->renderView('folhaobra', 'create',['folhaobra' => $folhaobra]);
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
    public function select()
    {
        $users = User::find_all_by_role('cliente');
        $this->renderView('folhaobra', 'select',[ 'users'=> $users]);

    }
}