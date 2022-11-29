<?= $this->extend('admin/plantillas/general') ?>

<?= $this->section('title') ?>
Editar Sorteo
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-12">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Editar un Sorteo</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-body">
                  <div class="form-group">
                  <form action="/sorteo/update/<?=$sorteo["id"];?>" method="POST">

                  <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="nombre" value="<?=$sorteo["nombre"];?>" class="form-control" placeholder="Escribe el nombre">
                    </div>
                    <div class="form-group">
                        <label>Ganador</label>
                        <input type="text" name="idGanador" value="<?=$sorteo["idGanador"];?>" class="form-control" placeholder="Escribe el ganador">
                    </div>
                    <div class="form-group">
                        <label>Fecha</label>
                        <input type="text" name="fecha" value="<?=$sorteo["fecha"];?>" class="form-control" placeholder="Escriba la fecha">
                    </div>
                    <div class="form-group">
                        <label>Precio</label>
                        <input type="text" name="precio" value="<?=$sorteo["precio"];?>" class="form-control" placeholder="Escribe el precio de entrada">
                    </div>
                    <div class="form-group">
                        <label>premio</label>
                        <input type="text" name="premio" value="<?=$sorteo["premio"];?>" class="form-control" placeholder="Escribe el premio">
                    </div>
                    <div class="form-group">
                        <label>descripción</label>
                        <input type="text" name="descripcion" value="<?=$sorteo["descripcion"];?>" class="form-control" placeholder="Escribe la descripción">
                    </div>
                    <div class="form-group">
                        <label>Creador</label>
                        <input type="text" name="idCreador" value="<?=$sorteo["idCreador"];?>" class="form-control" placeholder="Escribe el Creador">
                    </div>
                    <div class="form-group">
                        <label>Cantidad de Boletos</label>
                        <input type="text" name="cantidadBoletos" value="<?=$sorteo["cantidadBoletos"];?>" class="form-control" placeholder="Escribe la cantidad de boletos (10, 100 o 1000)">
                    </div>
                    
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="foto">
                        <label class="custom-file-label">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
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