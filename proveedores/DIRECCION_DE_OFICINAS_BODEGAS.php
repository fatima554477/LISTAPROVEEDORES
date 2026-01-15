<div id="content">     
			<hr/>
			<strong>  <p class="mb-0 text-uppercase">
<img src="includes/contraer31.png" id="mostrar12" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar12" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;DIRECCIÓN DE OFICINAS, SUCURSALES O BODEGAS</p><div  id="mensajeDIROFICINASBODEGAS2"><div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $datosDIROFICINASBODEGAS; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $datosDIROFICINASBODEGAS; ?>%</div>
								</div></div></strong>
	        <div id="target12" style="display:block;"  class="content2">
        <div class="card">
          <div class="card-body">
	<form class="row g-3 needs-validation was-validated" novalidate="" id="DIROFICINASBODEGASform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
          <table class="table mb-0 table-striped">

                <tr>
            
                <th style="text-align:center" scope="col"> DIRECCIÓN DE OFICINAS, SUCURSALES O BODEGAS: </th>
                 </tr>

      

             
<?php if($conexion->variablespermisos('','DIRECCION_DE_OFICINAS_BODEGAS','guardar')=='si'){ ?>
    
            


      <table class="table mb-0 table-striped">
      <tr>
               
               <th style="text-align:center" scope="col">DIRECCIÓN DE OFICINAS,  SUCURSALES O BODEGAS </th>
               <th style="text-align:center" scope="col">INFORMACIÓN O ARCHIVO</th>

               </tr>
    

    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">EDIFICIO:</th>
    <td  style="background:#ebf8fa;width: 700px"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $P_EDIFICIO_OSB; ?>" name="P_EDIFICIO_OSB"></td>

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
    <td  style="background:#ebf8fa"><input type="teL" maxlength="20" class="form-control formato-numero" id="validationCustom03" required=""  value="<?php echo $P_TELEFONO_OSB_1; ?>" name="P_TELEFONO_OSB_1" ></td>

    </tr>
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">TELEFONO 2:</th>
    <td  style="background:#ebf8fa"><input type="text" maxlength="20" class="form-control formato-numero" id="validationCustom03" required=""  value="<?php echo $P_TELEFONO_OSB_2; ?>" name="P_TELEFONO_OSB_2"  onkeyup="formato_telefono('P_TELEFONO_OSB_2')"></td>

</tr>
    </table>

<table class="table mb-0 table-striped">
<tr style="background:#ebf8fa;">
<th style="text-align:center" scope="col">OBSERVACIONES</th>
<td ><textarea style="width:400px;" name="P_IMAIL_CONTACTO_OSB_1" class="form-control" aria-label="With textarea"><?php echo $P_IMAIL_CONTACTO_OSB_1; ?></textarea></td><br></br>
           <th style="text-align:center;background:#ebf8fa;" scope="col">FECHA DE ÚLTIMA CARGA</th>   
           <td  style="background:#ebf8fa">
           <strong>
           <?php echo date('Y-m-d'); ?>
           </strong>
           <input type="hidden" style="width:200px;"  class="form-control" id="validationCustom03"   value="<?php echo date('Y-m-d'); ?>" name="P_NUMERO_EXTENCION_OSB_1">
           
           </td>
           </tr>
      
						 
         
        
              <input type="hidden" value="validaDIROFICINASBODEGAS" name="validaDIROFICINASBODEGAS"/>


              <tr>

              <th>


<button class="btn btn-sm btn-outline-success px-5"   type="button" id="enviarDIROFICINASBODEGAS">GUARDAR</button><div style="
 position: absolute;
    top: 80%; 
    right: 50%;
    transform: translate(50%,-50%);
    text-transform: uppercase;
    font-family: verdana;
    font-size: 2em;
    font-weight: 800;
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
    1px 30px 60px rgba(16,16,16,0.4);"  id="mensajeDIROFICINASBODEGAS"></th>
          
</tr><?php } ?></table> 
            </form>

        
            <?php if($conexion->variablespermisos('','DIRECCION_DE_OFICINAS_BODEGAS','email')=='si'){ ?>
            <form name="form_emai_bodega" id="form_emai_bodega">
             
             <table><tr>
            <td   style="width: 500px"><textarea  style="float:right"  placeholder="ESCRIBE AQUÍ TUS CORREOS SEPARADOS POR PUNTO Y COMA EJEMPLO: NOMBRE@CORREO.ES;NOMBRE@CORREO.ES" name="BODEGAS_ENVIAR_IMAIL" id="BODEGAS_ENVIAR_IMAIL" class="form-control" aria-label="With textarea"><?php echo $BODEGAS_ENVIAR_EMAIL; ?></textarea></td>
              <td> <button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviaremailBODEGAS">ENVIAR POR EMAIL</button><?php } ?></td>   
         
                          </tr></table>
	 <?php
$querycontras = $proveedoresC->listadoBODEGASpro();
?>

<br />
<div class='table-responsive'>
<div align='right'>
</div>
<br />
<div id='employee_table'>
<tbody= 'font-style:italic;'>
<table class="table table-striped table-bordered" style="width:100%" id='resetBodegaP' name='resetBodegaP'>
<tr style="text-align:center">
<th width="20%"style="background:#c9e8e8">ENVIAR POR EMAIL</th>
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
<th width="35%"style="background:#c9e8e8">OBSERVACIONES</th>
<th width="35%"style="background:#c9e8e8">ÚLTIMA CARGA</th>
</tr>
<?php
while($row = mysqli_fetch_array($querycontras))
{
?>                                                                                
<tr style="background:#f5f9fc;text-align:center;">
<td style="text-align:center" >
	   <input type="checkbox" style="width:26%" class="form-check-input" name="bodegaPRO[]" id="bodegaPRO" value="<?php echo $row["id"]; ?>"/> </td>

<td ><?php echo $row["P_EDIFICIO_OSB"]; ?></td>
<td ><?php echo $row["P_CALLE_OSB"]; ?></td>
<td ><?php echo $row["P_NUMERO_EXTERIOR_OSB"]; ?></td>
<td ><?php echo $row["P_NUMERO_INTERIOR_OSB"]; ?></td>
<td ><?php echo $row["P_NUMERO_OFICINA_OSB"]; ?></td>
<td ><?php echo $row["P_COLONIA_OSB"]; ?></td>
<td ><?php echo $row["P_ALCALDIA_OSB"]; ?></td>
<td ><?php echo $row["P_CP_OSB"]; ?></td>
<td ><?php echo $row["P_CIUDAD_OSB"]; ?></td>
<td ><?php echo $row["P_ESTADO_OSB"]; ?></td>
<td ><?php echo $row["P_PAIS_OSB"]; ?></td>
<td ><?php echo $row["P_UBICACION_MAPA_OSB"]; ?></td>
<td ><?php echo $row["P_TELEFONO_OSB_1"]; ?></td>
<td ><?php echo $row["P_TELEFONO_OSB_2"]; ?></td>
<td ><?php echo $row["P_IMAIL_CONTACTO_OSB_1"]; ?></td>
<td ><?php echo $row["P_NUMERO_EXTENCION_OSB_1"]; ?></td>
             

<td><?php if($conexion->variablespermisos('','DIRECCION_DE_OFICINAS_BODEGAS','modificar')=='si'){ ?>

<input type="button" name="view" value="MODIFICAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_dataproBodegamodifica" /><?php } ?></td>

<td><?php if($conexion->variablespermisos('','DIRECCION_DE_OFICINAS_BODEGAS','borrar')=='si'){ ?>


<input type="button" name="view2" value="BORRAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_dataproBodegaborrar" />
<?php } ?></td>
</tr>
<?php
}
?>
</table>
</tbody>
</div>
</div>
</div>
</form>

	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
                         </div>
                       
               </div>