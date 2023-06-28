<?php
require_once 'models\LinhaObra.php';
require_once 'controllers\Controller.php';

class LinhaObraController extends Controller
{
    public function index()
    {
        $this->authenticationFilterAllows(['cliente']);
        $empresas = Empresa::all();
        $this->renderView('linhaobra', 'index', ['empresas' => $empresas]);
    }

    public function show($id)
    {

    }
    public function create(/*$idfolhaobra ,$idservico*/)
    {
        $empresas = Empresa::all();

        $this->renderView('linhaobra', 'create', ['empresas' => $empresas]);
    }

    public function store()
    {
        $folhasobra = new Folhaobra($this->getHTTPPost());
        $linhaobra = new LinhaObra($this->getHTTPPost());
       /* $linhaobra->quantidade*/
      /*  $linhaobra->referencia*/
        $linhaobra->valortotal = $linhaobra->quantidade * $linhaobra->servico->precohora;
        $linhaobra->valoriva = $linhaobra->valortotal * $linhaobra->servico->percentagem;
        $folhasobra->subtotal = $linhaobra->valortotal + $folhasobra->valoriva;
        if ($linhaobra->is_valid()) {
            $linhaobra->save();
            $this->redirectToRoute('linhaobra', 'create',['linhaobra' => $linhaobra]);
        }
    }
    public function select()
    {
        $servicos = Servico::all();
        $this->renderView('linhaobra', 'select', ['servicos'=> $servicos ]);
    }
}