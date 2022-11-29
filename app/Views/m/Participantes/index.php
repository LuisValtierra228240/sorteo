<?= $this->extend('admin/plantillas/general') ?>

<?= $this->section('title') ?>
Participantes
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
              <a class="btn btn-success" href="/participante/create">Nuevo Participante</a>
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
                    <th scope="col">imagen</th>
                    <th scope="col">marca</th>
                    <th scope="col">precio</th>
                    <th scope="col">codigo</th>
                    <th scope="col">fecha de creación</th>
                    <th scope="col"></th>
                </tr>
                  </thead>
                  <tbody>
                  <?php
                foreach ($participantes as $participante) {
            ?>
            <tr>
            <th scope="row"><?= $participante["id"];?></td>
            <td><?= $participante["nombre"];?></td>
            <td> <img src ="<?= $participante["imagen"];?>" style="width:130px;"></td>
            <td><?= $participante["marca"];?></td>
            <td>$<?= $participante["precio"];?></td>
            <td><?= $participante["codigo"];?></td>
            <td><?= $participante["timestamp"];?></td>
            <td>
                <a class="btn btn-primary" href="<?php base_url(); ?>/participante/show/<?= $participante["id"]; ?>"> <i class="fa fa-search" aria-hidden="true"></i> </a>
                <a  class="btn btn-success" href="<?php base_url(); ?>/participante/edit/<?= $participante["id"]; ?>"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
                <!-- <a class="btn btn-danger" href="/participante/delete/<?= $participante["id"] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a> -->
                <button class="btn btn-danger" onClick="eliminar(<?= $participante["id"]; ?>)" >   <i class="fa fa-trash-o" aria-hidden="true"></i> </button>
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

                  location.href = "<?php base_url(); ?>/participante/delete/<?= $participante["id"]; ?>";

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