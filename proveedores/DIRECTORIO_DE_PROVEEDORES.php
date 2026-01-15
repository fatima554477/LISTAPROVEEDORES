<div id="content">     
			<hr/>
		<strong>	  <p class="mb-0 text-uppercase" ><img src="includes/contraer31.png" id="mostrar1" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar1" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;INFORMACIÓN DE PRODUCTOS O SERVICIOS</p></strong></div><div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $informacionproductosserviciosporcentaje ; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $informacionproductosserviciosporcentaje ; ?>%</div></div>
								

	        <div id="target1" style="display:block;" class="content2">
        <div class="card">
          <div class="card-body">
            
                      <form class="row g-3 needs-validation was-validated" id="PDIRECPROform"  novalidate="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 
      
                       <div class="col-md-4">
                    
              <h6 class="mb-0">PROVEEDOR DE:</h6>&nbsp;
								<div  class="form-check"> 
              
		
                    <input  class="form-check-input" type="checkbox" value="" id="flexCheckDefault" value="<?php echo $PROVEEDOR_DE_EPC; ?>"  name="PROVEEDOR_DE_EPC">&nbsp;
									<label style="background:#CEF6EC" class="form-check-label" for="flexCheckDefault">EPC</label>
								</div>
								<div   class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" value="<?php echo $PROVEEDOR_DE_INNOVAC; ?>"  name="PROVEEDOR_DE_INNOVAC">&nbsp;
									<label style="background:#b5ecab" class="form-check-label" for="flexCheckChecked">INNOVAC</label>

								</div>
								<div    class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate" value="<?php echo $PROVEEDOR_DE_JUST; ?>" required="" name="PROVEEDOR_DE_JUST">&nbsp;
									<label style="background:#F8E0E0"  class="form-check-label" for="flexCheckIndeterminate">JUST</label></div>
								</div>
                        <div class="col-md-4">
                          <label for="validationCustom02" class="form-label">CALIFICACIÓN DEL PRODUCTO O SERVICIO EN GENERAL:</label>
                          <select class="form-select mb-3" aria-label="Default select example" id="validationCustom02" value="<?php echo $CALIFICACIONPSG; ?>" required="" name="CALIFICACIONPSG"> 
                         <option selected="">SELECCIONA UNA OPCION</option>
                         <option style="background:#FF0000" value="1">1</option>
                         <option style="background:#FA5858" value="2">2</option>
                         <option style="background:#F5A9A9" value="3">3</option>
                         <option style="background:#F6CECE" value="4">4</option>
                         <option style="background:#F6CECE" value="5">5</option>
                         <option style="background:#CEF6E3" value="6">6</option>
                         <option style="background:#A9F5E1" value="7">7</option>
                         <option style="background:#81F7D8" value="8">8</option>
                         <option style="background:#00FFBF" value="9">9</option>
                         <option style="background:#04B486" value="10">10</option>
                        
                         </select> 
                          <div class="valid-feedback">Bien!</div>
                          </div>
                          <div class="col-md-4">
                          <label for="validationCustom02" class="form-label">CALIFICACIÓN DEL TIEMPO DE RESPUESTA:</label>
                          <select class="form-select mb-3" aria-label="Default select example" id="validationCustom02" value="<?php echo $CALIFICACION_TR; ?>" required="" name="CALIFICACION_TR"> 
                         <option selected="">SELECCIONA UNA OPCION</option>
                         <option style="background:#FF0000" value="1">1</option>
                         <option style="background:#FA5858" value="2">2</option>
                         <option style="background:#F5A9A9" value="3">3</option>
                         <option style="background:#F6CECE" value="4">4</option>
                         <option style="background:#F6CECE" value="5">5</option>
                         <option style="background:#CEF6E3" value="6">6</option>
                         <option style="background:#A9F5E1" value="7">7</option>
                         <option style="background:#81F7D8" value="8">8</option>
                         <option style="background:#00FFBF" value="9">9</option>
                         <option style="background:#04B486" value="10">10</option>
                        
                         </select> 
                          <div class="valid-feedback">Bien!</div>
                          </div>
						
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">MOTIVO DE LA CALIFICACIÓN:</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $MOTIVO_CALIFICACION; ?>" required="" name="MOTIVO_CALIFICACION">
                          <div class="valid-feedback">Bien!</div>
                        </div>
						
                        
                        
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">CIUDAD DONDE SE OTORGA EL SERVICIO:</label>
                       
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $CIUDAD_SERVICIO; ?>" required="" name="CIUDAD_SERVICIO">
                          <div class="valid-feedback">Bien!</div>
                        </div>
						
						
						
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">PAÍS DONDE SE OTORGA EL SERVICIO:</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $PAIS_SERVICIO; ?>" required="" name="PAIS_SERVICIO">
                          <div class="valid-feedback">Bien!</div>
                      
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">FECHA DE ÚLTIMA COMPRA:</label><br>
                          <input type="date" class="form-control" id="validationCustom01" value="<?php echo $PFECHA_ULTIMACOMPRA; ?>" required="" name="PFECHA_ULTIMACOMPRA">
                          <div class="valid-feedback">Bien!</div>
                          </div>
                          <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">FECHA DE ACTUALIZACIÓN DE DOCUMENTOS:</label>
                          <input type="date" class="form-control" id="validationCustom01" value="<?php echo $PFECHA_ACTUA_DOCUM; ?>" required="" name="PFECHA_ACTUA_DOCUM">
                          <div class="valid-feedback">Bien!</div>
                          </div>
                          
                          <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">CONTACTADO POR:</label><br>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $PCONTACTADO_POR; ?>" required="" name="PCONTACTADO_POR">
                          <div class="valid-feedback">Bien!</div>
                        
                          </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">OTRO:</label><br></br>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $P_OTRO; ?>" required="" name="P_OTRO">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        	

                        <div class="col-md-4">
		                   <label for="formFileSm"  class="form-label">ADJUNTAR GALERIA DE FOTOS DE PRODUCTOS O SERVICIOS  (FORMATO: WORD, P.P.T, PDF, EXCEL, JPEG, JPG, 	) </label>
		                  <div id="drop_file_zone" ondrop="upload_file(event,'F_PFOTOS_PRODUCTOS')" ondragover="return false" >
		                  <p>Suelta aquí o busca tu archivo</p>
		                 <p><input class="form-control form-control-sm" id="F_PFOTOS_PRODUCTOS" type="text" onkeydown="return false" onclick="file_explorer('F_PFOTOS_PRODUCTOS');" style="width:300px;" VALUE="<?php echo $F_PFOTOS_PRODUCTOS; ?>" required /></p>
		                    <input type="file" name="F_PFOTOS_DE_PRODUCTOS" id="nono"/>
		                 <div id="1F_PFOTOS_DE_PRODUCTOS">
	                 	<?php
		                if($F_PPFOTOS_PRODUCTOS!=""){echo "<a target='_blank' href='includes/archivos/".$F_PPFOTOS_PRODUCTOS."'>Visualizar!</a>"; 
	                       	}?></div>
	                   </div>	
	                   </div> 
                     <div class="col-md-4">
	                  	<label for="formFileSm"  class="form-label"> ADJUNTAR PRESENTACIÓN (FORMATO: WORD, P.P.T, PDF, EXCEL, JPEG, JPG,) </label>
	                   	<div id="drop_file_zone" ondrop="upload_file(event,'F_PPRESENTACION')" ondragover="return false" >
                     	<p>Suelta aquí o busca tu archivo</p>
	                  	<p><input class="form-control form-control-sm" id="F_PPRESENTACION" type="text" onkeydown="return false" onclick="file_explorer('F_PPRESENTACION');" style="width:300px;" VALUE="<?php echo $F_PPRESENTACION; ?>" required /></p>
	                 	<input type="file" name="F_PPRESENTACION" id="nono"/>
	              	  <div id="1F_PPRESENTACION">
	                  <?php
	                	if($F_PPRESENTACION!=""){echo "<a target='_blank' href='includes/archivos/".$F_PPRESENTACION."'>Visualizar!</a>"; 
	                	}?></div>
                  	</div>	
	                     </div>
                       	

                       <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">ADJUNTAR LIGA DE FOTOS, VIDEOS Y/O PRESENTACIÓN</label>
						          
						
                          <input type="url" class="form-control" id="validationCustom01" value="<?php echo $PLIGA_DE_FOTOS_VIDEOS; ?>" required="" name="PLIGA_FOTOS_VIDEOS">
                          <div class="form-control form-control-sm"></div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">PRODUCTO O SERVICIO 1:</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $PRODUCTO_O_SERVICIO; ?>" required="" name="PRODUCTO_O_SERVICIO">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">PRODUCTO O SERVICIO 2</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $PRODUCTO_O_SERVICIO_2; ?>" required="" name="PRODUCTO_O_SERVICIO_2">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">PRODUCTO O SERVICIO 3</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $PRODUCTO_O_SERVICIO_3; ?>" required="" name="PRODUCTO_O_SERVICIO_3">
                          <div class="valid-feedback">Bien!</div>
                        
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">PRODUCTO O SERVICIO 4</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $PRODUCTO_O_SERVICIO_4; ?>" required="" name="PRODUCTO_O_SERVICIO_4">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">PRODUCTO O SERVICIO 5</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $PRODUCTO_O_SERVICIO_5; ?>" required="" name="PRODUCTO_O_SERVICIO_5">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">PRODUCTO O SERVICIO 6</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $PRODUCTO_O_SERVICIO_6; ?>" required="" name="PRODUCTO_O_SERVICIO_6">
                          <div class="valid-feedback">Bien!</div>
                        
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">PRODUCTO O SERVICIO 7</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $PRODUCTO_O_SERVICIO_7; ?>" required="" name="PRODUCTO_O_SERVICIO_7">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">PRODUCTO O SERVICIO 8</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $PRODUCTO_O_SERVICIO_8; ?>" required="" name="PRODUCTO_O_SERVICIO_8">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                      
                        
                          
	<div style="float:left;"border="solid 1px #000;">
	<button class="btn btn-primary" type="button" id="enviardirectorioproveedores">ENVIAR</button>
                    
	<div style="float:right">
	<div class="col-12">
	<button class="button" type="reset">BORRAR</button></div>
	</div>
	</div>
                            
 
 
                         </form>   
						 
                          </div>
						   </div>
						 </div>
						 