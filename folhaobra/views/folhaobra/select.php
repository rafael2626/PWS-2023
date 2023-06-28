
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table tablestriped">
            <?php foreach ($users as $user) {
                ?>
            <tr>
                <td>ID</td>
                <td>Username</td>
            </tr>
            <tr>
                <td><?= $user->id?></td>
                <td><?= $user->username?></td>
                <td> <a href="index.php?c=linhaobra&a=index "> Seleccionar </a></td>
                <?php } ?>
            </tr>

            <tbody>
            </tbody>
        </table>
    </div>

