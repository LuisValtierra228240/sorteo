<?= $this->extend('admin/plantillas/general') ?>

<?= $this->section('title') ?>
Usuarios
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <?php
    if(isset($_GET["m"])){ ?>
        <h2 styles="#5f5;"><?=$_GET["m"]?></h2>
        <?php
    }
    ?>

    <div class="row justify-content-center">
    <!-- /.col-md-6 -->
    <div class="col-lg-11">

<div class="card">
              <div class="card-header">
              <a class="btn btn-success" href="/usuario/create">Nuevo Usuario</a>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">nombre</th>
                    <th scope="col">apellidos</th>
                    <th scope="col">telefono</th>
                    <th scope="col">contraseña</th>
                    <th scope="col">correo</th>
                    <th scope="col">estado</th>
                    <th scope="col">ciudad</th>
                    <th scope="col">direccion</th>
                </tr>
                  </thead>
                  <tbody>
                  <?php
                foreach ($usuarios as $usuario) {
            ?>
            <tr>
            <th scope="row"><?= $usuario["id"];?></td>
            <td><?= $usuario["nombre"];?></td>
            <td><?= $usuario["apellidos"];?></td>
            <td><?= $usuario["telefono"];?></td>
            <td><?= $usuario["contrasena"];?></td>
            <td><?= $usuario["correo"];?></td>
            <td><?= $usuario["estado"];?></td>
            <td><?= $usuario["ciudad"];?></td>
            <td><?= $usuario["direccion"];?></td>
            <td>
                <a class="btn btn-primary" href="<?php base_url(); ?>/usuario/show/<?= $usuario["id"]; ?>"> <i class="fa fa-search" aria-hidden="true"></i> </a>
                <a  class="btn btn-success" href="<?php base_url(); ?>/usuario/edit/<?= $usuario["id"]; ?>"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
                <button class="btn btn-danger" onClick="eliminar(<?= $usuario["id"]; ?>)" >   <i class="fa fa-trash-o" aria-hidden="true"></i> </button>
            </td>
            </tr>
            <?php
                }
            ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
    </div>
    <!-- /.col-md-6 -->


    </div> <!-- fin row principal -->

    <?= $this->endSection() ?>

    <?= $this->section('js') ?>   
    <script>


        function eliminar(id){// eliminar

          //sweet aler
          Swal.fire({
              title: 'Estas seguro?',
              text: "Se eliminara permanetemente!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Si,eliminar!'
            }).then((result) => {
              if (result.isConfirmed) {

                  location.href = "<?php base_url(); ?>/usuario/delete/<?= $usuario["id"]; ?>";

               /* Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )*/

              }
            }) 
            //fin sweet alert

        }//fin eliminar


/*

      */

    </script>

 <?= $this->endSection() ?>