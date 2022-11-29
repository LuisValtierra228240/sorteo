<?= $this->extend('admin/plantillas/general') ?>

<?= $this->section('title') ?>
Nuevo Producto
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-12">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Crear Nuevo Producto</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                  <form action="/producto/update/<?=$producto["id"];?>" method="POST">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="nombre" value="<?=$producto["nombre"];?>" class="form-control" placeholder="Escribe tu Nombre">
                    </div>
                    <div class="form-group">
                        <label>Precio</label>
                        <input type="text" name="precio"  value="<?=$producto["precio"];?>" class="form-control" placeholder="Escribe un Precio">
                    </div>
                    <div class="form-group">
                        <label>Marca</label>
                        <input type="text" name="marca" value="<?=$producto["marca"];?>" class="form-control" placeholder="Escribe la Marca">
                    </div>
                    <div class="form-group">
                        <label>Codigo</label>
                        <input type="text" name="codigo" value="<?=$producto["codigo"];?>" class="form-control" placeholder="Escribe el Codigo">
                    </div>
                    <img src="<?= $producto["imagen"]; ?>" style="width:200px;">
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

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto: </title>
</head>
<body>
    <form action="/producto/update/<?=$producto["id"];?>" method="POST">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?=$producto["nombre"];?>">
        <br>
        <label>Precio</label>
        <input type="text" name="precio" value="<?=$producto["precio"];?>">
        <br>
        <label>Marca</label>
        <input type="text" name="marca" value="<?=$producto["marca"];?>">
        <br>
        <label>Codigo</label>
        <input type="text" name="codigo" value="<?=$producto["codigo"];?>">
        <br>
        <label>Imagen</label>
        <input type="text" name="imagen" value="<?=$producto["imagen"];?>">
        <br>
        <button type="submit">Editar</button>
    </form>
</body>
</html> -->