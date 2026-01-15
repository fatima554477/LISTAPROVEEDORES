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
$queryVISTAPREV = $conexion->listadoREFERENCIApro2($identioficador);
 $output .= ' <form  id="listadoREFERENCIApro2"> 
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($queryVISTAPREV))
    {

   



     $output .= '

     <tr>
     <td width="30%"><label>NOMBRE DE LA EMPRESA</label></td>
     <td width="70%"><input type="text" name="P_NOMBRE_EMPRESA_RC_1" value="'.$row["P_NOMBRE_EMPRESA_RC_1"].'"></td>
     </tr> <tr>
     <td width="30%"><label>NOMBRE DEL CONTACTO</label></td>
     <td width="70%"><input type="text" name="P_NOMBRE_CONTACTO_RC_1" value="'.$row["P_NOMBRE_CONTACTO_RC_1"].'"></td>
     </tr> <tr>
     <td width="30%"><label>CELULAR DEL CONTACTO</label></td>
     <td width="70%"><input type="text" name="P_CELULAR_CONTACTO_RC_1" value="'.$row["P_CELULAR_CONTACTO_RC_1"].'"></td>
     </tr> <tr>
     <td width="30%"><label>TELÉFONO DE LA EMPRESA</label></td>
     <td width="70%"><input type="text" name="P_TELEFONO_EMPRESA_RC_1" value="'.$row["P_TELEFONO_EMPRESA_RC_1"].'"></td>
     </tr> <tr>
     <td width="30%"><label>NÚMERO DE EXTENSIÓN DEL CONTACTO</label></td>
     <td width="70%"><input type="text" name="P_NUMERO_EXTENSION_RC_1" value="'.$row["P_NUMERO_EXTENSION_RC_1"].'"></td>
     </tr><tr>
     <td width="30%"><label> CORREO ELECTRONICO</label></td>
     <td width="70%"><input type="text" name="P_IMAIL_CONTACTO_RC_1" value="'.$row["P_IMAIL_CONTACTO_RC_1"].'"></td>
     </tr>  <tr>
     <td width="30%"><label>PAGÍNA WEB</label></td>
     <td width="70%"><input type="text" name="P_PAGINA_WEB_RC_1" value="'.$row["P_PAGINA_WEB_RC_1"].'"></td>
     </tr> <tr>
     <td width="30%"><label>FECHA ÚLTIMA CARGA</label></td>
     <td width="70%"><input type="text" name="ULTIMA_CARGA_REFEprovee" value="'.$row["ULTIMA_CARGA_REFEprovee"].'"></td>
     </tr>  

	 <tr>  
            <td width="30%"><label>GUARDAR</label></td>  
            <td width="70%"><button class="btn btn-sm btn-outline-success px-5"  type="button" id="clickREFEprovee">GUARDAR</button>
			
			<input type="hidden" value="ENVIARreferenciaPRO"  name="ENVIARreferenciaPRO"/>
			<input type="hidden" value="'.$row["id"].'"  name="IPdatosREFEP1p" id="IPdatosREFEP1p"/>
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


$("#clickREFEprovee").click(function(){
	
   $.ajax({  
    url:"proveedores/controladorP.php",
    method:"POST",  
    data:$('#listadoREFERENCIApro2').serialize(),

    beforeSend:function(){  
    $('#mensajeREFERENCIASCOMERCIALES1').html('cargando'); 
    }, 	
	
    success:function(data){
	
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){
				
			$('#dataModal').modal('hide');
			$("#resetPROrefe1p").load(location.href + " #resetPROrefe1p");
			$("#mensajeREFERENCIASCOMERCIALES1").html("<span id='ACTUALIZADO' >"+data+"</span>");

			}else{
				
			$("#mensajeREFERENCIASCOMERCIALES1").html(data);
			
		}
    }  
   });
   
});

		});
		
	</script>