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
$queryVISTAPREV = $conexion->listadoligaproductosyserv2($identioficador);
 $output .= ' <form  id="listadoligaproductosyserv2"> 
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($queryVISTAPREV))
    {







     $output .= '

<tr>
<td width="30%"><label>PRODUCTO O SERVICIO:</label></td>
<td width="70%"><input type="text" name="PRODUCTO_O_SERVICIO_LIGA" value="'.$row["PRODUCTO_O_SERVICIO_LIGA"].'"></td>
</tr>  <tr>
<td width="30%"><label> LIGA DE PRODUCTO O SERVICIO:</label></td>
<td width="70%"><input type="text" name="PRODUCTO_SERVICIO_LIGA" value="'.$row["PRODUCTO_SERVICIO_LIGA"].'"></td>
</tr> <tr>
<td width="30%"><label>OBSERVACIONES:</label></td>
<td width="70%"><input type="text" name="LIGA_SERVICIO_OBSERVACIONES" value="'.$row["LIGA_SERVICIO_OBSERVACIONES"].'"></td>
</tr> <tr>
<td width="30%"><label>FECHA DE ÚLTIMA CARGA:</label></td>
<td width="70%"><input  type=»text» readonly=»readonly» name="ULTIMA_CARGA_LIGA" value="'.$row["ULTIMA_CARGA_LIGA"].'"></td>
</tr>

	 <tr>  
            <td width="30%"><label>GUARDAR</label></td>  
            <td width="70%"><button class="btn btn-sm btn-outline-success px-5"  type="button" id="clickLIGAservicios">GUARDAR</button>
			
			<input type="hidden" value="ENVIARLIGAervicios1"  name="ENVIARLIGAervicios1"/>
			<input type="hidden" value="'.$row["id"].'"  name="IPLIGAproductosservp" id="IPLIGAproductosservp"/>
			</td>  
        </tr>
     ';
    }
    $output .= '</table></div>

	</form>';
    echo $output;
}
//
?>

<script>
	$(document).ready(function(){


$("#clickLIGAservicios").click(function(){
	
   $.ajax({  
    url:"proveedores/controladorP.php",
    method:"POST",  
    data:$('#listadoligaproductosyserv2').serialize(),

    beforeSend:function(){  
    $('#mensajeLIGAPRO').html('cargando'); 
    }, 	
	
    success:function(data){
	
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){
				
			$('#dataModal').modal('hide');
			$("#reseteligaPRODUCp").load(location.href + " #reseteligaPRODUCp");
			$("#mensajeLIGAPRO").html("<span id='ACTUALIZADO' >"+data+"</span>");

			}else{
				
			$("#mensajeLIGAPRO").html(data);
			
		}
    }  
   });
   
});

		});
		
	</script>