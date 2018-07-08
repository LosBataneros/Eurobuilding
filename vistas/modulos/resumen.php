<div class="block-header">
    <h2>ESTADISTICAS</h2>
</div>
<div class="row">
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="info-box bg-orange hover-zoom-effect">
          <div class="icon">
            <i class="fas fa-utensils"></i>
          </div>
          <div class="content">
              <div class="text">ARTICULOS</div>
               <?php $articulosTotal = ControladorArticulos::ctrMostrarArticulosTotal(); ?>
              <div class="number"><span><?php echo $articulosTotal["counta"];?></span></div>
          </div>
      </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="info-box bg-light-blue hover-zoom-effect">
          <div class="icon">
            <i class="fas fa-people-carry"></i>
          </div>
          <div class="content">
              <div class="text">MUDANZAS</div>
               <?php $mudanzasTotal = ControladorMudanzas::ctrMostrarMudanzasTotal(); ?>
              <div class="number"><span><?php echo $mudanzasTotal["countm"];?></span></div>
          </div>
      </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="info-box bg-cyan hover-zoom-effect">
          <div class="icon">
              <i class="fa fa-download"></i>
          </div>
          <div class="content">
              <div class="text">EJEMPLO</div>

              <div class="number"><span><?php echo $mudanzasTotal["countm"];?></span></div>
          </div>
      </div>
  </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-red hover-zoom-effect">
            <div class="icon">
              <i class="fa fa-clock"></i>
            </div>
            <div class="content">
                <div class="text">HORA ACTUAL</div>
                <div class="number"><span id="liveclock"></span></div>
            </div>
        </div>
    </div>
</div>
