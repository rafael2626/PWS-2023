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
        $empresas = Empresa::all();
        $this->renderView('folhaobra', 'create',['empresas' => $empresas]);
    }
    public function store($idcliente)
    {

        $folhaobra = new Folhaobra();
        $folhaobra->data =  Carbon::now();
        $folhaobra->valortotal = 0;
        $folhaobra->ivatota = 0;
        $folhaobra->estado = 'lancamento';
        if($folhaobra->is_valid()){
            $folhaobra->save();
            $this->redirectToRoute('folhaobra', 'index',['idcliente' => $idcliente,'folhaobra' => $folhaobra]);
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