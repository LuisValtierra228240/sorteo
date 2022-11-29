<?= $this->extend('admin/plantillas/general') ?>

<?= $this->section('title') ?>
Sorteo
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <?php if($sorteo){?>
        
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
  <div class="col-md-4">
    <img src="<?= $sorteo["imagen"];?>" alt="" style="width:200px;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <h5 class="card-title"><?= $sorteo["nombre"];?></h5>
      <ul>
        <li class="card-text">Ganador: <?= $sorteo["idGanador"];?></li>
        <li class="card-text">Fecha: <?= $sorteo["fecha"];?></li>
        <li class="card-text">Fecha de Creación: <?= $sorteo["creacion"];?></li>
        <li class="card-text">Precio: <?= $sorteo["precio"];?></li>
        <li class="card-text">Precio: <?= $sorteo["premio"];?></li>
        <li class="card-text">Descripción: <?= $sorteo["descripcion"];?></li>
        <li class="card-text">Creador: <?= $sorteo["idCreador"];?></li>
        <li class="card-text">Cantidad de Boletos: <?= $sorteo["cantidadBoletos"];?></li>
    </ul>
      </div>
    </div>
  </div>
</div>
<?php }else{ ?>
        <br>
        <h2 styles="">No existe este sorteo</h2>
        <a href="/sorteo/index">Volver a la lista</a>
    <?php } ?>
    
    
    
    
    <?= $this->endSection() ?>