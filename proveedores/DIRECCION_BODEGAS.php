<div id="content">     
			<hr/>
			<strong>  <p class="mb-0 text-uppercase">
<img src="includes/contraer31.png" id="mostrar10" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar10" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;DIRECCIÓN DE OFICINAS, SUCURSALES O BODEGAS</p><div  id="mensajeDIROFICINASBODEGAS"><div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $datosDIROFICINASBODEGAS; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $datosDIROFICINASBODEGAS; ?>%</div>
								</div></div></strong>
	        <div id="target10" style="display:block;"  class="content2">
        <div class="card">
          <div class="card-body">
	<form class="row g-3 needs-validation was-validated" novalidate="" id="DIROFICINASBODEGASform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
 
              <table class="table mb-0 table-striped">

                <tr>
            
                <th style="text-align:center" scope="col"> DIRECCIÓN DE OFICINAS, SUCURSALES O BODEGAS: </th>
                 </tr>

      

            
            


      <table class="table mb-0 table-striped">
      <tr>
               
               <th style="text-align:center" scope="col">DIRECCIÓN DE OFICINAS,  SUCURSALES O BODEGAS </th>
               <th style="text-align:center" scope="col">INFORMACIÓN O ARCHIVO</th>

               </tr>
    

    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">EDIFICIO:</th>
    <td  style="background:#ebf8fa"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $P_EDIFICIO_OSB; ?>" name="P_EDIFICIO_OSB"></td>

    </tr>
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">CALLE:</th>
    <td  style="background:#ebf8fa"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $P_CALLE_OSB; ?>" name="P_CALLE_OSB"></td>

    </tr>
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">NÚMERO EXTERIOR:</th>
    <td  style="background:#ebf8fa"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $P_NUMERO_EXTERIOR_OSB; ?>" name="P_NUMERO_EXTERIOR_OSB"></td>

    </tr>
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">NÚMERO INTERIOR:</th>
    <td  style="background:#ebf8fa"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $P_NUMERO_INTERIOR_OSB; ?>" name="P_NUMERO_INTERIOR_OSB"></td>

    </tr>
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">NÚMERO DE OFICINA:</th>
    <td  style="background:#ebf8fa"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $P_NUMERO_OFICINA_OSB; ?>" name="P_NUMERO_OFICINA_OSB"></td>
    </tr>
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">COLONIA:</th>
    <td  style="background:#ebf8fa"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $P_COLONIA_OSB; ?>" name="P_COLONIA_OSB"></td>

    </tr>
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">ALCALDÍA:</th>
    <td  style="background:#ebf8fa"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $P_ALCALDIA_OSB; ?>" name="P_ALCALDIA_OSB"></td>

    </tr>
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">C.P:</th>
    <td  style="background:#ebf8fa"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $P_CP_OSB; ?>" name="P_CP_OSB"></td>

    </tr>
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">CIUDAD:</th>
    <td  style="background:#ebf8fa"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $P_CIUDAD_OSB; ?>" name="P_CIUDAD_OSB"></td>

    </tr>
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">ESTADO:</th>
    <td  style="background:#ebf8fa"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $P_ESTADO_OSB; ?>" name="P_ESTADO_OSB"></td>

    </tr>
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">PAÍS:</th>
    <td  style="background:#ebf8fa"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $P_PAIS_OSB; ?>" name="P_PAIS_OSB"></td>

    </tr>
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">UBICACIÓN EN EL MAPA (COPÍA EL LINK)  <a href="https://www.google.com.gt/maps/@<?php echo $valor1 ?>,<?php echo $valor2 ?>,15z" target="_blank">(GOOGLE MAPS)</a></th>
    <td  style="background:#ebf8fa"> <input type= text id="search_location" class="form-control" placeholder="Search location"  name="P_UBICACION_MAPA_OSB" value="<?php echo $P_UBICACION_MAPA_OSB; ?>"></td>

    </tr>
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">TELEFONO 1:</th>
    <td  style="background:#ebf8fa"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $P_TELEFONO_OSB_1; ?>" name="P_TELEFONO_OSB_1"></td>

    </tr>
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">TELEFONO 2:</th>
    <td  style="background:#ebf8fa"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $P_TELEFONO_OSB_2; ?>" name="P_TELEFONO_OSB_2"></td>

    </tr>
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">WHATSAPP:</th>
    <td  style="background:#ebf8fa"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $P_WHATSAPP_OSB_1; ?>" name="P_WHATSAPP_OSB_1"></td>

    </tr>
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">PÁGINA WEB:</th>
    <td  style="background:#ebf8fa"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $P_NOMBRE_CONTACTO_OSB_1; ?>" name="P_NOMBRE_CONTACTO_OSB_1"></td>

    </tr>
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">NOMBRE DE LA APP:</th>
    <td  style="background:#ebf8fa"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $P_NUMERO_CEL_CONTACTO_OSB_1; ?>" name="P_NUMERO_CEL_CONTACTO_OSB_1"></td>

    </tr>
   
    </table>
                            
</div><br></br>
<table class="table mb-0 table-striped">
<tr style="background:#fefac0;">
<th style="text-align:center" scope="col">OBSERVACIONES</th>
<td ><textarea style="width:400px;" name="P_IMAIL_CONTACTO_OSB_1" class="form-control" aria-label="With textarea"><?php echo $P_IMAIL_CONTACTO_OSB_1; ?></textarea></td><br></br>
           <th style="text-align:center;background:#faebee;" scope="col">FECHA DE ÚLTIMA CARGA</th>   
           <td  style="background:#faebee">
           <strong>
           <?php echo date('Y-m-d'); ?>
           </strong>
           <input type="hidden" style="width:200px;"  class="form-control" id="validationCustom03"   value="<?php echo date('Y-m-d'); ?>" name="P_NUMERO_EXTENCION_OSB_1">
           
           </td>
           </tr>
          </table> 
						 
                     
				  <br></br>
          <br></br>
          
              <input type="hidden" value="validaDIROFICINASBODEGAS" name="validaDIROFICINASBODEGAS"/>


<table>
  <tr>       
<th>
          <button class="btn btn-sm btn-outline-success px-5"   type="button" id="enviarDIROFICINASBODEGAS">GUARDAR</button></th></tr>
          
            </table>
            </form>

        
            <form name="form_emai_bodega" id="form_emai_bodega">
             
        
            <td ><textarea placeholder="ESCRIBE AQUÍ TUS CORREOS SEPARADOS POR PUNTO Y COMA EJEMPLO: NOMBRE@CORREO.ES;NOMBRE@CORREO.ES"  style="width: 500px;px;" name="BODEGAS_ENVIAR_IMAIL" id="BODEGAS_ENVIAR_IMAIL" class="form-control" aria-label="With textarea"><?php echo $BODEGAS_ENVIAR_EMAIL; ?></textarea></td><br></br>
              <th> <button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviaremailBODEGAS">ENVIAR POR EMAIL</button></th>   
         
	 
	 <?php
$querycontras = $conexion->listado_direccionBODEGAS1();
?>

<br />
<div class='table-responsive'>
<div align='right'>
</div>
<br />
<div id='employee_table'>
<tbody= 'font-style:italic;'>
<table class="table table-striped table-bordered" style="width:100%" id='resetDirBodega' name='resetDirBodega'>
<tr style="text-align:center">
<th width="35%"style="background:#c9e8e8">ENVIAR POR EMAIL</th>
<th width="35%"style="background:#c9e8e8">NOMBRE DE LA OFICINA, SUCURSAl O BODEGA</th>
<th width="35%"style="background:#c9e8e8">EDIFICIO</th>
<th width="35%"style="background:#c9e8e8">CALLE</th>
<th width="35%"style="background:#c9e8e8">NÚMERO EXTERIOR</th>
<th width="35%"style="background:#c9e8e8">NÚMERO INTERIOR</th>
<th width="35%"style="background:#c9e8e8">NÚMERO DE OFICINA</th>
<th width="35%"style="background:#c9e8e8">COLONIA</th>
<th width="35%"style="background:#c9e8e8">ALCALDÍA</th>
<th width="35%"style="background:#c9e8e8">C.P</th>
<th width="35%"style="background:#c9e8e8">CIUDAD</th>
<th width="35%"style="background:#c9e8e8">ESTADO</th>
<th width="35%"style="background:#c9e8e8">PAÍS</th>
<th width="35%"style="background:#c9e8e8">UBICACIÓN EN EL MAPA</th>
<th width="35%"style="background:#c9e8e8">TELEFONO 1</th>
<th width="35%"style="background:#c9e8e8">TELEFONO 2</th>
<th width="35%"style="background:#c9e8e8">WHATSAPP</th>
<th width="35%"style="background:#c9e8e8">PÁGINA WEB</th>
<th width="35%"style="background:#c9e8e8">NOMBRE DE LA APP</th>
<th width="35%"style="background:#c9e8e8">OBSERVACIONES</th>
<th width="35%"style="background:#c9e8e8">ÚLTIMA CARGA</th>
</tr>
<?php
while($row = mysqli_fetch_array($querycontras))
{
?>
<tr style="background:#f5f9fc;text-align:center;">
<td style="text-align:center" >
	   <input type="checkbox" style="width:26%" class="form-check-input" name="bodega[]" id="bodega" value="<?php echo $row["id"]; ?>"/> </td>
<td ><?php echo $row["BODEGA_INFORMACION"]; ?></td>
<td ><?php echo $row["EDIFICIO_INFORMACION"]; ?></td>
<td ><?php echo $row["CALLE_INFORMACION"]; ?></td>
<td ><?php echo $row["NUEX_INFORMACION"]; ?></td>
<td ><?php echo $row["NUIN_INFORMACION"]; ?></td>
<td ><?php echo $row["NUOFI_INFORMACION"]; ?></td>
<td ><?php echo $row["COLONIA_INFORMACION"]; ?></td>
<td ><?php echo $row["ALC_INFORMACION"]; ?></td>
<td ><?php echo $row["CPB_INFORMACION"]; ?></td>
<td ><?php echo $row["CIUD_INFORMACION"]; ?></td>
<td ><?php echo $row["ESB_INFORMACION"]; ?></td>
<td ><?php echo $row["PAIS_INFORMACION"]; ?></td>
<td ><?php echo $row["B_UBICACION_MAPA_EPC"]; ?></td>
<td ><?php echo $row["TELE_INFORMACION"]; ?></td>
<td ><?php echo $row["TEL2B_INFORMACION"]; ?></td>
<td ><?php echo $row["WHAT_INFORMACION"]; ?></td>
<td ><?php echo $row["WEB_INFORMACION"]; ?></td>
<td ><?php echo $row["APP_INFORMACION"]; ?></td>
<td ><?php echo $row["EDIFICIO_OBSERVACIONES"]; ?></td>
<td ><?php echo $row["EDIFICIO_ULTIMA_CARGA"]; ?></td>
<td><input type="button" name="view" value="MODIFICAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_dataDirBodegamodifica" /></td>
<td><input type="button" name="view2" value="BORRAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_dataDirBodegaborrar" /></td>
</tr>
<?php
}
?>
</table>
</tbody>
</div>
</div>
</form>
</div> 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
                         </div>
                       
               </div>