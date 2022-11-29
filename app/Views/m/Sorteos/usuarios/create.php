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
                    <label>Apellidos</label>
                    <input type="text" name="apellidos" class="form-control" placeholder="Escribe tus Apellidos">
                  </div>
                  <div class="form-group">
                    <label>Telefono</label>
                    <input type="text" name="telefono" class="form-control" placeholder="Escribe tu Telefono">
                  </div>
                  <div class="form-group">
                    <label>Contraseña</label>
                    <input type="text" name="contrasena" class="form-control" placeholder="Escribe tu Contraseña">
                  </div>
                  <div class="form-group">
                    <label>Correo</label>
                    <input type="text" name="correo" class="form-control" placeholder="Escribe tu Correo">
                  </div>    
                  <div class="form-group">
                    <label>Estado</label>
                    <input type="text" name="estado" class="form-control" placeholder="Escribe tu Estado">
                  </div>
                  <div class="form-group">
                    <label>Ciudad</label>
                    <input type="text" name="ciudad" class="form-control" placeholder="Escribe tu Ciudad">
                  </div>
                  <div class="form-group">
                    <label>Direccion</label>
                    <input type="text" name="direccion" class="form-control" placeholder="Escribe tu Dirección">  
                    </div>
                  
                  <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Escribe tu Nombre">
                    </div>
                    <div class="form-group">
                        <label>Precio</label>
                        <input type="text" name="precio" class="form-control" placeholder="Escribe un Precio">
                    </div>
                    <div class="form-group">
                        <label>Marca</label>
                        <input type="text" name="marca" class="form-control" placeholder="Escribe la Marca">
                    </div>
                    <div class="form-group">
                        <label>Codigo</label>
                        <input type="text" name="codigo" class="form-control" placeholder="Escribe el Codigo">
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
