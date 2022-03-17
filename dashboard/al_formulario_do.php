<?php 
  include("./bd/conex.php");
  date_default_timezone_set('America/Mexico_City');
  $FechaHoy=date("d/m/Y : H : i : s");
?>

<form id="frm_add" action="" method="post">
<div class="modal fade" id="myModals" role="dialog">
  <div class="modal-dialog modal-lg" role="document">

      <!-- Modal content-->
   
      <div class="modal-content">
        <div class="modal-header">
          
          <h2 style="color:blue;text-align:center" class="modal-title">Nuevo Medico</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>

        </div>
         <!-- Inica el body -->
        <div style="color:#000000;background:#EFFBF5" class="modal-body">
        
          <div class="row">
            <div class="col">
              <div class="md-form mt-0">
                <div class="md-form">
                  
                  <label>Id medico</label>
                </div>
              </div>
            </div>
      


          </div>


          <div class="row">
            <div class="col">
              <div class="md-form mt-0">
                <div class="md-form">
                  <input type="text" required name="fn_nombre" id="fi_nombre" maxlength="35" class="form-control">
                  <label>Nombre</label>
                </div>
              </div>
            </div>
            
            <div class="col">
              <div class="md-form mt-0">
                <div class="md-form">
                  <input type="text" required name="fn_apaterno" id="fi_apaterno" maxlength="35" class="form-control">
                  <label>A. Paterno</label>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="md-form mt-0">
                <div class="md-form">
                  <input type="text" required name="fn_amaterno" id="fi_amaterno" maxlength="35" class="form-control ">
                  <label>A. Materno</label>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="md-form mt-0">
                <div class="md-form">
                <input type="text" required name="fn_rfc" id="fi_rfc" maxlength="15" class="form-control">
                <label>RFC</label>
                </div>
              </div>
            </div>


          </div>

          <div class="row">


            <div class="col">
              <div class="md-form mt-0">
                <div class="md-form">
                Estado
                <select name="Estado" id="fi_estado"  class="form-control">
                    <?php
                      $sql="SELECT * FROM co_estados where estado = 'A'";
                      $rec=mysqli_query($conexion_sid,$sql);
                      while ($row=mysqli_fetch_array($rec))
                        {
                          echo "<option value='".$estado=$row['id_estado']."' >";
                          echo $row['desc_estado'];
                          echo "</option>";
                        }
                        
                        echo $estado ;
                    ?>
                  </select>
                </div>
              </div>
            </div>
          </div>

           <div class="row">
            <div class="col">
              <div class="md-form mt-0">
                <div class="md-form">
                 Municipio 
                <select name="Municipio" id="fi_Municipio" class="form-control">
                    
                  </select>
                </div>
              </div>
            </div>
            
            <div class="col">
              <div class="md-form mt-0">
                <div class="md-form">
                  Localidad
                <select name="Localidad" id="fi_Localidad" class="form-control">
                    
                  </select>
                </div>
              </div>
            </div>
          </div>




          
          <div class="row">
          <div class="col">
              <div class="md-form mt-0">
                <div class="md-form">
                  Medico
                        <select class="" name="fn_med" id="fi_med">
                          <option value="P">Perdido </option>
                          <OPTION VALUE="N">Nuevo </OPTION>
                          <OPTION VALUE="E">Existente </OPTION>
                        </select>
                  
                </div>
              </div>
            </div>

            <div class="col">
              <div class="md-form mt-0">
                <div class="md-form">
                  Adscrito a Arca 
                        <select class="" required name="fn_ads" id="fn_ads">
                          <option value="S">SI </option>
                          <OPTION VALUE="N">NO </OPTION>
                        </select>
                </div>
              </div>
            </div>
          
            <div class="col">
              <div class="md-form mt-0">
                <div class="md-form">
                <input type="date" required name="fn_falta" id="fi_falta" maxlength="15">
                <label>Fecha Alta</label>
                </div>
              </div>
            </div>

          

         
          </div>



          







          <div class="row">
            <div class="col">
              <div class="md-form mt-0">
                <div class="md-form">
                
                <input type="text" name="fn_usu" id="fi_usu" maxlength="30" class="form-control">
                <label>Usuario</label>
                </div>
              </div>
            </div>
          
           <div class="col">
              <div class="md-form mt-0">
                <div class="md-form">
                  
                  <input type="password" name="pass" id="fi_pass" maxlength="20" class="form-control">
                  <label>Contraseña</label>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="md-form mt-0">
                <div class="md-form">
                  
                  Medico Consulta Ext. Cuenta
                  <select class="" id="fi_acti" name="fn_acti">
                       <option value="1">SI</option>
                       <option value="0">NO</option>
                    </select>
                </div>
              </div>
            </div>
            
          </div>


           

           <div class="row">
            <div class="col">
              <div class="md-form mt-0">
                <div class="md-form">
                <input type="text" readonly="readonly" disabled  value="<?php echo $FechaHoy;?>" name="fn_factualiza" id="fi_factualiza" maxlength="15">
                <label>Fecha Actualización</label>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="md-form mt-0">
                <div class="md-form">
                  Estado del Medico 
                <select class="" id="estado_reg" name="estado_reg">
                       <option value="A">Activo</option>
                       <option value="S">Suspendido</option>
                    </select>


                </div>
              </div>
            </div>
          </div>  

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success" id="btniniciar"  >Ingresar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
</form>



<!--Editar medicos-->
<!-- SCRIPT PARA ACTUALIZAR -->

