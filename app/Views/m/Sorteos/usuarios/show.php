<?= $this->extend('admin/plantillas/general') ?>

<?= $this->section('title') ?>
Producto
<?= $this->endSection() ?>

<?= $this->section('content') ?>
  <?php if($usuario){?>
        
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
    <h2><?= $usuario["nombre"]." ".$usuario["apellidos"];?></h2>
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <h2 class="card-title">Card title</h2>
      <ul>
        <li class="card-text">telefono: <?= $usuario["telefono"];?></li>
        <li class="card-text">contraseña: <?= $usuario["contrasena"];?></li>
        <li class="card-text">correo: <?= $usuario["correo"];?></li>
        <li class="card-text">estado: <?= $usuario["estado"];?></li>
        <li class="card-text">ciudad: <?= $usuario["ciudad"];?></li>
        <li class="card-text">dirección: <?= $usuario["direccion"];?></li>
    </ul>
      </div>
    </div>
  </div>
</div>
<?php }else{ ?>
        <br>
        <h2 styles="">No existe este usuario</h2>
        <a href="/usuario/index">Volver a la lista</a>
    <?php } ?>
    
    
    
    
    <?= $this->endSection() ?>