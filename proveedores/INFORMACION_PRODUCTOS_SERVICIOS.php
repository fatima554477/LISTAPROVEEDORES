<div id="content">     
			<hr/>
		<strong>	  <p class="mb-0 text-uppercase" ><img src="includes/contraer31.png" id="mostrar1" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar1" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;INFORMACIÓN DEL PROVEEDOR</p></strong></div>
<div  id="mensajeINFOPRODSERV2">
<div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $informacionproductosserviciosporcentaje ; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $informacionproductosserviciosporcentaje ; ?>%</div></div></div>
								

	        <div id="target1" style="display:block;" class="content2">
        <div class="card">
          <div class="card-body">
            
                      <form class="row g-3 needs-validation was-validated" id="INFOPRODSERVform"  novalidate="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

		
                        

						
                        
                        
                        <div class="col-md-4" style="background:#d4f6c8">
                         <strong> <label for="validationCustom01" class="form-label">CIUDAD DONDE SE OTORGA EL SERVICIO:</label></strong>
                       
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $CIUDAD_SERVICIO; ?>" required="" name="CIUDAD_SERVICIO">
                          <div class="valid-feedback">Bien!</div>
                        </div>
						
						
						
                        <div class="col-md-4" style="background:#fbeee6">
                         <strong> <label for="validationCustom01" class="form-label">PAÍS DONDE SE OTORGA EL SERVICIO:</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $PAIS_SERVICIO; ?>" required="" name="PAIS_SERVICIO">
                          <div class="valid-feedback">Bien!</div>
                      
                        </div>
                        <div class="col-md-4" style="background:#fef5e7">

                        <strong>  <label for="validationCustom01" class="form-label">FECHA DE ÚLTIMA COMPRA:</label><br></strong>
                          <input type="date" class="form-control" id="validationCustom01" value="<?php echo $PFECHA_ULTIMACOMPRA; ?>" required="" name="PFECHA_ULTIMACOMPRA">
                          <div class="valid-feedback">Bien!</div>
                          </div>
                          <div class="col-md-4"style="background:#d4f6c8">
                          <strong>  <label for="validationCustom01" class="form-label">FECHA DE ACTUALIZACIÓN DE DOCUMENTOS:</label></strong>
                          <input type="date" class="form-control" id="validationCustom01" value="<?php echo $PFECHA_ACTUA_DOCUM; ?>" required="" name="PFECHA_ACTUA_DOCUM">
                          <div class="valid-feedback">Bien!</div>
                          </div>
                          
                          <div class="col-md-4"style="background:#fbeee6">
                          <strong>   <label for="validationCustom01" class="form-label">CONTACTADO POR:</label><br></strong>
<?php
$encabezadoA = '';
$queryper = $conexion->colaborador_generico_bueno();
$encabezadoA = '<select class="form-select mb-3" aria-label="Default select example" id="PCONTACTADO_POR" required="" name="PCONTACTADO_POR"  placeholder="SELECIONA UNA OPCIÓN">
<option> SELECIONA UNA OPCIÓN</option>';


$fondos = array("fff0df","f4ffdf","dfffed","dffeff","dfe8ff","efdfff","ffdffd","efdfff","ffdfe9");
$num = 0;

while($row = mysqli_fetch_array($queryper))
{

if($num==8){$num=0;}else{$num++;}

$select='';
if($PCONTACTADO_POR==$row['NOMBRE_1'].' '.$row['NOMBRE_2'].' '.$row['APELLIDO_PATERNO'].' '.$row['APELLIDO_MATERNO']){
$select='selected';
}

$option99 .= '<option style="background: #'.$fondos[$num].'" '.$select.' 
value="'.$row['NOMBRE_1'].' '.$row['NOMBRE_2'].' '.$row['APELLIDO_PATERNO'].' '.$row['APELLIDO_MATERNO'].'">'.$row['NOMBRE_1'].' '.$row['NOMBRE_2'].' '.$row['APELLIDO_PATERNO'].' '.$row['APELLIDO_MATERNO'].
'</option>';
}
echo $encabezadoA.$option99.'</select>';		
?>
                          <div class="valid-feedback">Bien!</div>
                        
                          </div>
                        <div class="col-md-4" style="background:#fef5e7">

                        <strong><label for="validationCustom01" class="form-label">OTRO:</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $P_OTRO; ?>" required="" name="P_OTRO">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        	

						
						
                     <table><tr>            
		<input type="hidden" value="validaINFOPRODSERV" name="validaINFOPRODSERV">  

	
	<td><?php if($conexion->variablespermisos('','INFORMACION_PRODUCTOS_SERVICIOS','guardar')=='si'){ ?>
<button class="btn btn-sm btn-outline-success px-5" type="button" id="enviarINFOPRODSERV">GUARDAR</button><div style="

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
    1px 30px 60px rgba(16,16,16,0.4);"  id="mensajeINFOPRODSERV">
</td>
</tr><?php } ?></table>
	
<?php if($conexion->variablespermisos('','INFORMACION_PRODUCTOS_SERVICIOS','email')=='si'){ ?>
            <table>   
        
            <tr>
       <td style="width:500px"><textarea style="float:right" placeholder="ESCRIBE AQUÍ TUS CORREOS SEPARADOS POR PUNTO Y COMA EJEMPLO: NOMBRE@CORREO.ES;NOMBRE@CORREO.ES"  name="SERVI_ENVIAR_IMAIL" id="SERVI_ENVIAR_IMAIL"  class="form-control" aria-label="With textarea"><?php echo $SERVI_ENVIAR_IMAIL; ?></textarea></td></center>
               <td><button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviarPROservprod">ENVIAR POR EMAIL</button><?php } ?></td>   
         
          </tr>
            </table>                     
 
 
                         </form>   
						 
                          </div>
						   </div>
						 </div>
						 