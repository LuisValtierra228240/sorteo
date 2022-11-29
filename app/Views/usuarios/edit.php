<?= $this->extend('admin/plantillas/general') ?>

<?= $this->section('title') ?>
Editar Usuario
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-12">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Editar un Usuario</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                            
              <div class="card-body">
                  <div class="form-group">
                  <form action="/usuario/update/<?=$usuario["id"];?>" method="POST">
                    <div class="form-group">

                    <label>Nombre</label>
                        <input type="text" name="nombre" value="<?=$usuario["nombre"];?>" class="form-control" placeholder="Escribe tu Nombre">
                    </div>
                    <div class="form-group">
                        <label>Telefono</label>
                        <input type="text" name="telefono" value="<?=$usuario["telefono"];?>" class="form-control" placeholder="Escribe tu Telefono">
                    </div>
                    <div class="form-group">
                        <label>Correo</label>
                        <input type="text" name="correo" value="<?=$usuario["correo"];?>" class="form-control" placeholder="Escribe tu Correo">
                    </div>
                    <div class="form-group">
                        <label>Dirección</label>
                        <input type="text" name="direccion" value="<?=$usuario["direccion"];?>" class="form-control" placeholder="Escribe tu Dirección">
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="text" name="contrasena" value="<?=$usuario["contrasena"];?>" class="form-control" placeholder="Escribe tu Contraseña">
                    </div>

                    <img src="<?= $usuario["foto"]; ?>" style="width:200px;">
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="imagen">
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