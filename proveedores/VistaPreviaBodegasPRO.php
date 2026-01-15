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
$queryVISTAPREV = $conexion->listadoBODEGASpro2($identioficador);
 $output .= ' <form  id="listadoBODEGASproform"> 
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($queryVISTAPREV))
    {

       
     $output .= '
     
       
   
<tr>
<td width="30%"><label>EDIFICIO:</label></td>
<td width="70%"><input type="text" name="P_EDIFICIO_OSB" value="'.$row["P_EDIFICIO_OSB"].'"></td>
</tr> <tr>
<td width="30%"><label>CALLE:</label></td>
<td width="70%"><input type="text" name="P_CALLE_OSB" value="'.$row["P_CALLE_OSB"].'"></td>
</tr>  <tr>
<td width="30%"><label>NÚMERO EXTERIOR:</label></td>
<td width="70%"><input type="text" name="P_NUMERO_EXTERIOR_OSB" value="'.$row["P_NUMERO_EXTERIOR_OSB"].'"></td>
</tr>  <tr>
<td width="30%"><label>NÚMERO INTERIOR:</label></td>
<td width="70%"><input type="text" name="P_NUMERO_INTERIOR_OSB" value="'.$row["P_NUMERO_INTERIOR_OSB"].'"></td>
</tr>  <tr>
<td width="30%"><label>NÚMERO DE OFICINA:</label></td>
<td width="70%"><input type="text" name="P_NUMERO_OFICINA_OSB" value="'.$row["P_NUMERO_OFICINA_OSB"].'"></td>
</tr>  <tr>
<td width="30%"><label>COLONIA:</label></td>
<td width="70%"><input type="text" name="P_COLONIA_OSB" value="'.$row["P_COLONIA_OSB"].'"></td>
</tr>  <tr>
<td width="30%"><label>ALCALDÍA:</label></td>
<td width="70%"><input type="text" name="P_ALCALDIA_OSB" value="'.$row["P_ALCALDIA_OSB"].'"></td>
</tr>  <tr>
<td width="30%"><label>C.P:</label></td>
<td width="70%"><input type="text" name="P_CP_OSB" value="'.$row["P_CP_OSB"].'"></td>
</tr>  <tr>
<td width="30%"><label>CIUDAD:</label></td>
<td width="70%"><input type="text" name="P_CIUDAD_OSB" value="'.$row["P_CIUDAD_OSB"].'"></td>
</tr> <tr>
<td width="30%"><label>ESTADO:</label></td>
<td width="70%"><input type="text" name="P_ESTADO_OSB" value="'.$row["P_ESTADO_OSB"].'"></td>
</tr>  <tr>
<td width="30%"><label>PAÍS:</label></td>
<td width="70%"><input type="text" name="P_PAIS_OSB" value="'.$row["P_PAIS_OSB"].'"></td>
</tr><tr>
<td width="30%"><label>UBICACIÓN EN EL MAPA</label></td>
<td width="70%"><input type="text" name="P_UBICACION_MAPA_OSB" value="'.$row["P_UBICACION_MAPA_OSB"].'"></td>
</tr>  <tr>
<td width="30%"><label>TELÉFONO 1:</label></td>
<td width="70%"><input type="text" name="P_TELEFONO_OSB_1" value="'.$row["P_TELEFONO_OSB_1"].'"></td>
</tr>  <tr>
<td width="30%"><label>TELÉFONO 2:</label></td>
<td width="70%"><input type="text" name="TEL2B_INFORMACION" value="'.$row["TEL2B_INFORMACION"].'"></td>
</tr>  <tr>
<td width="30%"><label>WHATSAPP:</label></td>
<td width="70%"><input type="text" name="P_WHATSAPP_OSB_1" value="'.$row["P_WHATSAPP_OSB_1"].'"></td>
</tr> <tr>
<td width="30%"><label>OBSERVACIONES</label></td>
<td width="70%"><input type="text" name="P_IMAIL_CONTACTO_OSB_1" value="'.$row["P_IMAIL_CONTACTO_OSB_1"].'"></td>
</tr> <tr>
<td width="30%"><label>FECHA DE ÚLTIMA CARGA</label></td>
<td width="70%"><input type=»text» readonly=»readonly»  name="P_NUMERO_EXTENCION_OSB_1" value="'.$row["P_NUMERO_EXTENCION_OSB_1"].'"></td>
</tr>
	 <tr>  
            <td width="30%"><label>GUARDAR</label></td>  
            <td width="70%"><button class="btn btn-sm btn-outline-success px-5"  type="button" id="clickbodegasPRO">GUARDAR</button>
			
			<input type="hidden" value="ENVIARBODEGAPRO"  name="ENVIARBODEGAPRO"/>
			<input type="hidden" value="'.$row["id"].'"  name="IPbodegasproveedores" id="IPbodegasproveedores"/>
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


$("#clickbodegasPRO").click(function(){
	
   $.ajax({  
    url:"proveedores/controladorP.php",
    method:"POST",  
    data:$('#listadoBODEGASproform').serialize(),

    beforeSend:function(){  
    $('#mensajeDIROFICINASBODEGAS').html('cargando'); 
    }, 	
	
    success:function(data){
	
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){
				
			$('#dataModal').modal('hide');
			$("#resetBodegaP").load(location.href + " #resetBodegaP");
			$("#mensajeDIROFICINASBODEGAS").html("<span id='ACTUALIZADO' >"+data+"</span>");

			}else{
				
			$("#mensajeDIROFICINASBODEGAS").html(data);
			
		}
    }  
   });
   
});

		});
		
	</script>