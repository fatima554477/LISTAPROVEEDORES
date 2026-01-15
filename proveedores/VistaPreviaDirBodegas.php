<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }  
//select.php  CONTRASENA_DE1
$identioficador = isset($_POST["personal_id"])?$_POST["personal_id"]:'';
if($identioficador != '')
{
 $output = '';
	require "controladorP.php";

$conexion = NEW accesoclase();
$queryVISTAPREV = $conexion->listadocontactospro2($identioficador);
 $output .= ' <form  id="listadocontactosproform"> 
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($queryVISTAPREV))
    {







     $output .= '
     
       
<tr>
<td width="30%"><label>NOMBRE DE LA OFICINA, SUCURSAL O BODEGA:</label></td>
<td width="70%"><input type="text" name="BODEGA_INFORMACION" value="'.$row["BODEGA_INFORMACION"].'"></td>
</tr>    
<tr>
<td width="30%"><label>EDIFICIO:</label></td>
<td width="70%"><input type="text" name="EDIFICIO_INFORMACION" value="'.$row["EDIFICIO_INFORMACION"].'"></td>
</tr> <tr>
<td width="30%"><label>CALLE:</label></td>
<td width="70%"><input type="text" name="CALLE_INFORMACION" value="'.$row["CALLE_INFORMACION"].'"></td>
</tr>  <tr>
<td width="30%"><label>NÚMERO EXTERIOR:</label></td>
<td width="70%"><input type="text" name="NUEX_INFORMACION" value="'.$row["NUEX_INFORMACION"].'"></td>
</tr>  <tr>
<td width="30%"><label>NÚMERO INTERIOR:</label></td>
<td width="70%"><input type="text" name="NUIN_INFORMACION" value="'.$row["NUIN_INFORMACION"].'"></td>
</tr>  <tr>
<td width="30%"><label>NÚMERO DE OFICINA:</label></td>
<td width="70%"><input type="text" name="NUOFI_INFORMACION" value="'.$row["NUOFI_INFORMACION"].'"></td>
</tr>  <tr>
<td width="30%"><label>COLONIA:</label></td>
<td width="70%"><input type="text" name="COLONIA_INFORMACION" value="'.$row["COLONIA_INFORMACION"].'"></td>
</tr>  <tr>
<td width="30%"><label>ALCALDÍA:</label></td>
<td width="70%"><input type="text" name="ALC_INFORMACION" value="'.$row["ALC_INFORMACION"].'"></td>
</tr>  <tr>
<td width="30%"><label>C.P:</label></td>
<td width="70%"><input type="text" name="CPB_INFORMACION" value="'.$row["CPB_INFORMACION"].'"></td>
</tr>  <tr>
<td width="30%"><label>CIUDAD:</label></td>
<td width="70%"><input type="text" name="CIUD_INFORMACION" value="'.$row["CIUD_INFORMACION"].'"></td>
</tr> <tr>
<td width="30%"><label>ESTADO:</label></td>
<td width="70%"><input type="text" name="ESB_INFORMACION" value="'.$row["ESB_INFORMACION"].'"></td>
</tr>  <tr>
<td width="30%"><label>PAÍS:</label></td>
<td width="70%"><input type="text" name="PAIS_INFORMACION" value="'.$row["PAIS_INFORMACION"].'"></td>
</tr><tr>
<td width="30%"><label>UBICACIÓN EN EL MAPA</label></td>
<td width="70%"><input type="text" name="B_UBICACION_MAPA_EPC" value="'.$row["B_UBICACION_MAPA_EPC"].'"></td>
</tr>  <tr>
<td width="30%"><label>TELÉFONO 1:</label></td>
<td width="70%"><input type="text" name="TELE_INFORMACION" value="'.$row["TELE_INFORMACION"].'"></td>
</tr>  <tr>
<td width="30%"><label>TELÉFONO 2:</label></td>
<td width="70%"><input type="text" name="TEL2B_INFORMACION" value="'.$row["TEL2B_INFORMACION"].'"></td>
</tr>  <tr>
<td width="30%"><label>WHATSAPP:</label></td>
<td width="70%"><input type="text" name="WHAT_INFORMACION" value="'.$row["WHAT_INFORMACION"].'"></td>
</tr>  <tr>
<td width="30%"><label>PÁGINA WEB:</label></td>
<td width="70%"><input type="text" name="WEB_INFORMACION" value="'.$row["WEB_INFORMACION"].'"></td>
</tr>  <tr>
<td width="30%"><label>NOMBRE DE LA APP:</label></td>
<td width="70%"><input type="text" name="APP_INFORMACION" value="'.$row["APP_INFORMACION"].'"></td>
</tr> 
<tr>
<td width="30%"><label>OBSERVACIONES</label></td>
<td width="70%"><input type="text" name="EDIFICIO_OBSERVACIONES" value="'.$row["EDIFICIO_OBSERVACIONES"].'"></td>
</tr> <tr>
<td width="30%"><label>FECHA DE ÚLTIMA CARGA</label></td>
<td width="70%"><input type=»text» readonly=»readonly»  name="EDIFICIO_ULTIMA_CARGA" value="'.$row["EDIFICIO_ULTIMA_CARGA"].'"></td>
</tr>
	 <tr>  
            <td width="30%"><label>GUARDAR</label></td>  
            <td width="70%"><button class="btn btn-sm btn-outline-success px-5"  type="button" id="clickdirbodegas">GUARDAR</button>
			
			<input type="hidden" value="ENVIARbodegas"  name="ENVIARbodegas"/>
			<input type="hidden" value="'.$row["id"].'"  name="IPbodegas22" id="IPbodegas22"/>
			</td>  
        </tr>
     ';
    }
    $output .= '</table></div>

	</form>';
    echo $output;
}

?>

<script>
	$(document).ready(function(){


$("#clickCONTprovee").click(function(){
	
   $.ajax({  
    url:"proveedores/controladorP.php",
    method:"POST",  
    data:$('#listadocontactosproform').serialize(),

    beforeSend:function(){  
    $('#mensajeNOMBRECONTACTO1').html('cargando'); 
    }, 	
	
    success:function(data){
	
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){
				
			$('#dataModal').modal('hide');
			$("#resetCONTACTOSP").load(location.href + " #resetCONTACTOSP");
			$("#mensajeNOMBRECONTACTO1").html("<span id='ACTUALIZADO' >"+data+"</span>");

			}else{
				
			$("#mensajeNOMBRECONTACTO1").html(data);
			
		}
    }  
   });
   
});

		});
		
	</script>