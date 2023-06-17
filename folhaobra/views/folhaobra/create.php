<div class="container-fluid" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    </section>
    <div class="invoice p-3 mb-3">
        <div class="row">
            <div class="col-12">
                <h4>
                    <?php foreach ($empresas as $empresa) { ?>
                    Dados da Empresa </h4>
                <br>
                <td><p>Designação: <?= $empresa->designacao ?></p></td>
                <td><p>Capital : <?= $empresa->capital ?></p></td>
                <td><p>Email : <?= $empresa->email ?></p></td>
                <td><p>Telefone : <?= $empresa->telefone ?></p></td>
                <td><p>NIF : <?= $empresa->nif ?></p></td>
                <td><p>Morada : <?= $empresa->morada ?></p></td>
                <td><p>Localidade : <?= $empresa->localidade ?></p></td>
                <?php } ?>
            </div>
        </div>
        <a href="index.php?c=folhaobra&a=select"> Selecionar Cliente</a>
    </div>
    <aside class="control-sidebar control-sidebar-dark">

    </aside>

</div>

