<div id="content">     
			<hr/>
		<strong>	  <p class="mb-0 text-uppercase" ><img src="includes/contraer31.png" id="mostrar3" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar3" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;PAGINA WEB Y REDES SOCIALES DE PRODUCTOS O SERVICIOS QUE OFRECE EL PROVEEDOR</p></strong></div>


<div  id="mensajeLIGAPRO2">
<div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $otrosproductosporcentaje ; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $otrosproductosporcentaje ; ?>%</div></div>
									</div>
							
	        <div id="target3" style="display:block;" class="content2">
        <div class="card">
          <div class="card-body">
          <?php if($conexion->variablespermisos('','LIGA_PRODUCTOS','guardar')=='si'){ ?>
                      <form class="row g-3 needs-validation was-validated" id="LIGAPRODUCTOSform"  novalidate="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 
 
                  
                      
			    <div class="col-md-4"style="background:#fef5e7">			
 
        <strong><label for="validationCustom03" class="form-label">PAGINA WEB Y REDES SOCIALES:</label></strong>  

        <span id="desplegadoreset">
            <?php
            $encabezado = '';
            $option = '';
            $queryper = $conexion->desplegables07('PROVEEDORES','PRODUCTO_O_SERVICIO_LIGA');
            
            // Almacenar y ordenar opciones
            $opciones = array();
            while($row1 = mysqli_fetch_array($queryper)) {
                $opciones[] = $row1;
            }
            usort($opciones, function($a, $b) {
                return strcasecmp($a['nombre_campo'], $b['nombre_campo']);
            });
            
            // Generar HTML
            $encabezado = '<select class="form-select mb-3" aria-label="Default select example" id="PRODUCTO_O_SERVICIO_LIGA" required="" name="PRODUCTO_O_SERVICIO_LIGA">
                           <option value="">SELECCIONA UNA OPCIÓN</option>';
            $fondos = array("fff0df","f4ffdf","dfffed","dffeff","dfe8ff","efdfff","ffdffd","efdfff","ffdfe9");
            $num = 0;
            
            foreach($opciones as $row1) {
                $num = ($num == 8) ? 0 : $num + 1;
                $select = ($PRODUCTO_O_SERVICIO_LIGA == $row1['nombre_campo']) ? "selected" : "";
                $option .= '<option style="background: #'.$fondos[$num].'" '.$select.' value="'.$row1['nombre_campo'].'">'.strtoupper($row1['nombre_campo']).'</option>';
            }
            echo $encabezado.$option.'</select>';			
            ?>        
        </span>
  <div class="valid-feedback">Bien!</div>
                        </div>
						
						
                        <div class="col-md-4"style="background:#d4f6c8">

                        <strong>   <label for="validationCustom01" class="form-label">LIGA DEL PRODUCTO:</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $PRODUCTO_SERVICIO_LIGA; ?>" required="" name="PRODUCTO_SERVICIO_LIGA">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4"style="background:#fbeee6">

                        <strong>   <label for="validationCustom01" class="form-label">OBSERVACIONES:</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $LIGA_SERVICIO_OBSERVACIONES; ?>" required="" name="LIGA_SERVICIO_OBSERVACIONES">
                          <div class="valid-feedback">Bien!</div>
                        
                        </div><div><tr>
                        <th style="text-align:center;background:#faebee;" scope="col">FECHA DE ÚLTIMA CARGA</th>   
           <td  style="background:#faebee">
           <strong>
           <?php echo date('Y-m-d'); ?>
           </strong>
           <input type="hidden" style="width:200px;"  class="form-control" id="validationCustom03"   value="<?php echo date('Y-m-d'); ?>" name="ULTIMA_CARGA_LIGA">
           
           </td>
     </tr>
     </div>
       
            
                        

                 <table><tr>
    
                    <input type="hidden" value="hLIGA_PRODUCTOS" name="hLIGA_PRODUCTOS"/>     
                    
                    
       <th>

<button class="btn btn-sm btn-outline-success px-5"   type="button" id="enviarligaPROD">GUARDAR</button><div style="

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


id="mensajeLIGAPRO"/></th>
       </tr><?php } ?></table>
             </form>
             
         <?php if($conexion->variablespermisos('','LIGA_PRODUCTOS','email')=='si'){ ?>
         <form name="form_emai_LIGApro" id="form_emai_LIGApro">
         <table><tr>
         <td style="width:500px" ><textarea  style="float:right" placeholder="ESCRIBE AQUÍ TUS CORREOS SEPARADOS POR PUNTO Y COMA EJEMPLO: NOMBRE@CORREO.ES;NOMBRE@CORREO.ES"  style="width:500px" name="LIGAPRO_ENVIAR_IMAIL" id="LIGAPRO_ENVIAR_IMAIL" class="form-control" aria-label="With textarea"><?php echo $LIGAPRO_ENVIAR_IMAIL; ?></textarea></td>
           <td> <button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviar_email_productosliga">ENVIAR POR EMAIL</button><?php } ?></td>   
          </tr></table>

 







          <?php
$querycontras = $proveedoresC->listadoligaproductosyserv();

?>

<br />
<div class='table-responsive'>
<div align='right'>
</div>
<br />
<div id='employee_table'>
<tbody= 'font-style:italic;'>
<table class="table table-striped table-bordered" style="width:100%"  id='reseteligaPRODUCp' name='reseteligaPRODUCp'>
<tr style="text-align:center">
<th width="15%"style="background:#c9e8e8">ENVIAR POR EMAIL</th>  
<th width="20%"style="background:#c9e8e8">PRODUCTO O SERVICIO</th>
<th width="20%"style="background:#c9e8e8">LIGA DEL PRODUCTO</th>
<th width="20%"style="background:#c9e8e8">OBSERVACIONES</th>
<th width="20%"style="background:#c9e8e8">FECHA DE ÚLTIMA CARGA</th>
</tr>
<?php
while($row = mysqli_fetch_array($querycontras))
{
?>
<tr style='background:#f5f9fc;text-align:center'>                     
<td style="text-align:center" >
<input type="checkbox" style="width:17%" class="form-check-input" name="servproducliga[]" id="servproducliga" value="<?php echo $row["id"]; ?>"/> </td>
<td ><?php echo $row["PRODUCTO_O_SERVICIO_LIGA"]; ?></td>
<td ><?php echo $row["PRODUCTO_SERVICIO_LIGA"]; ?></td>
<td ><?php echo $row["LIGA_SERVICIO_OBSERVACIONES"]; ?></td>
<td ><?php echo $row["ULTIMA_CARGA_LIGA"]; ?></td>

<td>
<?php if($conexion->variablespermisos('','LIGA_PRODUCTOS','modificar')=='si'){ ?>

<input type="button" name="view" value="MODIFICAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_dataLIGAservmodifica" /><?php } ?></td>
<td>
<?php if($conexion->variablespermisos('','LIGA_PRODUCTOS','borrar')=='si'){ ?>

<input type="button" name="borra_id_servis" value="BORRAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_dataLIGAservborrar" />
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
