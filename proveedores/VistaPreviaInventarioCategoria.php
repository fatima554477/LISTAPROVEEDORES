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
 define('__ROOT1__', dirname(dirname(__FILE__)));
 include_once (__ROOT1__."/colaboradores/controlador.php");

$conexion = NEW colaboradores();
$queryVISTAPREV = $conexion->listadoINVENTARIO2categoria($identioficador);
 $output .= ' 
 <div id="respuestaser"></div>
 <form  id="INVENTARIOform2" > 
      <div class="table-responsive">  
           <table class="table table-bordered">';
		   while($row = mysqli_fetch_array($queryVISTAPREV))
		   {
			   
	
	   
			$output .= '
	 
<tr>
<td width="30%"><label>CATEGORIA:</label></td>
<td width="70%"><input type="text" name="I_CATEGORIAS" value="'.$row["I_CATEGORIAS"].'"></td>



		
        <tr>  
            <td width="30%"><label>GUARDAR</label></td>  
            <td width="70%"><button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviarINVENTARIO2">GUARDAR</button>
			
			<input type="hidden" value="IINVENTARIO2"  name="IINVENTARIO2"/>
			<input type="hidden" value="'.$row["id"].'"  name="IpINVENTARIO" id="IpINVENTARIO"/>
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

	var fileobj;
	function upload_file(e,name) {
	    e.preventDefault();
	    fileobj = e.dataTransfer.files[0];
	    ajax_file_upload1(fileobj,name);
	}
	 
	function file_explorer(name) {
	    document.getElementsByName(name)[0].click();
	    document.getElementsByName(name)[0].onchange = function() {
	        fileobj = document.getElementsByName(name)[0].files[0];
	        ajax_file_upload1(fileobj,name);
	    };
	}

	function ajax_file_upload1(file_obj,nombre) {  
	    if(file_obj != undefined) {
	        var form_data = new FormData();                  
	        form_data.append(nombre, file_obj);
	        form_data.append("IpINVENTARIO",  $("#IpINVENTARIO").val());
	        $.ajax({
	            type: 'POST',
	            url: 'colaboradores/controlador.php',
				  dataType: "html",
	            contentType: false,
	            processData: false,
	            data: form_data,
 beforeSend: function() {
$('#2'+nombre).html('<p style="color:green;">Cargando archivo!</p>');
$('#mensajeMEASIGNADO12').html('<p style="color:green;">Actualizado!</p>');
    },				
	            success:function(response) {

if($.trim(response) == 2 ){

$('#2'+nombre).html('<p style="color:red;">Error, archivo diferente a PDF, JPG o GIF.</p>');
$('#'+nombre).val("");
}else{
$('#'+nombre).val(response);
$('#2'+nombre).html('<a target="_blank" href="includes/archivos/'+$.trim(response)+'">Visualizar!</a>');	
}

	            }
	        });
	    }
	}







	$(document).ready(function(){


$("#enviarINVENTARIO2").click(function(){
	
   $.ajax({  
    url:"colaboradores/controlador.php",
    method:"POST",  
    data:$('#INVENTARIOform2').serialize(),

    beforeSend:function(){  
    $('#mensajeINVENTARIOG').html('cargando'); 
    }, 	
	
    success:function(data){
	
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){
				
			$('#dataModal').modal('hide');
			$("#reseteateINVENTARIO").load(location.href + " #reseteateINVENTARIO");
			$("#mensajeINVENTARIOG").html(data);

			}else{
				
			$("#mensajeINVENTARIOG").html("<span id='ACTUALIZADO' >"+data+"</span>");
			
		}
    }  
   });
   
});

		});
		
	</script>