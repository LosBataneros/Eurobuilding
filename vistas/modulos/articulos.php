<section>

    <aside id="leftsidebar" class="sidebar">

      <div class="user-info">
          <div class="image">
              <img src="<?php echo $frontend; ?>vistas/assets/images/logo.png" width="100%" height="100%" alt="User" />
          </div>
          <div class="info-container">
              <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><p style="font-size:20px; ">Administrador</p></div>
              <div class="btn-group user-helper-dropdown">
                <a href="<?php echo $frontend; ?>salir" style="color:#fff;"><h4> <span class="icon-input"></span>SALIR</h4></a>
              </div>
          </div>
      </div>

        <div class="menu">
            <ul class="list">
                <li class="header">MENU</li>

                <li>
                    <a href="<?php echo $frontend; ?>inicio">
                      <i  class="fa fa-home" style="font-size:25px;"></i>
                      <span>Inicio</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $frontend; ?>mudanzas">
                      <i class="fas fa-people-carry" style="font-size:25px;"></i>
                      <span>Mudanzas</span>
                    </a>
                </li>
                <li class="active">
                    <a href="<?php echo $frontend; ?>articulos">
                      <i class="fas fa-utensils" style="font-size:25px;"></i>
                      <span>Articulos</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $frontend; ?>reportes">
                      <i  class="fa fa-file-excel" style="font-size:25px;"></i>
                      <span>Reportes</span>
                    </a>
                </li>

            </ul>
        </div>

        <div class="legal">
          <center>
            <div class="copyright">
               <a href="<?php echo $frontend; ?>inicio"><?php echo APP_COPY; ?></a>
            </div>
            <div class="copyright">
               <a href="<?php echo $frontend; ?>inicio">Administración - Consumos carniceria</a>
            </div>
          </center>
        </div>

    </aside>

</section>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            CONSULTA ARTICULOS
                        </h2>
                        <ul class="header-dropdown m-r--5">
                          <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#nuevoArticulo">Agregar un articulo</button>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped tablaArticulos">
                                <thead>
                                    <tr>
                                        <th style="width:10px;">Id</th>
                                        <th style="width:110px;">fecha</th>
                                        <th>Titulo</th>
                                        <th>Descripción</th>
                                        <th style="width:75px;">Opciones</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="nuevoArticulo" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <form method="POST">
                  <div class="msg">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>Registrar Articulo</h4>
                  </div>
                  <hr><br>
                  <div class="input-group">
                    <span class="input-group-addon">
                    <i class="fa fa-tasks" style="font-size:25px;"></i>
                    </span>
                    <div class="form-line">
                      <input type="text" class="form-control" name="tituloArticulo" placeholder="Titulo del articulo *" autocomplete="off" required>
                    </div>
                  </div>
                  <br>
                  <div class="input-group">
                    <span class="input-group-addon">
                    <i class="fas fa-utensils" style="font-size:25px;"></i>
                    </span>
                    <div class="form-line">
                      <input type="text" class="form-control" name="descripcionArticulo" placeholder="Descripción del articulo" autocomplete="off">
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cerrar</button>
                <button type="submit" name="crearArticulo" class="btn btn-danger waves-effect">Registrar</button>
              </div>
            </form>

            <?php

               $crearArticulos = new ControladorArticulos();
               $crearArticulos -> ctrCrearArticulo();

            ?>

          </div>
        </div>
      </div>

      <div class="modal fade" id="editarArticulo" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <form method="POST">
                <div class="msg">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4>Editar Articulo</h4>
                </div>
                <hr><br>
                <div class="input-group">

                  <span class="input-group-addon">
                  <i class="fa fa-tasks" style="font-size:25px;"></i>
                  </span>
                  <div class="form-line">
                    <input type="hidden" class="idArticulo" name="idArticulo">
                    <input type="text" class="form-control editarTitulo" name="editarTituloArticulo" autocomplete="off" required>
                  </div>
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon">
                  <i class="fas fa-utensils" style="font-size:25px;"></i>
                  </span>
                  <div class="form-line">
                    <input type="text" class="form-control editarDescripcion" name="editarDescripcionArticulo" autocomplete="off">
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cerrar</button>
              <button type="submit" name="editarArticulo" class="btn btn-danger waves-effect">Guardar</button>
            </div>
          </form>

          <?php

             $editarArticulos = new ControladorArticulos();
             $editarArticulos -> ctrEditarArticulo();

          ?>

        </div>
      </div>
    </div>



      <?php

        $eliminarArticulos = new ControladorArticulos();
        $eliminarArticulos -> ctrEliminarArticulo();

      ?>
