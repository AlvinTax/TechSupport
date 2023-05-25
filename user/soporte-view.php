<div class="container">
  <div class="row well">
    <div class="col-sm-3">
      <img src="img/repair.png" class="img-responsive" alt="Image">
    </div>
    <div class="col-sm-9 lead">
      <h2 class="text-info">Bienvenido al centro de soporte de TechSupport</h2>
      <p>Si tiene problemas con su equipo, nosotros lo respondemos y solucionaremos su 
        problema.<br>Si ya nos ha solicitado un mantenimiento puede consultar el estado de este 
        mediante su <strong>Tracking ID</strong>.</p>
    </div>
  </div><!--fin row 1-->

  <div class="row">
    <div class="col-sm-6">
      <div class="panel panel-info">
        <div class="panel-heading text-center"><i class="fa fa-check-square"></i>&nbsp;<strong>Nuevo Mantenimeinto</strong></div>
        <div class="panel-body text-center">
          <img src="./img/newt.png" alt="">
          <h4>Solicitar nuevo mantenimiento</h4>
          <p class="text-justify">Ingresar nuevo. Si desea actualizar una peticion ya 
            realizada utiliza el formulario de la derecha <em>Para comprobar el estado de su mantenimiento</em>, 
            solamente los <strong>usuarios registrados</strong> pueden solocitar un nuevo mantenimiento.</p>
          <p>Para solicitar un un nuevo <strong>mantenimiento</strong> has click en el siguiente boton</p>
          <a type="button" class="btn btn-info" href="./index.php?view=ticket">Solicitar Mantenimiento</a>
        </div>
      </div>
    </div><!--fin col-md-6-->
    
    <div class="col-sm-6">
      <div class="panel panel-danger">
        <div class="panel-heading text-center"><i class="fa fa-link"></i>&nbsp;<strong>Comprobar estado del Mantenimeinto</strong></div>
        <div class="panel-body text-center">
          <img src="./img/old_ticket.png" alt="">
          <h4>Ver el estado del mantenimiento</h4>
          <form class="form-horizontal" role="form" method="GET" action="./index.php">
            <input type="hidden" name="view" value="ticketcon">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                  <input type="email" class="form-control" name="email_consul" placeholder="Email" required="">
              </div>
            </div>
            <div class="form-group">
              <label  class="col-sm-2 control-label">Trk ID</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="id_consul" placeholder="Tracking ID" required="">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Ver Estado</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div><!--fin col-md-6-->
  </div><!--fin row 2-->
</div><!--fin container-->