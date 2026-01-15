<div id="content">     
			<hr/>
	<strong> <P class="mb-0 text-uppercase">
<img src="includes/contraer51.png" id="mostrar3" style="cursor:pointer;"/>
<img src="includes/contraer61.png" id="ocultar3" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;DIRECCION DE LA EMPRESA

	        <div id="target3" style="display:block;"  class="content2">
			
        <div class="card">
          <div class="card-body">

					  
	<form class="row g-3 needs-validation was-validated" novalidate="" id="DIRPROVEEDOR1form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
	
	
                  <div class="col-md-4">
                    <label for="validationCustom03" class="form-label">NOMBRE COMERCIAL DE LA EMPRESA (PROVEEDOR)</label>
                     <input type="text" class="form-control" id="validationCustom03" required="" name="EDIFICIO" value="<?php echo $EDIFICIO; ?>">
                     <div class="invalid-feedback">Please provide a valid city.</div>
                   </div>


                  <div class="col-md-4">
                    <label for="validationCustom03" class="form-label">NOMBRE FISCAL O RAZON SOCIAL DE LA EMPRESA:</label>
                     <input type="text" class="form-control" id="validationCustom03" required="" name="calledir1" value="<?php echo $calledir1; ?>">
                     <div class="invalid-feedback">Please provide a valid city.</div>
                   </div>

				   
                   <div class="col-md-4">
                    <label for="validationCustom03" class="form-label">DIRECCION FISCAL:</label>
                     <input type="text" class="form-control" id="validationCustom03" required="" name="NUMERO_EXTERIOR" value="<?php echo $NUMERO_EXTERIOR; ?>">
                     <div class="invalid-feedback">Please provide a valid city.</div>
                   </div>
				   
                   <div class="col-md-4">
                     <label for="validationCustom02" class="form-label">EDIFICIO:</label>
                     <input type="text" class="form-control" id="validationCustom02" value="<?php echo $NUMERO_INTERIOR; ?>" required="" name="NUMERO_INTERIOR">
                     <div class="valid-feedback">Looks good!</div>
                   </div>
				   
                   <div class="col-md-4">
                     <label for="validationCustom01" class="form-label">CALLE:</label>
                     <input type="text" class="form-control" id="validationCustom01" value="<?php echo $NUMERO_INTERIOR_2; ?>" required=""name="NUMERO_INTERIOR_2">
                     <div class="valid-feedback">Looks good!</div>
                   </div>
                   
                   <div class="col-md-4">
                     <label for="validationCustom01" class="form-label">NUMERO EXTERIOR:</label>
                     <input type="text" class="form-control" id="validationCustom01" value="<?php echo $NUMERO_INTERIOR_2; ?>" required=""name="NUMERO_INTERIOR_2">
                     <div class="valid-feedback">Looks good!</div>
                   </div>
                   
                   <div class="col-md-4">
                     <label for="validationCustom01" class="form-label">NUMERO INTERIOR:</label>
                     <input type="text" class="form-control" id="validationCustom01" value="<?php echo $NUMERO_INTERIOR_2; ?>" required=""name="NUMERO_INTERIOR_2">
                     <div class="valid-feedback">Looks good!</div>
                   </div>
                   
                   <div class="col-md-4">
                     <label for="validationCustom01" class="form-label">NUMERO DE OFICINA:</label>
                     <input type="text" class="form-control" id="validationCustom01" value="<?php echo $NUMERO_INTERIOR_2; ?>" required=""name="NUMERO_INTERIOR_2">
                     <div class="valid-feedback">Looks good!</div>
                   </div>
				   
                   <div class="col-md-4">
                     <label for="validationCustom02" class="form-label">COLONIA:</label>
                     <input type="text" class="form-control" id="validationCustom02" value="<?php echo $COLONIA; ?>" required=""name="COLONIA">
                     <div class="valid-feedback">Looks good!</div>
                   </div>
				   
                   <div class="col-md-4">
                     <label for="validationCustom02" class="form-label">ALCALDIA:</label>
                     <input type="text" class="form-control" id="validationCustom02" value="<?php echo $ALCALDIA; ?>" required="" name="ALCALDIA">
                     <div class="valid-feedback">Looks good!</div>
                 
                   </div>
                   <div class="col-md-4">
                     <label for="validationCustom01" class="form-label">C.P.</label>
                     <input type="text" class="form-control" id="validationCustom01" value="<?php echo $C_P; ?>" required="" name="C_P">
                     <div class="valid-feedback">Looks good!</div>
                   </div>
				   
                   <div class="col-md-4">
                     <label for="validationCustom02" class="form-label">CIUDAD:</label>
                     <input type="text" class="form-control" id="validationCustom02" value="<?php echo $CIUDAD; ?>" required="" name="CIUDAD">
                     <div class="valid-feedback">Looks good!</div>
                   </div>
				   
                   <div class="col-md-4">
                     <label for="validationCustom02" class="form-label">ESTADO:</label>
                     <input type="text" class="form-control" id="validationCustom02" value="<?php echo $ESTADO; ?>" required="" name="ESTADO">
                     <div class="valid-feedback">Looks good!</div>
                   
                   </div>
                   <div class="col-md-4">
                     <label for="validationCustom01" class="form-label">PAIS:</label>
                     <input type="text" class="form-control" id="validationCustom01" value="<?php echo $PAIS; ?>" required="" name="PAIS">
                     <div class="valid-feedback">Looks good!</div>
                   </div>
                  
                     <input type="hidden" value="dircasa11" name="dircasa11"/>



       <div style="width: 80%; height 400px;">
    

                
       <label>UBICACION EN EL MAPA: COPIAR LINK</label>

                
    <a href="https://www.google.com.gt/maps/@<?php echo $valor1 ?>,<?php echo $valor2 ?>,15z" target="_blank">(GOOGLE MAPS)</a>

    <input type="text" id="search_location" class="form-control" placeholder="Search location"  name="DIRECCION_DE_CASA_1_UBICACION_MAPA" value="<?php echo $DIRECCION_DE_CASA_1_UBICACION_MAPA; ?>">

                  </div>


 
                  <div> 
                          
	<div style="float:left;"border="solid 1px #000;">
	<button class="btn btn-primary" type="button" id="enviarDIRCASA1">ENVIAR</button>
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