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
$queryVISTAPREV = $conexion->listadoNUEVODOCUMENTO2($identioficador);
 $output .= ' <form  id="listadoNUEVODOCUMENTOFORM"> 
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($queryVISTAPREV))
    {







     $output .= '

<tr>
<td width="30%"><label>NUEVO DOCUMENTO:</label></td>
<td width="70%"><input type="text" name="nuevo_documento" value="'.$row["nuevo_documento"].'"></td>
</tr> 
 
            <td width="30%"><label>GUARDAR</label></td>  
            <td width="70%"><button class="btn btn-sm btn-outline-success px-5"  type="button" id="clickLNUEVOdocumento">GUARDAR</button>
			
			<input type="hidden" value="enviarnuevo_FISCAL"  name="enviarnuevo_FISCAL"/>
			<input type="hidden" value="'.$row["id"].'"  name="IPnuevodocumento" id="IPnuevodocumento"/>
			</td>  
        </tr>
     ';
    }//enviarnuevo_FISCAL
    $output .= '</table></div>

	</form>';
    echo $output;
}
//
?>

<script>
	$(document).ready(function(){


$("#clickLNUEVOdocumento").click(function(){
	
   $.ajax({  
    url:"proveedores/controladorP.php",
    method:"POST",  
    data:$('#listadoNUEVODOCUMENTOFORM').serialize(),

    beforeSend:function(){  
    $('#mensajeDOCUnuevo').html('cargando'); 
    }, 	
	
    success:function(data){
	
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){
				
			$('#dataModal').modal('hide');
			$("#reseteateNUEVO").load(location.href + " #reseteateNUEVO");
			$("#mensajeDOCUnuevo").html("<span id='ACTUALIZADO' >"+data+"</span>");

			}else{
				
			$("#mensajeDOCUnuevo").html(data);
			
		}
    }  
   });
   
});

		});
		
	</script>