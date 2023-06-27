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
                    <b>Capital Soical </b> <?= $empresa->capital ?><br>
                <?php } ?>
            </div>
            <div class="col-sm-4 invoice-col">
                <address>
                    <h3>Dados Cliente</h3><br>
                    <button><a href="index.php?c=folhaobra&a=select ">Selecionar Cliente</a></button>

                </address>
            </div>
        </div>


        <div class="row">
            <div class="col-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Referencia</th>
                        <th>Des</th>
                        <th>Qua</th>
                        <th>Preco/Hora</th>
                        <th>IVA</th>
                        <th>SubTotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                        </td>
                    </tr>
                    <tr>

                    </tr>
                    <tr>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <div class="row">

            <div class="col-6">
                <p class="lead">Payment Methods:</p>
                <img src="../../dist/img/credit/visa.png" alt="Visa">
                <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
                <img src="../../dist/img/credit/american-express.png" alt="American Express">
                <img src="../../dist/img/credit/paypal2.png" alt="Paypal">
                <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                    plugg
                    dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                </p>
            </div>

            <div class="col-6">
                <p class="lead">Amount Due 2/22/2014</p>
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

