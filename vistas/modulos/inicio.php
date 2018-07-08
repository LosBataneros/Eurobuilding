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

                <li class="active">
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
