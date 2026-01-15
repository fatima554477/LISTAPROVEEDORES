<div id="content">     
			<hr/>
		<strong>	  <p class="mb-0 text-uppercase" ><img src="includes/contraer31.png" id="mostrar9" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar9" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;CONDICIONES COMERCIALES</p></strong></div>
<div  id="mensajeMETODOP2">
<div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $metododepagoporcentaje ; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $metododepagoporcentaje ; ?>%</div></div></div>
								
	        <div id="target9" style="display:block;"  class="content2">
			
        <div class="card">
          <div class="card-body">

					  
	<form class="row g-3 needs-validation was-validated" novalidate="" id="PMETODOPAGOform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
	
	   
                     
						
                        <div class="col-md-4"style="background:#fbeee6">
                          <strong><label for="validationCustom01" class="form-label">CONDICIONES DE PAGO</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $P_CONDICIONES_DE_PAGO; ?>" required="" name="P_CONDICIONES_DE_PAGO">
                          <div class="valid-feedback">Bien!</div>
                        </div>
						
                        
                        
                        <div class="col-md-4"style="background:#fef5e7">
                          <strong><label for="validationCustom01" class="form-label">LÍMITE DE CREDITO</label></strong>
                       
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $P_LIMITE_DE_CREDITO; ?>" required="" name="P_LIMITE_DE_CREDITO">
                          <div class="valid-feedback">Bien!</div>
                        </div>
						
						
						
                        <div class="col-md-4"style="background:#d4f6c8">
                          <strong><label for="validationCustom01" class="form-label">FECHA DE INICIO DEL NUEVO CONVENIO:</label></strong>
                          <input type="date" class="form-control" id="validationCustom01" value="<?php echo $P_FECHA_INICIO_NUEVO_CONVENIO; ?>" required="" name="P_FECHA_INICIO_NUEVO_CONVENIO">
                          <div class="valid-feedback">Bien!</div>
                      
                        </div>
                        <div class="col-md-4"style="background:#fbeee6">
                          <strong><label for="validationCustom01" class="form-label">FECHA DE FINALIZACIÓN DEL CONVENIO:</label></strong>
                          <input type="date" class="form-control" id="validationCustom01" value="<?php echo $P_FECHA_FINALIZACION_CONVENIO; ?>" required="" name="P_FECHA_FINALIZACION_CONVENIO">
                          <div class="valid-feedback">Bien!</div>
                        </div>
						
						
                        <div class="col-md-4"style="background:#fef5e7">
                          <strong><label for="validationCustom01" class="form-label">PORCENTAJE DE COMISIÓN QUE OTORGA</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $P_PORCENTAJE_COMISION_OTORGA; ?>" required="" name="P_PORCENTAJE_COMISION_OTORGA">
                          <div class="valid-feedback">Bien!</div>
                        </div>
						
<div class="col-md-4" style="background:#fef5e7">
  <strong>
    <label for="CONVENIO_PROVEEDOR" class="form-label">¿EXISTE CONVENIO?</label>
  </strong>
  <select class="form-control" id="CONVENIO_PROVEEDOR" name="CONVENIO_PROVEEDOR" required>
    <option value="">Selecciona una opción</option>
    <option value="SI" <?php if($CONVENIO_PROVEEDOR == 'SI') echo 'selected'; ?>>SÍ</option>
    <option value="NO" <?php if($CONVENIO_PROVEEDOR == 'NO') echo 'selected'; ?>>NO</option>
  </select>
  <div class="valid-feedback">Bien!</div>
</div>

						
											  <div class="col-md-4"style="background:#fef5e7">
                          <strong><label for="validationCustom01" class="form-label">DOCUMENTO CONVENIO</label></strong>
                          <input type="file" class="form-control" id="validationCustom01" value="<?php echo $CONVENIO_DOPROVEEDOR; ?>" required="" name="CONVENIO_DOPROVEEDOR">
                          <div class="valid-feedback">Bien!</div>
                        </div>
				
           
							   <div class="col-md-4"style="background:#fbeee6">

                        <strong>   <label for="validationCustom01" class="form-label">OBSERVACIONES:</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $OBSERVACIONES_CONVENIO; ?>" required="" name="OBSERVACIONES_CONVENIO">
                          <div class="valid-feedback">Bien!</div>
                        
                        </div>

                        <div><tr>
                        <th style="text-align:center;background:#faebee;" scope="col">FECHA DE ÚLTIMA CARGA</th>   
           <td  style="background:#faebee">
           <strong>
           <?php echo date('Y-m-d'); ?>
           </strong>
           <input type="hidden" style="width:200px;"  class="form-control" id="validationCustom03"   value="<?php echo date('Y-m-d'); ?>" name="ULTIMA_CARGA_CONVENIO">
           
           </td>
     </tr>
						
						
                     <p style="color:#555; 
          font-size:15px; 
          font-style:italic; 
          border-bottom:2px solid #ccc; 
          padding-bottom:4px;">
  <strong>DOCUMENTACIÓN NO MAYOR A DOS MESES</strong> —  
  por favor actualiza constantemente tus documentos.
</p>

                       <table>  <tr>           
	<input type="hidden" name="VALIDAMETODOPAGO" value="VALIDAMETODOPAGO" />	
 
 
 

	<th>
<?php if($conexion->variablespermisos('','METODO_DE_PAGO','guardar')=='si'){ ?>

<button class="btn btn-sm btn-outline-success px-5" type="button" id="enviarMETODOPAGO">GUARDAR</button><div style="
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
    1px 30px 60px rgba(16,16,16,0.4);"  id="mensajeMETODOP"><th></tr><?php } ?></td>  
                    </tr></table>




               </form>
               <?php if($conexion->variablespermisos('','METODO_DE_PAGO','email')=='si'){ ?>
				  <form name="form_emai_METODOpro" id="form_emai_METODOpro">
                  <table><tr>              
                <td style="width:500px"><textarea placeholder="ESCRIBE AQUÍ TUS CORREOS SEPARADOS POR PUNTO Y COMA EJEMPLO: NOMBRE@CORREO.ES;NOMBRE@CORREO.ES"  name="METODOPAGO_ENVIAR_IMAIL" id="METODOPAGO_ENVIAR_IMAIL" class="form-control" aria-label="With textarea"><?php echo $METODOPAGO_ENVIAR_IMAIL; ?></textarea> </td>
                  <td> <button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviar_email_METODO">ENVIAR POR EMAIL</button></td>   
                 </tr></table><?php } ?>

           
          <?php
$querycontras = $proveedoresC->listadoCONDICIONES();
?>

<br>
<div class='table-responsive'>
<div align='right'>
<div>
<br>
<div id='employee_table'>
<tbody= 'font-style:italic;'>
<table class="table table-striped table-bordered" style="width:100%"  id='reseteCONDICIONESp' name='reseteCONDICIONESp'>
<tr style="text-align:center">
<th width="15%"style="background:#c9e8e8">ENVIAR POR EMAIL</th>
  
<th width="20%"style="background:#c9e8e8">CONDICIONES DE PAGO</th>
<th width="20%"style="background:#c9e8e8">LÍMITE DE CREDITO</th>
<th width="20%"style="background:#c9e8e8">FECHA DE INICIO DEL NUEVO CONVENIO</th>
<th width="20%"style="background:#c9e8e8">FECHA DE FINALIZACIÓN DEL CONVENIO</th>
<th width="20%"style="background:#c9e8e8">PORCENTAJE DE COMISIÓN QUE OTORGA</th>
<th width="20%"style="background:#c9e8e8">¿EXISTE CONVENIO?</th>
<th width="20%"style="background:#c9e8e8">CONVENIO</th>
<th width="20%"style="background:#c9e8e8">OBSERVACIONES</th>
<th width="20%"style="background:#c9e8e8"> ÚLTIMA CARGA</th>
</tr>


<?php
$urlCONVENIO_DOPROVEEDOR ='';
while($row = mysqli_fetch_array($querycontras))
{	
	$urlCONVENIO_DOPROVEEDOR= $conexion->descargararchivo($row["CONVENIO_DOPROVEEDOR"]);
?>


<tr style='background:#f5f9fc;text-align:center'>
<td style="text-align:center" >
<input type="checkbox" style="width:17%" class="form-check-input" name="condicion[]" id="condicion" value="<?php echo $row["id"]; ?>"/> </td>
<td ><?php echo $row["P_CONDICIONES_DE_PAGO"]; ?></td>
<td ><?php echo $row["P_LIMITE_DE_CREDITO"]; ?></td>
<td ><?php echo $row["P_FECHA_INICIO_NUEVO_CONVENIO"]; ?></td>
<td ><?php echo $row["P_FECHA_FINALIZACION_CONVENIO"]; ?></td>
<td ><?php echo $row["P_PORCENTAJE_COMISION_OTORGA"]; ?></td>
<td ><?php echo $row["CONVENIO_PROVEEDOR"]; ?></td>
<td ><?php echo $urlCONVENIO_DOPROVEEDOR; ?></td>
<td ><?php echo $row["OBSERVACIONES_CONVENIO"]; ?></td>
<td ><?php echo $row["ULTIMA_CARGA_CONVENIO"]; ?></td> 
       
<td><?php if($conexion->variablespermisos('','METODO_DE_PAGO','modificar')=='si'){ ?>
<input type="button" name="view" value="MODIFICAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_dataconveniomodifica" /><?php } ?></td>
<td><?php if($conexion->variablespermisos('','METODO_DE_PAGO','borrar')=='si'){ ?>

<input type="button" name="borra_id_servis" value="BORRAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_dataconvenioborrar" />
<?php } ?></td>
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
</div>
</div> 
</div>
						