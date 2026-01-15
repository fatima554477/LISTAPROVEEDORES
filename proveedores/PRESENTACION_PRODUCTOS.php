<div id="content">     
			<hr/>
		<strong>	  <p class="mb-0 text-uppercase" ><img src="includes/contraer31.png" id="mostrar4" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar4" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp; PRESENTACIÓN DE LOS PRODUCTOS O SERVICIOS QUE OFRECE EL PROVEEDOR</p></strong></div>


<div  id="mensajePRESENTACIONP2">
<div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $PRESENTACIONporcentaje ; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $PRESENTACIONporcentaje ; ?>%</div></div>
									</div>
							
	        <div id="target4" style="display:block;" class="content2">
          

        <div class="card">
          <div class="card-body">
                      <form class="row g-3 needs-validation was-validated" id="PRESENTACIONPform"  novalidate="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 
 
                  <?php if($conexion->variablespermisos('','PRESENTACION_PRODUCTOS','guardar')=='si'){ ?>
                        <div class="col-md-4"style="background:#fef5e7">

                        <strong>  <label for="validationCustom01" class="form-label">PRODUCTO O SERVICIO:</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $PRODUCTO_PRESENTA; ?>" required="" name="PRODUCTO_PRESENTA">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4"style="background:#d4f6c8">

                        <strong>   <label for="validationCustom01" class="form-label">PRESENTACION  DEL PRODUCTO:</label></strong>
                          <input type="file" class="form-control" id="validationCustom01" value="<?php echo $PRESENTACION_VIDEO; ?>" required="" name="PRESENTACION_VIDEO">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4"style="background:#fbeee6">

                        <strong>   <label for="validationCustom01" class="form-label">OBSERVACIONES:</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $PRESENTACION_OBSERVACIONES; ?>" required="" name="PRESENTACION_OBSERVACIONES">
                          <div class="valid-feedback">Bien!</div>
                        
                        </div><div><tr>
                        <th style="text-align:center;background:#faebee;" scope="col">FECHA DE ÚLTIMA CARGA</th>   
           <td  style="background:#faebee">
           <strong>
           <?php echo date('Y-m-d'); ?>
           </strong>
           <input type="hidden" style="width:200px;"  class="form-control" id="validationCustom03"   value="<?php echo date('Y-m-d'); ?>" name="PRODUCTO_PRESENTACION_FECHA">
           
           </td>
                  
                    <input type="hidden" value="hPRESENTACION_PRODUCTOS" name="hPRESENTACION_PRODUCTOS"/>     
                    
                    &nbsp; &nbsp; &nbsp;<table><tr>     
                   
                     <td>

<button class="btn btn-sm btn-outline-success px-5"   type="button" id="enviarPRESENTAP">GUARDAR</button><div style="

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
    1px 30px 60px rgba(16,16,16,0.4);"


id="mensajePRESENTACIONP"/>
</td>
                    </tr></table>



                    
         </form><?php } ?> 
         <?php if($conexion->variablespermisos('','PRESENTACION_PRODUCTOS','email')=='si'){ ?>
         <form name="form_emai_presentacion" id="form_emai_presentacion">
           <table><tr>
         <td style="width:500px" ><textarea  style="float:right" placeholder="ESCRIBE AQUÍ TUS CORREOS SEPARADOS POR PUNTO Y COMA EJEMPLO: NOMBRE@CORREO.ES;NOMBRE@CORREO.ES"  name="EMAIL_RESENTACION_PRODUCTOS" id="EMAIL_RESENTACION_PRODUCTOS" class="form-control" aria-label="With textarea"><?php echo $EMAIL_RESENTACION_PRODUCTOS; ?></textarea></td>
           <td> <button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviar_email_presenta">ENVIAR POR EMAIL</button></th>  
          </tr></table><?php } ?>



           
          <?php
$querycontras = $proveedoresC->listadopresentaproductosyserv();
?>

<br>
<div class='table-responsive'>
<div align='right'>
<div>
<br>
<div id='employee_table'>
<tbody= 'font-style:italic;'>
<table class="table table-striped table-bordered" style="width:100%"  id='resetePRESENTACIONp' name='resetePRESENTACIONp'>
<tr style="text-align:center">
<th width="15%"style="background:#c9e8e8">ENVIAR POR EMAIL</th>  
<th width="20%"style="background:#c9e8e8">PRODUCTO O SERVICIO</th>
<th width="20%"style="background:#c9e8e8">PRESENTACÍÓN DEL PRODUCTO</th>
<th width="20%"style="background:#c9e8e8">OBSERVACIONES</th>
<th width="20%"style="background:#c9e8e8"> ÚLTIMA CARGA</th>
</tr>
<?php
while($row = mysqli_fetch_array($querycontras))
{
			if($row["PRESENTACION_VIDEO"]!=""){
$urlPRESENTACION_VIDEO = "<a target='_blank'
href='includes/archivos/".$row["PRESENTACION_VIDEO"]."'>Visualizar!</a>";
}else{
$urlPRESENTACION_VIDEO="";
}
?>
<tr style='background:#f5f9fc;text-align:center'>
<td style="text-align:center" >
<input type="checkbox" style="width:17%" class="form-check-input" name="servpresentacion[]" id="servpresentacion" value="<?php echo $row["id"]; ?>"/> </td>
<td ><?php echo $row["PRODUCTO_PRESENTA"]; ?></td>
<td ><?php echo $urlPRESENTACION_VIDEO; ?></td>
<td ><?php echo $row["PRESENTACION_OBSERVACIONES"]; ?></td>
<td ><?php echo $row["PRODUCTO_PRESENTACION_FECHA"]; ?></td> 
       
<td><?php if($conexion->variablespermisos('','PRESENTACION_PRODUCTOS','modificar')=='si'){ ?>
<input type="button" name="view" value="MODIFICAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_datapresenservmodifica" /><?php } ?></td>
<td><?php if($conexion->variablespermisos('','PRESENTACION_PRODUCTOS','borrar')=='si'){ ?>

<input type="button" name="borra_id_servis" value="BORRAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_datapresenservborrar" />
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
