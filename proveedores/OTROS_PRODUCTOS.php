<div id="content">     
			<hr/>
		<strong>	  <p class="mb-0 text-uppercase" ><img src="includes/contraer31.png" id="mostrar2" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar2" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp; PRODUCTOS O SERVICIOS QUE OFRECE EL PROVEEDOR</p></strong></div>


<div  id="mensajeOTROSP2">
<div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $otrosproductosporcentaje ; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $otrosproductosporcentaje ; ?>%</div></div>
									</div>
							
	        <div id="target2" style="display:block;" class="content2">
        <div class="card">
          <div class="card-body">
		  				 
          <?php if($conexion->variablespermisos('','OTROS_PRODUCTOS','guardar')=='si'){ ?>
                      <form class="row g-3 needs-validation was-validated" id="POTROSPform"  novalidate="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 
 
                  
                        <div class="col-md-4"style="background:#fef5e7">

                        <strong>  <label for="validationCustom01" class="form-label">PRODUCTO O SERVICIO:</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $PRODUCTO_O_SERVICIO_9; ?>" required="" name="PRODUCTO_O_SERVICIO_9">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4"style="background:#d4f6c8">

                        <strong>   <label for="validationCustom01" class="form-label">FOTO O PRESENTACIÓN DEL PRODUCTO O SERVICIO:</label></strong>
                          <input type="file" class="form-control" id="validationCustom01" value="<?php echo $PRODUCTO_O_SERVICIO_10; ?>" required="" name="PRODUCTO_O_SERVICIO_10">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4"style="background:#fbeee6">

                        <strong>   <label for="validationCustom01" class="form-label">OBSERVACIONES:</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $PRODUCTO_O_SERVICIO_11; ?>" required="" name="PRODUCTO_O_SERVICIO_11">
                          <div class="valid-feedback">Bien!</div>
                        
                        </div><div><tr>
                        <th style="text-align:center;background:#faebee;" scope="col">FECHA DE ÚLTIMA CARGA</th>   
           <td  style="background:#faebee">
           <strong>
           <?php echo date('Y-m-d'); ?>
           </strong>
           <input type="hidden" style="width:200px;"  class="form-control" id="validationCustom03"   value="<?php echo date('Y-m-d'); ?>" name="PRODUCTO_O_SERVICIO_12">
           
           </td></tr></div>
              &nbsp; &nbsp; &nbsp;<table><tr>
     
                         <input type="hidden" value="enviarOTROS_PRODUCTOS" name="enviarOTROS_PRODUCTOS"/>     
                   
                    <td><button class="btn btn-sm btn-outline-success px-5"   type="button" id="enviarOTROSP">GUARDAR</button><div style="

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
    1px 30px 60px rgba(16,16,16,0.4);"


id="mensajeOTROSP"/></td>
                   </tr></table>
<?php } ?>
</form>
<?php if($conexion->variablespermisos('','OTROS_PRODUCTOS','email')=='si'){ ?>
         <form name="form_emai_produservii" id="form_emai_produservii">
         <table><tr>
         <td ><textarea  placeholder="ESCRIBE AQUÍ TUS CORREOS SEPARADOS POR PUNTO Y COMA EJEMPLO: NOMBRE@CORREO.ES;NOMBRE@CORREO.ES"  style="width:500px;" name="OTROSPRO_ENVIAR_IMAIL" id="OTROSPRO_ENVIAR_IMAIL" class="form-control" aria-label="With textarea"><?php echo $OTROSPRO_ENVIAR_IMAIL; ?></textarea></td>
           <td> <button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviar_email_otrosproductos">ENVIAR POR EMAIL</button></th>   
          </tr></table>
<?php } ?>




          <?php
$querycontras = $proveedoresC->listadootrosproductosyserv();
//OTROSPRO_ENVIAR_IMAIL
?>

<br />
<div class='table-responsive'>
<div align='right'>
</div>
<br />
<div id='employee_table'>
<tbody= 'font-style:italic;'>
<table class="table table-striped table-bordered" style="width:100%"  id='resetePRODUCYSERVp' name='resetePRODUCYSERVp'>
<tr style="text-align:center">
<th width="15%"style="background:#c9e8e8">ENVIAR POR EMAIL</th>  
<th width="20%"style="background:#c9e8e8">PRODUCTO O SERVICIO</th>
<th width="20%"style="background:#c9e8e8">FOTO DEL PRODUCTO</th>
<th width="20%"style="background:#c9e8e8">OBSERVACIONES</th>
<th width="20%"style="background:#c9e8e8">FECHA DE ÚLTIMA CARGA</th>
</tr>
<?php
while($row = mysqli_fetch_array($querycontras))
{
			if($row["PRODUCTO_O_SERVICIO_10"]!=""){
$urlPRODUCTO_O_SERVICIO_10 = "<a target='_blank'
href='includes/archivos/".$row["PRODUCTO_O_SERVICIO_10"]."'>Visualizar!</a>";
}else{
$urlPRODUCTO_O_SERVICIO_10="";
}
?>
<tr style='background:#f5f9fc;text-align:center'>
<td style="text-align:center;width:auto" >
<input type="checkbox" style="width:12%" class="form-check-input" name="servproduc[]" id="servproduc" value="<?php echo $row["id"]; ?>"/> </td>
<td ><?php echo $row["PRODUCTO_O_SERVICIO_9"]; ?></td>
<td ><?php echo $urlPRODUCTO_O_SERVICIO_10; ?></td>
<td ><?php echo $row["PRODUCTO_O_SERVICIO_11"]; ?></td>
<td ><?php echo $row["PRODUCTO_O_SERVICIO_12"]; ?></td>
<td><?php if($conexion->variablespermisos('','OTROS_PRODUCTOS','modificar')=='si'){ ?><input type="button" name="view" value="MODIFICAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_dataotrosservmodifica" /></td>
<?php } ?>
<td>
<?php if($conexion->variablespermisos('','OTROS_PRODUCTOS','borrar')=='si'){ ?><input type="button" name="borra_id_servis" value="BORRAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_dataotrosservborrar" /></td>
<?php } ?>
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
