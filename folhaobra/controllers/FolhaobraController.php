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
        $this->authenticationFilterAllows(['admin','funcionario']);

        $empresas = Empresa::all();
        $this->renderView('folhaobra', 'index', ['empresas' => $empresas]);
    }
    public function show($id)
    {
        $this->authenticationFilterAllows(['admin']);

        $folhaobra = Folhaobra::find($id);
        if (is_null($folhaobra)) {
            $this->renderView('folhaobra', 'show', ['folhaobras' => $folhaobra, 'id' => $id]);
        } else {
            $this->renderView('folhaobra', 'show', ['folhaobras' => $folhaobra]);
        }
    }
    public function create()
    {
        $this->authenticationFilterAllows(['admin']);

        $folhaobra = Folhaobra::all();
        $empresas = Empresa::all();
        $this->renderView('folhaobra', 'create',['empresas' => $empresas]);
    }
    public function store($idcliente)
    {
        $this->authenticationFilterAllows(['admin']);

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
        $this->authenticationFilterAllows(['admin']);

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
        $this->authenticationFilterAllows(['admin']);

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
        $this->authenticationFilterAllows(['admin']);

        $folhaobra = Folhaobra::find($id);
        $folhaobra->delete();
        $this->redirectToRoute('folhaobra', 'index');
    }
    public function select()
    {
        $this->authenticationFilterAllows(['admin']);

        $users = User::find_all_by_role('cliente');
        $this->renderView('folhaobra', 'select',[ 'users'=> $users]);

    }
}