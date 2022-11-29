<a href="/producto/create">Nuevo Producto</a>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>

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
                foreach ($productos as $producto) {
            ?>
            <tr>
            <th scope="row"><?= $producto["id"];?></td>
            <td><?= $producto["nombre"];?></td>
            <td> <img src ="<?= $producto["imagen"];?>" style="width:130px;"></td>
            <td><?= $producto["marca"];?></td>
            <td>$<?= $producto["precio"];?></td>
            <td><?= $producto["codigo"];?></td>
            <td><?= $producto["timestamp"];?></td>
            <td>
                <a href="/producto/show/<?= $producto["id"] ?>">Ver</a>
                <a href="/producto/edit/<?= $producto["id"] ?>">Editar</a>
                <a href="/producto/delete/<?= $producto["id"] ?>">Eliminar</a>
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