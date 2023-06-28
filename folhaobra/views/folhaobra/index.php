<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        </div>

        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                <h3>Dados Empresa</h3><br>
                <?php foreach ($empresas as $empresa) { ?>
                    <b>Designação: </b> <?= $empresa->designacao ?><br>
                    <b>Morada: </b> <?= $empresa->morada ?><br>
                    <b>Localidade: </b> <?= $empresa->localidade ?><br>
                    <b>Telefone: </b> <?= $empresa->telefone ?><br>
                    <b>Email: </b> <?= $empresa->email ?><br>
                    <b>NIF: </b> <?= $empresa->nif ?><br>
                    <b>Capital Soical: </b> <?= $empresa->capital ?><br>
                <?php } ?>
            </div>
            <div class="col-sm-4 invoice-col">
                <address>
                    <h3>Dados Cliente</h3><br>
                </address>
            </div>
            <div class="col-sm-4 invoice-col">
                <address>
                   <b> <p>Nº Fatura:</p>
                    <p>Data:</p></b>
                </address>
            </div>
        </div>
        <div class="col-12 table-responsive">
            <table class="table table-striped"
             <class="row">
            <thead>
            <tr></tr>
            <th style="width:50px">Referencia
                <form>
                    <input type="number">
                    <a href="index.php?c=linhaobra&a=create?idservico"
                    <br>
                    <br>Selecionar Servico</a>
                </form>
            </th>

            <th style="width:50px">Des</th>
            <th style="width:50px">Qua</th>
            <th style="width:50px">Preco/Hora</th>
            <th style="width:50px">IVA</th>
            <th>SubTotal</th>
            </th>
            <tr>
                <td></td>
                <td></td>
                <td></td>

            </tr>
            </thead>
            </table>
        </div>

    </div>

    <div class="row">

        <div class="col-6">
            <p class="lead">Payment Methods:</p>
        </div>
        <div class="col-6">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>SubTotal:</th>
                    </tr>
                    <tr>
                        <th>Total IVA:</th>
                    </tr>
                    <tr>
                        <th>Total:</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="col-6">
        <a href="./index.php?c=folhaobra&a=create">
            <button  class="btn btn-success">Cancelar</button>
        </a>
    </div>