<?= $this->extend('admin/plantillas/general') ?>

<?= $this->section('title') ?>
Nuevo Usuario
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-12">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Crear Nuevo Usuario</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="form-group">
                  <form action="/usuario/store" method="POST">
                  <div class="form-group">
                    
                        <label>Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Escribe tu Nombre">
                    </div>
                    <div class="form-group">
                        <label>Telefono</label>
                        <input type="text" name="telefono" class="form-control" placeholder="Escribe tu Telefono">
                    </div>
                    <div class="form-group">
                        <label>Correo</label>
                        <input type="text" name="correo" class="form-control" placeholder="Escribe tu Correo">
                    </div>
                    <div class="form-group">
                        <label>Dirección</label>
                        <input type="text" name="direccion" class="form-control" placeholder="Escribe tu Dirección">
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="text" name="contrasena" class="form-control" placeholder="Escribe tu Contraseña">
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