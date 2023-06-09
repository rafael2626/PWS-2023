<?php
require_once 'models\LinhaObra.php';
require_once 'models\Empresa.php';
require_once 'controllers\Controller.php';

class LinhaObraController extends Controller
{
    public function index()
    {
        $empresas = Empresa::all();
        $folhaobras = Folhaobra::all();
        $this->renderView('folhaobra', 'index', ['empresas' => $empresas]);
    }

    public function show($id)
    {

    }

    public function create()
    {
        $this->renderView('linhaobra', 'create');
    }

    public function store()
    {
        $linhaobras = new LinhaObra($this->getHTTPPost());
        $linhaobras->valor = $linhaobras->quantidade * $linhaobras->servicos_id->precohora;
        $linhaobras->valoriva = $linhaobras->valor * $linhaobras;
        $linhaobras->subtotal = $linhaobras->valor + $linhaobras->valoriva;
        if ($linhaobras->is_valid()) {
            $linhaobras->save();
        }
    }

    public function select()
    {

    }
}