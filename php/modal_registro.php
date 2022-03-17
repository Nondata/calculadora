<div class="modal fade" id="modal_Cuenta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear cuenta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class ="login-form validate-form" id ="formAccount" action="" method ="post" >
          <div class="form-group">
            <label>Nombre(s)</label>
            <input type="text" class="form-control" id="nombre_s" require>
          </div>
          <div class="form-group">
            <label>Apellido Paterno</label>
            <input type="text" class="form-control" id="ap_paterno" require></input>
          </div>
          <div class="form-group">
            <label>Apellido Materno</label>
            <input type="text" class="form-control" id="ap_materno" require> 
          </div>
          <div class="form-group">
              <label>Nombre de usuario</label>
              <input type="text" class="form-control" id="nombre_usuario" require>
          </div>
          <div class="form-group">
              <label>Alias</label>
              <input type="text" class="form-control" id="alias" require>
          </div>
          <div class="form-group">
          <label>Contrase&ntilde;a</label>
          <input type="password" class ="form-control" require id="password_registro"></div>
        
        <small id="helpId" class="text-muted">Recuerde llenar todos los campos</small>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" name ="submit" class="btn btn-primary login-form-btn">Crear cuenta</button>
        </form>
      </div>
    </div>
  </div>
</div>