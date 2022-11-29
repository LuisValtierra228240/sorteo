<?= $this->extend('admin/plantillas/general') ?>

<?= $this->section('title') ?>
Sorteos
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
              <a class="btn btn-success" href="/sorteo/create">Nuevo Sorteo</a>
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
                    <th scope="col">Ganador del Sorteo</th>
                    <th scope="col">Fecha del Sorteo</th>
                    <th scope="col">Fecha de Creación</th>
                    <th scope="col">Precio del boleto</th>
                    <th scope="col">Premio</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Creador del Sorteo</th>
                    <th scope="col">imagen</th>
                    <th scope="col">Cantidad de Boletos</th>
                </tr>
                  </thead>
                  <tbody>
                  <?php
                foreach ($sorteos as $sorteo) {
            ?>
            <tr>
            <th scope="row"><?= $sorteo["id"];?></td>
            
            <td><?= $sorteo["nombre"];?></td>
            <td><?= $sorteo["idGanador"];?></td>
            <td><?= $sorteo["fecha"];?></td>
            <td><?= $sorteo["creacion"];?></td>
            <td><?= $sorteo["precio"];?></td>
            <td><?= $sorteo["premio"];?></td>
            <td><?= $sorteo["descripcion"];?></td>
            <td><?= $sorteo["idCreador"];?></td>
            <td> <img src ="<?= $sorteo["imagen"];?>" style="width:130px;"></td>
            <td><?= $sorteo["cantidadBoletos"];?></td>
            <td>
                <a class="btn btn-primary" href="<?php base_url(); ?>/sorteo/show/<?= $sorteo["id"]; ?>"> <i class="fa fa-search" aria-hidden="true"></i> </a>
                <a  class="btn btn-success" href="<?php base_url(); ?>/sorteo/edit/<?= $sorteo["id"]; ?>"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
                <!-- <a class="btn btn-danger" href="/sorteo/delete/<?= $sorteo["id"] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a> -->
                <button class="btn btn-danger" onClick="eliminar(<?= $sorteo["id"]; ?>)" >   <i class="fa fa-trash-o" aria-hidden="true"></i> </button>
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

                  location.href = "<?php base_url(); ?>/sorteo/delete/<?= $sorteo["id"]; ?>";

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