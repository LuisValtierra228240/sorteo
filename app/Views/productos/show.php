<?= $this->extend('admin/plantillas/general') ?>

<?= $this->section('title') ?>
Producto
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <?php if($producto){?>
        
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
    <img src="<?= $producto["imagen"];?>" alt="" style="width:200px;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <h2 class="card-title">Card title</h2>
      <ul>
        <li class="card-text">Precio: $<?= $producto["precio"];?></li>
        <li class="card-text">marca: <?= $producto["marca"];?></li>
        <li class="card-text">codigo: <?= $producto["codigo"];?></li>
        <li class="card-text">Fecha de creación: <?= $producto["timestamp"];?></li>
    </ul>
      </div>
    </div>
  </div>
</div>
<?php }else{ ?>
        <br>
        <h2 styles="">No existe este producto</h2>
        <a href="/producto/index">Volver a la lista</a>
    <?php } ?>
    
    
    
    
    <?= $this->endSection() ?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= ($producto) ? $producto["nombre"] : "Este producto no existe" ; ?></title>
</head>
<body>
    <?php if($producto){?>
    <img src="<?= $producto["imagen"];?>" alt="" style="width:200px;">
    <h2><?= $producto["nombre"];?></h2>
    <ul>
        <li>Precio: $<?= $producto["precio"];?></li>
        <li>marca: <?= $producto["marca"];?></li>
        <li>codigo: <?= $producto["codigo"];?></li>
        <li>Fecha de creación: <?= $producto["timestamp"];?></li>
    </ul>
    <?php }else{ ?>
        <br>
        <h2 styles="">No existe este producto</h2>
        <a href="/producto/index">Volver a la lista</a>
    <?php } ?>
</body>
</html> -->