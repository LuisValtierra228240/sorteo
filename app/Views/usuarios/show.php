<?= $this->extend('admin/plantillas/general') ?>

<?= $this->section('title') ?>
Usuario
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <?php if($usuario){?>
        
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
    <img src="<?= $usuario["foto"];?>" alt="" style="width:200px;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <h5 class="card-title"><?= $usuario["nombre"];?></h5>
      <ul>
        <li class="card-text">Telefono: <?= $usuario["telefono"];?></li>
        <li class="card-text">Correo: <?= $usuario["correo"];?></li>
        <li class="card-text">Dirección: <?= $usuario["direccion"];?></li>
        <li class="card-text">Contraseña: <?= $usuario["contrasena"];?></li>
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