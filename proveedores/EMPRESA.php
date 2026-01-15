<div id="content">
			<hr/>
			
<strong> <P class="mb-0 text-uppercase">
<img src="includes/contraer51.png" id="mostrar9" style="cursor:pointer;"/>
<img src="includes/contraer61.png" id="ocultar9" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;EMPRESA</P><div  id="mensajeEMPRESA"><div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $empresaporcentaje ; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $empresaporcentaje ; ?>%</div>
								</div>
                               </div></strong>
 
	        <div id="target9" style="display:block;"  class="content2">
        <div class="card">
          <div class="card-body">
		  
	<form class="row g-3 needs-validation was-validated" novalidate="" id="EMPRESAform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
					  
                        <div class="col-md-4">
                         <label for="validationCustom01" class="form-label">FECHA DE INGRESO:</label>
                          <input type="date" class="form-control" id="validationCustom01" required="" name="FECHA_INGRESO" value="<?php echo $FECHA_INGRESO; ?>"/>
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4">
                         <label for="validationCustom01" class="form-label">NUMERO DE COLABORADOR:</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $NUMERO_COLABORADOR; ?>" required="" name="NUMERO_COLABORADOR" />
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">NUMERO DE REGISTRO BIOMETRICO:</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $NUMERO_REGISTRO_BIOMETRICO; ?>" required="" name="NUMERO_REGISTRO_BIOMETRICO"/>
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">CONTRASEÑA DEL REGISTRO BIOMETRICO:</label>
                          <input type="password" class="form-control" id="validationCustom01" value="<?php echo $CONTRASENIA_REGISTRO_BIOMETRICO; ?>" required="" name="CONTRASENIA_REGISTRO_BIOMETRICO"/>
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">USUARIO CRM:</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $USUARIO_CRM; ?>" required="" name="USUARIO_CRM"/>
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">CONTRASEÑA CRM:</label>
                          <input type="password" class="form-control" id="validationCustom01" value="<?php echo $CONTRASENIA_CRM; ?>" required="" name="CONTRASENIA_CRM"/>
                          <div class="valid-feedback">Bien!</div>
                      
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">NIVEL DE ACCESO CRM:</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $NIVEL_ACCESO_CRM; ?>" required="" name="NIVEL_ACCESO_CRM"/>
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label"> PUESTO:</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $PUESTO; ?>" required="" name="PUESTO"/>
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">DEPARTAMENTO:</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $DEPARTAMENTO; ?>" required="" name="DEPARTAMENTO"/>
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">NUMERO DE TARJETA DE CREDITO:</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $NUMERO_TARJETA_CREDITO; ?>" required="" name="NUMERO_TARJETA_CREDITO">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">CORREO DE LA EMPRESA 1:</label>
                          <div class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">@</span>
                          <input type="mail" class="form-control" id="validationCustom01" value="<?php echo $CORREO_1; ?>" required="" name="CORREO_1"/>
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">CORREO DE LA EMPRESA 2:</label>
                          <div class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">@</span>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $CORREO_2; ?>" required="" name="CORREO_2"/>
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">CORREO DE LA EMPRESA 3:</label>
                          <div class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">@</span>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $CORREO_3; ?>" required="" name="CORREO_3"/>
                          <div class="valid-feedback">Bien!</div>
                        
                        </div>
                        </div>
						
						<input type="hidden" value="empresa" name="empresa">                   
				

                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">FECHA DE SALIDA DE LA EMPRESA:</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $FECHA_SALIDA_EMPRESA; ?>" required="" name="FECHA_SALIDA_EMPRESA"/>
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">MOTIVO DE SALIDA DE LA EMPRESA:</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $MOTIVO_SALIDA_EMPRESA; ?>" required="" name="MOTIVO_SALIDA_EMPRESA"/>
                          <div class="valid-feedback">Bien!</div>
                        </div>
                       

					
					
					
                  <div> 
                          
	<div style="float:left;" border="solid 1px #000;">
	<button class="btn btn-primary" type="button" id="enviarEMPRESA">ENVIAR</button>

	</div>
                         
	<div style="float:right">
	<div class="col-12">
	<button class="button" type="reset">BORRAR</button></div>
	</div>
	</div>
                            
 
 
                         </form>   
						 
                          </div>
						   </div>
						 </div>
						 </div>