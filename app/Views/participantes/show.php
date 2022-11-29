<?= $this->extend('admin/plantillas/general') ?>

<?= $this->section('title') ?>
Participante
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <?php if($participante){?>
        
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-12">
      <div class="card-body">
      <h5 class="card-title"><?= $participante["idUsuario"];?></h5>
      <ul>
        <li class="card-text">Participa en: <?= $participante["idSorteo"];?></li>
        <li class="card-text">Boleto: <?= $participante["boleto"];?></li>
        <li class="card-text">Estado del Pago: <?= $participante["estadoPago"];?></li>
        <li class="card-text">Cantidad del Pago: <?= $participante["cantidadPago"];?></li>
        <li class="card-text">Fecha de la Compra: <?= $participante["fechaCompra"];?></li>
    </ul>
      </div>
    </div>
  </div>
</div>
<?php }else{ ?>
        <br>
        <h2 styles="">No existe este participante</h2>
        <a href="/participante/index">Volver a la lista</a>
    <?php } ?>
    
    
    
    
    <?= $this->endSection() ?>