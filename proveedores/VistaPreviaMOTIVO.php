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
$queryVISTAPREV = $conexion->listadonuevomotivo2($identioficador);
 $output .= ' <form  id="listadoNUEVFORM"> 
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($queryVISTAPREV))
    {







     $output .= '

<tr>
<td width="30%"><label>NUEVO DOCUMENTO:</label></td>
<td width="70%"><input type="text" name="nuevo_motivo" value="'.$row["nuevo_motivo"].'"></td>
</tr> 
 
            <td width="30%"><label>GUARDAR</label></td>  
            <td width="70%"><button class="btn btn-sm btn-outline-success px-5"  type="button" id="clickLNUEV">GUARDAR</button>
			
			<input type="hidden" value="enviarnuevo_MOTIVO"  name="enviarnuevo_MOTIVO"/>
			<input type="hidden" value="'.$row["id"].'"  name="IPnuevomotivo" id="IPnuevomotivo"/>
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


$("#clickLNUEV").click(function(){
	
   $.ajax({  
    url:"proveedores/controladorP.php",
    method:"POST",  
    data:$('#listadoNUEVFORM').serialize(),

    beforeSend:function(){  
    $('#mensajeDOCUmotivo').html('cargando'); 
    }, 	
	
    success:function(data){
	
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){
				
			$('#dataModal').modal('hide');
			$("#resetNUEVOM").load(location.href + " #resetNUEVOM");
			$("#mensajeDOCUmotivo").html("<span id='ACTUALIZADO' >"+data+"</span>");

			}else{
				
			$("#mensajeDOCUmotivo").html(data);
			
		}
    }  
   });
   
});

		});
		
	</script>