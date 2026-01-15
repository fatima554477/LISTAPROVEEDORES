<div id="content">     
			<hr/>
		<strong>	  <p class="mb-0 text-uppercase" ><img src="includes/contraer31.png" id="mostrar8" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar8" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp; ADJUNTAR OTROS DOCUMENTOS O IMÁGENES</p></strong></div>


<div  id="mensajeOTRODOCUMENTO2">
<div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $datosOTROSDOCUMENTOS; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $datosOTROSDOCUMENTOS ; ?>%</div></div>
									</div>
							
	        <div id="target8" style="display:block;" class="content2">
        <div class="card">
          <div class="card-body">
                        <?php if($conexion->variablespermisos('','OTRO_DOCUMENTO','guardar')=='si'){ ?>
                      <form class="row g-3 needs-validation was-validated" id="OTRODOCUMENTOform"  novalidate="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 
 
                  
                        <div class="col-md-4"style="background:#fef5e7">

                        <strong>  <label for="validationCustom01" class="form-label"> NOMBRE DEL DOCUMENTO:</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $F_PADJUNTAR_OTRO_DOCUMENTO_4_1; ?>" required="" name="F_PADJUNTAR_OTRO_DOCUMENTO_4_1">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4"style="background:#d4f6c8">

                        <strong>   <label for="validationCustom01" class="form-label">ADJUNTAR OTRO DOCUMENTO: (FORMATO PDF, JPG O PNG)</label></strong>
                          <input type="file" class="form-control" id="validationCustom01" value="<?php echo $F_PADJUNTAR_OTRO_DOCUMENTO_5_1; ?>" required="" name="F_PADJUNTAR_OTRO_DOCUMENTO_5_1">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4"style="background:#fbeee6">

                        <strong>   <label for="validationCustom01" class="form-label">OBSERVACIONES:</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $F_PADJUNTAR_OTRO_DOCUMENTO_6_1; ?>" required="" name="F_PADJUNTAR_OTRO_DOCUMENTO_6_1">
                          <div class="valid-feedback">Bien!</div>
                        
                        </div>


                      
                        <td style="text-align:center;background:#faebee;" scope="col">FECHA DE ÚLTIMA CARGA 
                         
     
           <strong>
           <?php echo date('Y-m-d'); ?>
           </strong>
           <input type="hidden" style="width:200px;"  class="form-control" id="validationCustom03"   value="<?php echo date('Y-m-d'); ?>" name="F_PADJUNTAR_OTRO_DOCUMENTO_7_1">
		   
		   
		   
            <input type="hidden" value="validaOTROSDOCUMENTOS" name="validaOTROSDOCUMENTOS"/>   
</td><table><tr>
    <td  style="width: 200px;">
<button class="btn btn-sm btn-outline-success px-5"   type="button" id="OTROSDOCUMENTOS">GUARDAR</button><div style="

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


id="mensajeOTRODOCUMENTO"/>
</td></tr><?php } ?></table>
            
                        

 
                       
              
                   
                     </tr>       
                   
  
            
        </form>
        <table><tr> 
        <?php if($conexion->variablespermisos('','OTRO_DOCUMENTO','email')=='si'){ ?>
         <form name="form_emai_otrodocumento" id="form_emai_otrodocumento">
                       
         <td style="width:500px;" ><textarea  style="float:right" placeholder="ESCRIBE AQUÍ TUS CORREOS SEPARADOS POR PUNTO Y COMA EJEMPLO: NOMBRE@CORREO.ES;NOMBRE@CORREO.ES"  name="ENVIAR_EMAIL_OTROSDOCU" id="ENVIAR_EMAIL_OTROSDOCU" class="form-control" aria-label="With textarea"><?php echo $ENVIAR_EMAIL_OTROSDOCU; ?></textarea></td>
           <td> <button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviar_email_otrodocumento">ENVIAR POR EMAIL</button><?php } ?></th>   
          </tr></table> 


           

          <?php
$querycontras = $proveedoresC->listadootrosdocuumentos();
?>

<br />
<div class='table-responsive'>
<div align='right'>
</div>
<br />
<div id='employee_table'>
<tbody= 'font-style:italic;'>
<table class="table table-striped table-bordered" style="width:100%"  id='reseteOTROSDOCUUp' name='reseteOTROSDOCUUp'>
<tr style="text-align:center">
<th width="15%"style="background:#c9e8e8">ENVIAR POR EMAIL</th>  
<th width="20%"style="background:#c9e8e8">NOMBRE DEL DOCUMENTO</th>
<th width="20%"style="background:#c9e8e8">DOCUMENTO</th>
<th width="20%"style="background:#c9e8e8">OBSERVACIONES</th>
<th width="20%"style="background:#c9e8e8">FECHA DE ÚLTIMA CARGA</th>
</tr>
<?php
while($row = mysqli_fetch_array($querycontras))
{
			if($row["F_PADJUNTAR_OTRO_DOCUMENTO_5_1"]!=""){
$F_PADJUNTAR_OTRO_DOCUMENTO_5_1= "<a target='_blank'
href='includes/archivos/".$row["F_PADJUNTAR_OTRO_DOCUMENTO_5_1"]."'>Visualizar!</a>";
}else{
$F_PADJUNTAR_OTRO_DOCUMENTO_5_1="";
}
?>
<tr style='background:#f5f9fc;text-align:center'>
<td style="text-align:center" >
<input type="checkbox" style="width:17%" class="form-check-input" name="otrosdocuu[]" id="otrosdocuu" value="<?php echo $row["id"]; ?>"/> </td>
<td ><?php echo $row["F_PADJUNTAR_OTRO_DOCUMENTO_4_1"]; ?></td>
<td ><?php echo $F_PADJUNTAR_OTRO_DOCUMENTO_5_1; ?></td>
<td ><?php echo $row["F_PADJUNTAR_OTRO_DOCUMENTO_6_1"]; ?></td>
<td ><?php echo $row["F_PADJUNTAR_OTRO_DOCUMENTO_7_1"]; ?></td>   


<td><?php if($conexion->variablespermisos('','OTRO_DOCUMENTO','modificar')=='si'){ ?>

<input type="button" name="view" value="MODIFICAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_dataotrodocuumodifica" /><?php } ?></td>


<td><?php if($conexion->variablespermisos('','OTRO_DOCUMENTO','borrar')=='si'){ ?>

<input type="button" name="view2" value="BORRAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_dataotrodocuuborrar" />
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