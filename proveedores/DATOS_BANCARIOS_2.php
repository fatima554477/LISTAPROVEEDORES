<div id="content">     
			<hr/>
		<strong>	  <p class="mb-0 text-uppercase" ><img src="includes/contraer31.png" id="mostrar12" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar12" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;DATOS BANCARIOS 2</p></strong></div>
<div id="mensajeDATOSBANCARIOS2">
<div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $datosporcentajeDATOSBANCARIOS2 ; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $datosporcentajeDATOSBANCARIOS2 ; ?>%</div></div></div>
							
								
	  
	                  <div id="target12" style="display:block;" class="content2">
                         <div class="card">
                   <div class="card-body">
                  
					  
	                     <form class="row g-3 needs-validation was-validated" novalidate="" id="DATOSBANCARIOS2form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
	

                          <div class="col-md-4"style="background:#fef5e7">
                          <strong><label for="validationCustom02" class="form-label">TIPO DE MONEDA:</label></strong>
                          <select class="form-select mb-3" aria-label="Default select example" id="validationCustom02" value="<?php echo $P_TIPO_DE_MONEDA_2; ?>" required="" name="P_TIPO_DE_MONEDA_2"> >
                         <option selected="">SELECCIONA UNA OPCION</option>
                         <option style="background: #c9e8e8" <?php if($P_TIPO_DE_MONEDA_2=='MXN'){echo "selected";} ?> value="MXN">MXN (Peso mexicano)</option>
                         <option style="background: #a3e4d7" <?php if($P_TIPO_DE_MONEDA_2=='USD'){echo "selected";} ?> value="USD">USD (Dolar)</option>
                         <option style="background: #e8f6f3" <?php if($P_TIPO_DE_MONEDA_2=='EUR'){echo "selected";} ?> value="EUR">EUR (Euro)</option>
                         <option style="background: #fdf2e9" <?php if($P_TIPO_DE_MONEDA_2=='GBP'){echo "selected";} ?> value="GBP">GBP (Libra esterlina)</option>
                         <option style="background: #eaeded" <?php if($P_TIPO_DE_MONEDA_2=='CHF'){echo "selected";} ?> value="CHF">CHF (Franco suizo)</option>
                         <option style="background: #fdebd0" <?php if($P_TIPO_DE_MONEDA_2=='CNY'){echo "selected";} ?> value="CNY">CNY (Yuan)</option>
                         <option style="background: #ebdef0" <?php if($P_TIPO_DE_MONEDA_2=='JPY'){echo "selected";} ?> value="JPY">JPY (Yen japonés)</option>
                         <option style="background: #d6eaf8" <?php if($P_TIPO_DE_MONEDA_2=='HKD'){echo "selected";} ?> value="HKD">HKD (Dólar hongkonés)</option>
                         <option style="background: #fef5e7" <?php if($P_TIPO_DE_MONEDA_2=='CAD'){echo "selected";} ?> value="CAD">CAD (Dólar canadiense)</option>
                         <option style="background: #ebedef" <?php if($P_TIPO_DE_MONEDA_2=='AUD'){echo "selected";} ?> value="AUD">AUD (Dólar australiano)</option>
                         <option style="background: #fbeee6" <?php if($P_TIPO_DE_MONEDA_2=='BRL'){echo "selected";} ?> value="BRL">BRL (Real brasileño)</option>
                         <option style="background: #e8f6f3" <?php if($P_TIPO_DE_MONEDA_2=='RUB'){echo "selected";} ?> value="RUB">RUB  (Rublo ruso)</option>

                         </select> 
                          <div class="valid-feedback">Bien!</div>
                          </div>
                         
                        
                     
						
                        <div class="col-md-4"style="background:#d4f6c8">
                          <strong><label for="validationCustom01" class="form-label">NOMBRE DE LA INSTITUCIÓN FINANCIERA / BANCO:</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $P_INSTITUCION_FINANCIERA_2; ?>" required="" name="P_INSTITUCION_FINANCIERA_2">
                          <div class="valid-feedback">Bien!</div>
                        </div>
						
                        
                        
                        <div class="col-md-4"style="background:#fbeee6">
                          <strong><label for="validationCustom01" class="form-label">NÚMERO DE CUENTA:</label></strong>
                       
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $P_NUMERO_DE_CUENTA_DB_2; ?>" required="" name="P_NUMERO_DE_CUENTA_DB_2">
                          <div class="valid-feedback">Bien!</div>
                        </div>
						
						
						
                        <div class="col-md-4"style="background:#fef5e7">
                          <strong><label for="validationCustom01" class="form-label">NÚMERO DE CUENTA CLABE (18 DIGITOS):</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $P_NUMERO_CLABE_2; ?>" required="" name="P_NUMERO_CLABE_2">
                          <div class="valid-feedback">Bien!</div>
                      
                        </div>
                        <div class="col-md-4"style="background:#d4f6c8">
                          <strong><label for="validationCustom01" class="form-label">NÚMERO DE SUCURSAL:</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $P_NUMERO_DE_SUCURSAL_2; ?>" required="" name="P_NUMERO_DE_SUCURSAL_2">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4"style="background:#fbeee6">
                          <strong><label for="validationCustom01" class="form-label">NÚMERO DE IBAN:</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $P_NUMERO_IBAN_2; ?>" required="" name="P_NUMERO_IBAN_2">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        
                        <div class="col-md-4"style="background:#fef5e7">
                          <strong><label for="validationCustom01" class="form-label">NÚMERO / CUENTA SWIFT:</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $P_NUMERO_CUENTA_SWIFT_2; ?>" required="" name="P_NUMERO_CUENTA_SWIFT_2">
                        </div>
						
                      <input type="hidden" name="validaDATOSBANCARIOS2" value="validaDATOSBANCARIOS2"/>
					  
	<div style="float:left;"border="solid 1px #000;">
	<button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviarDATOSBANCARIOS2">GUARDAR</button>
 
	</div>

                            
 
 
                         </form>   
						            </div>
                          
						                  </div>
                           </div>
						