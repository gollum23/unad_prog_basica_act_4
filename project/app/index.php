<?php
    define("RELATIVE", "..");
    include RELATIVE.'/includes/header.php';
?>
<h2 class="text-center">Aplicativo para el control de equipos de computo</h2>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Listado de productos</a></li>
                <li><a href="computer_form.php">Agregar productos</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Ir al administrador</a></li>
            </ul>
        </div>
    </div>
</nav>
<?php
    include_once RELATIVE.'/includes/config.php';
    include_once RELATIVE.'/includes/computer.php';
    $computer = new Computer();
    $computer_list = $computer->find('id<100');
?>
<table class="table">
    <thead>
        <tr>
            <th>Imágen</th>
            <th>Serial</th>
            <th>Procesador</th>
            <th>Marca</th>
            <th>Ram</th>
            <th>HD</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($computer_list as $item): ?>
        <tr>
            <th><img src="<?=$item->image; ?>" alt=""></th>
            <th><?=$item->serial; ?></th>
            <th><?=$item->processor; ?></th>
            <th><?=$item->brand; ?></th>
            <th><?=$item->ram; ?></th>
            <th><?=$item->hd; ?></th>
            <th><a href="computer_form.php?pk=<?=$item->id; ?>"><i class="glyphicon glyphicon-edit"></i></a></th>
            <th><a href="javascript:delete_computer(<?=$item->id; ?>)"><i class="glyphicon glyphicon-minus text-danger"></i></a></th>

        </tr>
    <?php endforeach ?>
    </tbody>
</table>

<script>
    function delete_computer(e) {
        if (confirm('¿Está seguro que desea borrar el registro')) {
            window.location = 'delete.php?pk=' + e
        }
    }
</script>

<?php
    include RELATIVE.'/includes/footer.php';
?>

