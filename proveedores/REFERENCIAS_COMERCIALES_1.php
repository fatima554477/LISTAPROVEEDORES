<div id="content">     
			<hr/>
		<strong>	  <p class="mb-0 text-uppercase" ><img src="includes/contraer31.png" id="mostrar15" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar15" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;REFERENCIAS COMERCIALES </p></strong></div>
<div id="mensajeREFERENCIASCOMERCIALES12">
<div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $datosREFERENCIASCOMERCIALES1 ; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $datosREFERENCIASCOMERCIALES1 ; ?>%</div></div></div>
							
      
	        <div id="target15" style="display:block;" class="content2">
        <div class="card">
          <div class="card-body">
                      <form class="row g-3 needs-validation" id="REFERENCIASCOMERCIALES1form" novalidate>
                      <?php if($conexion->variablespermisos('','REFERENCIAS_COMERCIALES_1','guardar')=='si'){ ?>
					  	     <table class="table mb-0 table-striped">

                <tr>
            
                <th style="text-align:center" scope="col">REFERENCIAS COMERCIALES: </th>
                 </tr></table>
                  <div class="col-md-4"style="background:#fef5e7">
                     <strong><label for="validationCustom02" class="form-label">NOMBRE DE LA EMPRESA:</label></strong>
                     <input type="text" class="form-control" id="validationCustom02" value="<?php echo $P_NOMBRE_EMPRESA_RC_1; ?>" required="" name="P_NOMBRE_EMPRESA_RC_1">
                     <div class="valid-feedback">Looks good!</div>
                   </div>
                   <div class="col-md-4"style="background:#d4f6c8">


                     <strong><label for="validationCustom02" class="form-label"> NOMBRE DEL CONTACTO:</label></strong>
                     <input type="text" class="form-control" id="validationCustom02" value="<?php echo $P_NOMBRE_CONTACTO_RC_1; ?>" required="" name="P_NOMBRE_CONTACTO_RC_1">
                     <div class="valid-feedback">Looks good!</div>
                   </div> 
                   <div class="col-md-4"style="background:#fbeee6">
                     <strong><label for="validationCustom02" class="form-label">CELULAR DEL CONTACTO:</label></strong>
                     <input type="text" maxlength="20" class="form-control formato-numero" id="validationCustom02" value="<?php echo $P_CELULAR_CONTACTO_RC_1; ?>" required="" name="P_CELULAR_CONTACTO_RC_1" >
                     <div class="valid-feedback">Looks good!</div>
                   </div>

                   <div class="col-md-4"style="background:#fef5e7">
                     <strong><label for="validationCustom02" class="form-label">TELÉFONO DE LA EMPRESA:</label></strong>
                     <input type="text" maxlength="20" class="form-control formato-numero" id="validationCustom02" value="<?php echo $P_TELEFONO_EMPRESA_RC_1; ?>" required="" name="P_TELEFONO_EMPRESA_RC_1" >
                     <div class="valid-feedback">Looks good!</div>
                   
                   </div>
                   <div class="col-md-4"style="background:#d4f6c8">
                     <strong><label for="validationCustom02" class="form-label">NÚMERO DE EXTENSIÓN DEL CONTACTO:</label></strong>
                     <input type="text" maxlength="20" class="form-control formato-numero" id="validationCustom02" value="<?php echo $P_NUMERO_EXTENSION_RC_1; ?>" required="" name="P_NUMERO_EXTENSION_RC_1"  >
                     <div class="valid-feedback">Looks good!</div>
                   
                   </div>
             
                   <div class="col-md-4"style="background:#fbeee6">
                          <strong><label for="validationCustom01" class="form-label">CORREO ELECTRONICO:</label></strong>
                          <div class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">@</span>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $P_IMAIL_CONTACTO_RC_1; ?>" required="" name="P_IMAIL_CONTACTO_RC_1">
                          <div class="valid-feedback">Bien!</div>      
                        </div>
                        </div>         
                  <div class="col-md-6"style="background:#fef5e7">
                     <strong><label for="validationCustom02" class="form-label">PAGÍNA WEB:</label></strong>
                     <input type="text" class="form-control" id="validationCustom02" value="<?php echo $P_PAGINA_WEB_RC_1; ?>" required="" name="P_PAGINA_WEB_RC_1">
                     <div class="valid-feedback">Looks good!</div>
                     </div>
                     
                    
                      

                    
                         <div><tr>
                        <th style="text-align:center;background:#faebee;" scope="col">FECHA DE ÚLTIMA CARGA</th>   
           <td  style="background:#faebee">
           <strong>
           <?php echo date('Y-m-d'); ?>
           </strong>
           <input type="hidden" style="width:200px;"  class="form-control" id="validationCustom03"   value="<?php echo date('Y-m-d'); ?>" name="ULTIMA_CARGA_REFEprovee"></td></tr></div>

           <table><tr>
	         <td>


<button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviarREFERENCIASCOMERCIALES1">GUARDAR</button><div style="

    color: #f5f5f5;
    text-shadow: 1px 1px 1px #919191,
        1px 2px 1px #919191,
        1px 3px 1px #919191,
        1px 4px 1px #919191,
        1px 5px 1px #919191,
        1px 6px 1px #919191,
        1px 7px 1px #919191,
        1px 8px 1px #919191,
        1px 9px 1px #919191,
        1px 10px 1px #919191,
    1px 18px 6px rgba(16,16,16,0.4),
    1px 22px 10px rgba(16,16,16,0.2),
    1px 25px 35px rgba(16,16,16,0.2),
    1px 30px 60px rgba(16,16,16,0.4);" id="mensajeREFERENCIASCOMERCIALES1"><td>
           <input type="hidden" name="validaREFERENCIASCOMERCIALES1" value="validaREFERENCIASCOMERCIALES1"/>
           </tr><?php } ?></table>
   
  </form>
  <?php if($conexion->variablespermisos('','REFERENCIAS_COMERCIALES_1','email')=='si'){ ?>
                <form name="form_emai_REFEpro" id="form_emai_REFEpro">
				<table><tr>                  
                <td style="width:500px" ><textarea  style="float:right"   placeholder="ESCRIBE AQUÍ TUS CORREOS SEPARADOS POR PUNTO Y COMA EJEMPLO: NOMBRE@CORREO.ES;NOMBRE@CORREO.ES"  name="REFE_ENVIAR_IMAIL" id="REFE_ENVIAR_IMAIL" class="form-control" aria-label="With textarea"><?php echo $REFE_ENVIAR_IMAIL; ?></textarea></td>
                  <td> <button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviar_email_refePRO">ENVIAR POR EMAIL</button><?php } ?></td>   
                 </tr></table>
       

							
									
									
<?php
$querycontras = $proveedoresC->listadoREFERENCIApro();
?>

<br />
<div class='table-responsive'>
<div align='right'>
</div>
<br />
<div id='employee_table'>
<tbody= 'font-style:italic;'>
<table class="table table-striped table-bordered" style="width:100%" id='resetPROrefe1p' name='resetPROrefe1p'>
<tr style="text-align:center">
<th width="15%"style="background:#c9e8e8">ENVIAR POR EMAIL</th>
<th width="35%"style="background:#c9e8e8">NOMBRE DE LA EMPRESA</th>
<th width="20%"style="background:#c9e8e8">NOMBRE DEL CONTACTO</th>
<th width="20%"style="background:#c9e8e8">CELULAR DEL CONTACTO</th>
<th width="20%"style="background:#c9e8e8">TELÉFONO DE LA EMPRESA</th>
<th width="20%"style="background:#c9e8e8">NÚMERO DE EXTENSIÓN DEL CONTACTO</th>
<th width="20%"style="background:#c9e8e8">CORREO ELECTRONICO</th>
<th width="20%"style="background:#c9e8e8">PAGÍNA WEB</th>
<th width="20%"style="background:#c9e8e8">FECHA ÚLTIMA CARGA</th>
</tr>
<?php
while($row = mysqli_fetch_array($querycontras))
{
?>
<tr style='background:#f5f9fc;text-align:center'>
<td style="text-align:center" >
<input type="checkbox" style="width:20%" class="form-check-input" name="referenPRO[]" id="referenPRO" value="<?php echo $row["id"]; ?>"/> </td>
<td ><?php echo $row["P_NOMBRE_EMPRESA_RC_1"]; ?></td>
<td ><?php echo $row["P_NOMBRE_CONTACTO_RC_1"]; ?></td>
<td ><?php echo $row["P_CELULAR_CONTACTO_RC_1"]; ?></td>
<td ><?php echo $row["P_TELEFONO_EMPRESA_RC_1"]; ?></td>
<td ><?php echo $row["P_NUMERO_EXTENSION_RC_1"]; ?></td>
<td ><?php echo $row["P_IMAIL_CONTACTO_RC_1"]; ?></td>       
<td ><?php echo $row["P_PAGINA_WEB_RC_1"]; ?></td>
<td ><?php echo $row["ULTIMA_CARGA_REFEprovee"]; ?></td>
                                                                
<td><?php if($conexion->variablespermisos('','REFERENCIAS_COMERCIALES_1','modificar')=='si'){ ?>


<input type="button" name="view" value="MODIFICAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_data_referenciap_modifica" /><?php } ?></td>

<td>
<?php if($conexion->variablespermisos('','REFERENCIAS_COMERCIALES_1','borrar')=='si'){ ?>


<input type="button" name="view2" value="BORRAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_datareferenciaborrar" /><?php } ?></td>
</tr>
<?php
}
?>
</table>
</tbody>
</form>
</div>
</div>
</div>
</div>  
</div>