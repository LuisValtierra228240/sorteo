<?= $this->extend('admin/plantillas/general') ?>

<?= $this->section('title') ?>
Nuevo Participante
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-12">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Crear Nuevo Participante</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="form-group">
                  <form action="/participante/store" method="POST">
                  
                    <div class="form-group">
                        <label>boleto</label>
                        <input type="text" name="boleto" class="form-control" placeholder="Escribe el boleto">
                    </div>
                    <div class="form-group">
                        <label>idSorteo</label>
                        <input type="text" name="idSorteo" class="form-control" placeholder="Escribe el sorteo">
                    </div>
                    <div class="form-group">
                        <label>idUsuario</label>
                        <input type="text" name="idUsuario" class="form-control" placeholder="Escribe el usuario">
                    </div>
                    <div class="form-group">
                        <label>estadoPago</label>
                        <input type="text" name="estadoPago" class="form-control" placeholder="Escribe el estado del pago">
                    </div>
                    <div class="form-group">
                        <label>cantidadPago</label>
                        <input type="text" name="cantidadPago" class="form-control" placeholder="Escribe la cantidad del pago">
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