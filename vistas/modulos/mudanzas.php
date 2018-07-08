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
                <li class="active">
                    <a href="<?php echo $frontend; ?>mudanzas">
                      <i class="fas fa-people-carry" style="font-size:25px;"></i>
                      <span>Mudanzas</span>
                    </a>
                </li>
                <li>
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
                            CONSULTA MUDANZAS
                        </h2>
                        <ul class="header-dropdown m-r--5">
                          <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#nuevaMudanza">Agregar un articulo</button>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped tablaMudanzas">
                                <thead>
                                    <tr>
                                        <th style="width:10px;">Id</th>
                                        <th style="width:110px;">fecha</th>
                                        <th>Origen</th>
                                        <th>Destino</th>
                                        <th>Articulo</th>
                                        <th>Cantidad</th>
                                        <th>Merma</th>
                                        <th>Costo</th>
                                        <th style="width:75px;">Opciones</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="nuevaMudanza" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <form method="POST">
                  <div class="msg">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>Registrar Mudanza</h4>
                  </div>
                  <hr><br>
                  <div class="input-group">
                    <span class="input-group-addon">
                    <i class="fas fa-calendar-alt" style="font-size:25px;"></i>
                    </span>
                    <div class="form-line">
                      <p>FECHA</p>
                      <input type="date" class="form-control" name="fechaMudanza" required>
                    </div>
                  </div>
                  <br>
                  <div class="input-group">
                    <span class="input-group-addon">
                    <i class="fa fa-tasks" style="font-size:25px;"></i>
                    </span>
                    <div class="form-line">
                      <p>Selecione una categoria</p>

                      <select name="origenMudanza" class="selectpicker" data-width="100%">
                        <?php

                        $item = null;
                        $valor = null;

                        $departamentos = ControladorDepartamentos::ctrMostrarDepartamentos($item, $valor);

                          foreach ($departamentos as $key => $value) {
                            echo'
                                <option value="'.$value["id_departamento"].'">'.$value["titulo_dep"].'</option>
                            ';
                        }
                        ?>
                      </select>

                    </div>
                  </div>
                  <br>
                  <div class="input-group">
                    <span class="input-group-addon">
                    <i class="fa fa-tasks" style="font-size:25px;"></i>
                    </span>
                    <div class="form-line">
                      <p>Selecione una categoria</p>

                      <select name="destinoMudanza" class="selectpicker" data-width="100%">
                        <?php

                          foreach ($departamentos as $key => $value) {
                            echo'
                                <option value="'.$value["id_departamento"].'">'.$value["titulo_dep"].'</option>
                            ';
                        }
                        ?>
                      </select>

                    </div>
                  </div>
                  <br>
                  <div class="input-group">
                    <span class="input-group-addon">
                    <i class="fa fa-tasks" style="font-size:25px;"></i>
                    </span>
                    <div class="form-line">
                      <p>Selecione una categoria</p>

                      <select name="articuloMudanza" class="selectpicker" data-width="100%">
                        <?php

                        $item = null;
                        $valor = null;

                        $articulos = ControladorArticulos::ctrMostrarArticulos($item, $valor);

                          foreach ($articulos as $key => $value) {
                            echo'
                                <option value="'.$value["id_articulo"].'">'.$value["titulo"].'</option>
                            ';
                        }
                        ?>
                      </select>

                    </div>
                  </div>
                  <br>
                  <div class="input-group">
                    <span class="input-group-addon">
                    <i class="fas fa-sort-numeric-up" style="font-size:25px;"></i>
                    </span>
                    <div class="form-line">
                      <p>CANTIDAD</p>
                      <input type="text" name="cantidadMudanza" autocomplete="off" required>
                    </div>
                  </div>
                  <br>
                  <div class="input-group">
                    <span class="input-group-addon">
                    <i class="fas fa-signal" style="font-size:25px;"></i>
                    </span>
                    <div class="form-line">
                      <p>MERMA</p>
                      <input type="text" name="mermaMudanza" autocomplete="off" required>
                    </div>
                  </div>
                  <br>
                  <div class="input-group">
                    <span class="input-group-addon">
                    <i class="fas fa-dollar-sign" style="font-size:25px;"></i>
                    </span>
                    <div class="form-line">
                      <p>COSTO</p>
                      <input type="text" name="costoMudanza" autocomplete="off" required>
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cerrar</button>
                <button type="submit" name="crearMudanza" class="btn btn-danger waves-effect">Registrar</button>
              </div>
            </form>

            <?php

               $crearMudanzas = new ControladorMudanzas();
               $crearMudanzas -> ctrCrearMudanza();

            ?>

          </div>
        </div>
      </div>

      <div class="modal fade" id="editarMudanza" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <form method="POST">
                <div class="msg">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4>Editar Mudanza</h4>
                </div>
                <hr><br>
                <div class="input-group">
                  <span class="input-group-addon">
                  <i class="fas fa-calendar-alt" style="font-size:25px;"></i>
                  </span>
                  <div class="form-line">
                    <input type="hidden" class="idMudanza" name="idMudanza" required>
                    <p>FECHA</p>
                    <input type="date" class="form-control antiguaFecha" name="editarfechaMudanza" value="">
                  </div>
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon">
                  <i class="fa fa-tasks" style="font-size:25px;"></i>
                  </span>
                  <div class="form-line">
                    <p>DEPARTAMENTO DE ORIGEN</p>
                      <input type="text" name="editarOrigenMudanza" class="antiguaOrigen" value="" readonly="readonly">
                  </div>
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon">
                  <i class="fa fa-tasks" style="font-size:25px;"></i>
                  </span>
                  <div class="form-line">
                    <p>DEPARTAMENTO DESTINO</p>

                    <select name="editarDestinoMudanza" class="selectpicker" data-width="100%">
                      <?php

                        foreach ($departamentos as $key => $value) {
                          echo'
                              <option value="'.$value["id_departamento"].'">'.$value["titulo_dep"].'</option>
                          ';
                      }
                      ?>
                    </select>

                  </div>
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon">
                  <i class="fa fa-tasks" style="font-size:25px;"></i>
                  </span>
                  <div class="form-line">
                    <p>ARTICULO</p>
                    <select name="editarArticuloMudanza"  data-width="100%">
                       <optgroup label="Articulo actual">
                        <option class="antiguoArticulo" value=""></option>
                      </optgroup>
                      <optgroup label="Articulo nuevo">
                      <?php

                      $item = null;
                      $valor = null;

                      $articulos = ControladorArticulos::ctrMostrarArticulos($item, $valor);

                        foreach ($articulos as $key => $value) {
                          echo'
                              <option value="'.$value["id_articulo"].'">'.$value["titulo"].'</option>
                          ';
                      }
                      ?>
                      </optgroup>
                    </select>

                  </div>
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon">
                  <i class="fas fa-sort-numeric-up" style="font-size:25px;"></i>
                  </span>
                  <div class="form-line">
                    <p>CANTIDAD</p>
                    <input type="text" class="editarCantidad" name="editarCantidadMudanza" autocomplete="off" required>
                  </div>
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon">
                  <i class="fas fa-signal" style="font-size:25px;"></i>
                  </span>
                  <div class="form-line">
                    <p>MERMA</p>
                    <input type="text" class="editarMerma" name="editarMermaMudanza" autocomplete="off" required>
                  </div>
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon">
                  <i class="fas fa-dollar-sign" style="font-size:25px;"></i>
                  </span>
                  <div class="form-line">
                    <p>COSTO</p>
                    <input type="text" class="editarCosto" name="editarCostoMudanza" autocomplete="off" required>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cerrar</button>
              <button type="submit" name="editarMudanza" class="btn btn-danger waves-effect">Guardar</button>
            </div>
          </form>

          <?php

             $editarMudanzas = new ControladorMudanzas();
             $editarMudanzas -> ctrEditarMudanza();

          ?>

        </div>
      </div>
    </div>



      <?php

        $eliminarMudanzas = new ControladorMudanzas();
        $eliminarMudanzas -> ctrEliminarMudanza();

      ?>
