<div id="content">     
			<hr/>
		<strong>	  <p class="mb-0 text-uppercase" ><img src="includes/contraer31.png" id="mostrar10" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar10" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;DIRECCIóN DE OFICINAS, SUCURSALES O BODEGAS</p></strong></div>
<div id="mensajeDIROFICINASBODEGAS">
<div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $datosDIROFICINASBODEGAS ; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $datosDIROFICINASBODEGAS ; ?>%</div></div></div>
							
	  
	                  <div id="target10" style="display:block;" class="content2">
                         <div class="card">
                   <div class="card-body">


	                 <form class="row g-3 needs-validation was-validated" novalidate="" id="DIROFICINASBODEGASform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
       					  
                 
                   <div class="col-md-4"style="background:#fef5e7">
                    <strong><label for="validationCustom02" class="form-label">EDIFICIO:</strong></label>
                     <input type="text" class="form-control" id="validationCustom02" value="<?php echo $P_EDIFICIO_OSB; ?>" required="" name="P_EDIFICIO_OSB">
                     <div class="valid-feedback">Looks good!</div>
                   </div>
				   
                   <div class="col-md-4"style="background:#d4f6c8">
                    <strong><label for="validationCustom01" class="form-label">CALLE:</strong></label>
                     <input type="text" class="form-control" id="validationCustom01" value="<?php echo $P_CALLE_OSB; ?>" required=""name="P_CALLE_OSB">
                     <div class="valid-feedback">Looks good!</div>
                   </div>
                   
                   <div class="col-md-4"style="background:#fbeee6">
                    <strong><label for="validationCustom01" class="form-label">NÚMERO EXTERIOR:</strong></label>
                     <input type="text" class="form-control" id="validationCustom01" value="<?php echo $P_NUMERO_EXTERIOR_OSB; ?>" required=""name="P_NUMERO_EXTERIOR_OSB">
                     <div class="valid-feedback">Looks good!</div>
                   </div>
                   
                   <div class="col-md-4"style="background:#fef5e7">
                    <strong><label for="validationCustom01" class="form-label">NÚMERO INTERIOR:</strong></label>
                     <input type="text" class="form-control" id="validationCustom01" value="<?php echo $P_NUMERO_INTERIOR_OSB; ?>" required=""name="P_NUMERO_INTERIOR_OSB">
                     <div class="valid-feedback">Looks good!</div>
                   </div>
                   
                   <div class="col-md-4"style="background:#d4f6c8">
                    <strong><label for="validationCustom01" class="form-label">NÚMERO DE OFICINA:</strong></label>
                     <input type="text" class="form-control" id="validationCustom01" value="<?php echo $P_NUMERO_OFICINA_OSB; ?>" required=""name="P_NUMERO_OFICINA_OSB">
                     <div class="valid-feedback">Looks good!</div>
                   </div>
				   
                   <div class="col-md-4"style="background:#fbeee6">
                    <strong><label for="validationCustom02" class="form-label">COLONIA:</strong></label>
                     <input type="text" class="form-control" id="validationCustom02" value="<?php echo $P_COLONIA_OSB; ?>" required=""name="P_COLONIA_OSB">
                     <div class="valid-feedback">Looks good!</div>
                   </div>
				   
                   <div class="col-md-4"style="background:#fef5e7">
                    <strong><label for="validationCustom02" class="form-label">ALCALDÍA:</strong></label>
                     <input type="text" class="form-control" id="validationCustom02" value="<?php echo $P_ALCALDIA_OSB; ?>" required="" name="P_ALCALDIA_OSB">
                     <div class="valid-feedback">Looks good!</div>
                 
                   </div>
                   <div class="col-md-4"style="background:#d4f6c8">
                    <strong><label for="validationCustom01" class="form-label">C.P.</strong></label>
                     <input type="text" class="form-control" id="validationCustom01" value="<?php echo $P_CP_OSB; ?>" required="" name="P_CP_OSB">
                     <div class="valid-feedback">Looks good!</div>
                   </div>
				   
                   <div class="col-md-4"style="background:#fbeee6">
                    <strong><label for="validationCustom02" class="form-label">CIUDAD:</strong></label>
                     <input type="text" class="form-control" id="validationCustom02" value="<?php echo $P_CIUDAD_OSB; ?>" required="" name="P_CIUDAD_OSB">
                     <div class="valid-feedback">Looks good!</div>
                   </div>
				   
                   <div class="col-md-4"style="background:#fef5e7">
                    <strong><label for="validationCustom02" class="form-label">ESTADO:</strong></label>
                     <input type="text" class="form-control" id="validationCustom02" value="<?php echo $P_ESTADO_OSB; ?>" required="" name="P_ESTADO_OSB">
                     <div class="valid-feedback">Looks good!</div>
                   
                   </div>
                   <div class="col-md-4"style="background:#d4f6c8">
                    <strong><label for="validationCustom01" class="form-label">PAÍS:</strong></label>
                     <input type="text" class="form-control" id="validationCustom01" value="<?php echo $P_PAIS_OSB; ?>" required="" name="P_PAIS_OSB">
                     <div class="valid-feedback">Looks good!</div>
                   </div>
                  
                     <input type="hidden" value="validaDIROFICINASBODEGAS" name="validaDIROFICINASBODEGAS"/>



     
    
                     <div class="col-md-4"style="background:#fbeee6">
                
      <strong><label>UBICACIÓN EN EL MAPA: COPIAR LINK</strong></label>

                
    <a href="https://www.google.com.gt/maps/@<?php echo $valor1 ?>,<?php echo $valor2 ?>,15z" target="_blank">(GOOGLE MAPS)</a>

    <input type="text" id="search_location" class="form-control" placeholder="Search location"  name="P_UBICACION_MAPA_OSB" value="<?php echo $P_UBICACION_MAPA_OSB; ?>">

                  </div>

                  
                  <div class="col-md-4"style="background:#fef5e7">
                    <strong><label for="validationCustom02" class="form-label">TELEFONO 1</strong></label>
                     <input type="text" class="form-control" id="validationCustom02" value="<?php echo $P_TELEFONO_OSB_1; ?>" required="" name="P_TELEFONO_OSB_1">
                     <div class="valid-feedback">Looks good!</div>
                   </div>
				   
                   <div class="col-md-4"style="background:#d4f6c8">
                    <strong><label for="validationCustom02" class="form-label">TELEFONO 2</strong></label>
                     <input type="text" class="form-control" id="validationCustom02" value="<?php echo $P_TELEFONO_OSB_2; ?>" required="" name="P_TELEFONO_OSB_2">
                     <div class="valid-feedback">Looks good!</div>
                   
                   </div>
                   <div class="col-md-4"style="background:#fbeee6">
                    <strong><label for="validationCustom01" class="form-label">WHATSAPP:</strong></label>
                     <input type="text" class="form-control" id="validationCustom01" value="<?php echo $P_WHATSAPP_OSB_1; ?>" required="" name="P_WHATSAPP_OSB_1">
                     <div class="valid-feedback">Looks good!</div>
                   </div>
                        
                 
                        
                  <div class="col-md-4"style="background:#fef5e7">
                    <strong><label for="validationCustom02" class="form-label">NOMBRE DEL CONTACTO 1:</strong></label>
                     <input type="text" class="form-control" id="validationCustom02" value="<?php echo $P_NOMBRE_CONTACTO_OSB_1; ?>" required="" name="P_NOMBRE_CONTACTO_OSB_1">
                     <div class="valid-feedback">Looks good!</div>
                   </div>
				   
                   <div class="col-md-4"style="background:#d4f6c8">
                    <strong><label for="validationCustom02" class="form-label">NÚMERO DE CEL DEL CONTACTO 1:</strong></label>
                     <input type="text" class="form-control" id="validationCustom02" value="<?php echo $P_NUMERO_CEL_CONTACTO_OSB_1; ?>" required="" name="P_NUMERO_CEL_CONTACTO_OSB_1">
                     <div class="valid-feedback">Looks good!</div>
                   
                   </div>
                   <div class="col-md-4"style="background:#fbeee6">
                         <strong><label for="validationCustom01" class="form-label">EMAIL DE CONTACTO 1:</strong></label>
                          <div class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">@</span>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $P_IMAIL_CONTACTO_OSB_1; ?>" required="" name="P_IMAIL_CONTACTO_OSB_1">
                          <div class="valid-feedback">Bien!</div>      
                        </div>
                        </div>
                        
                  <div class="col-md-4"style="background:#fef5e7">
                    <strong><label for="validationCustom02" class="form-label">NÚMERO DE EXTENSIÓN 1:</strong></label>
                     <input type="text" class="form-control" id="validationCustom02" value="<?php echo $P_NUMERO_EXTENCION_OSB_1; ?>" required="" name="P_NUMERO_EXTENCION_OSB_1">
                     <div class="valid-feedback">Looks good!</div>
                     </div>
                     
				   
          
                     </div>
                     <div> 
                          
	<div style="float:left;"border="solid 1px #000;">
	<button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviarDIROFICINASBODEGAS">GUARDAR</button>
	</div>
                         

	
                         </form>   
						 </div>
                          </div>
						   </div>
						   