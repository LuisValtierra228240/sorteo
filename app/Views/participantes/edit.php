<?= $this->extend('admin/plantillas/general') ?>

<?= $this->section('title') ?>
Editar Participante
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-12">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Editar un Participante</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>

              <div class="card-body">
                  <div class="form-group">
                  <form action="/participante/update/<?=$participante["id"];?>" method="POST">

                    <div class="form-group">
                        <label>boleto</label>
                        <input type="text" name="boleto" value="<?=$participante["boleto"];?>" class="form-control" placeholder="Escribe el boleto">
                    </div>
                    <div class="form-group">
                        <label>idSorteo</label>
                        <input type="text" name="idSorteo" value="<?=$participante["idSorteo"];?>" class="form-control" placeholder="Escribe el sorteo">
                    </div>
                    <div class="form-group">
                        <label>idparticipante</label>
                        <input type="text" name="idparticipante" value="<?=$participante["idUsuario"];?>" class="form-control" placeholder="Escribe el participante">
                    </div>
                    <div class="form-group">
                        <label>estadoPago</label>
                        <input type="text" name="estadoPago" value="<?=$participante["estadoPago"];?>" class="form-control" placeholder="Escribe el estado del pago">
                    </div>
                    <div class="form-group">
                        <label>cantidadPago</label>
                        <input type="text" name="cantidadPago" value="<?=$participante["cantidadPago"];?>" class="form-control" placeholder="Escribe la cantidad del pago">
                    </div>

                    <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                </form>
                      </div>
                    </div>
                  </div>
                </div>
    </div>
</div>
<?= $this->endSection() ?>