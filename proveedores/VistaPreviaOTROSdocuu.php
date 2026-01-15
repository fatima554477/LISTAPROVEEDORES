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
$queryVISTAPREV = $conexion->listadootrosdocuumentos2($identioficador);
 $output .= ' <form  id="listadootrosdocuumentosform"> 
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($queryVISTAPREV))
    {

        if($row["F_PADJUNTAR_OTRO_DOCUMENTO_5_1"]!=""){$F_PADJUNTAR_OTRO_DOCUMENTO_5_1 =  "<a target='_blank' href='includes/archivos/".$row["F_PADJUNTAR_OTRO_DOCUMENTO_5_1"]."'>Visualizar!</a>"; 
		}	else{
			
			$F_PADJUNTAR_OTRO_DOCUMENTO_5_1 = "";
			
		}




     $output .= '

<tr>
<td width="30%"><label>NOMBRE DEL DOCUMENTO:</label></td>
<td width="70%"><input type="text" name="F_PADJUNTAR_OTRO_DOCUMENTO_4_1" value="'.$row["F_PADJUNTAR_OTRO_DOCUMENTO_4_1"].'"></td>
</tr> <tr>
<td width="30%"><label>ADJUNTAR OTRO DOCUMENTO: (FORMATO PDF, JPG O PNG)</label></td>
<td width="70%">	<div id="drop_file_zone" ondrop="upload_file(event,\'F_PADJUNTAR_OTRO_DOCUMENTO_5_1\')" ondragover="return false" style="width:300px;">
<p>Suelta aquí o busca tu archivo</p>
<p><input class="form-control form-control-sm" id="F_PADJUNTAR_OTRO_DOCUMENTO_5_1" type="text" onkeydown="return false" onclick="file_explorer(\'F_PADJUNTAR_OTRO_DOCUMENTO_5_1\');" style="width:250px;" VALUE="'.$row["F_PADJUNTAR_OTRO_DOCUMENTO_5_1"] .' " required /></p>
<input type="file" name="F_PADJUNTAR_OTRO_DOCUMENTO_5_1" id="nono"/>
<div id="2F_PADJUNTAR_OTRO_DOCUMENTO_5_1">
'.$F_PADJUNTAR_OTRO_DOCUMENTO_5_1.'
</tr> <tr>
<td width="30%"><label>OBSERVACIONES:</label></td>
<td width="70%"><input type="text" name="F_PADJUNTAR_OTRO_DOCUMENTO_6_1" value="'.$row["F_PADJUNTAR_OTRO_DOCUMENTO_6_1"].'"></td>
</tr> <tr>
<td width="30%"><label>FECHA DE ÚLTIMA CARGA</label></td>
<td width="70%"><input  type=»text» readonly=»readonly» name="F_PADJUNTAR_OTRO_DOCUMENTO_7_1" value="'.$row["F_PADJUNTAR_OTRO_DOCUMENTO_7_1"].'"></td>
</tr>

	 <tr>  
            <td width="30%"><label>GUARDAR</label></td>  
            <td width="70%"><button class="btn btn-sm btn-outline-success px-5"  type="button" id="clickOTROSDOCUU">GUARDAR</button>
			
			<input type="hidden" value="ENVIAOTROSdocuu1"  name="ENVIAOTROSdocuu1"/>
			<input type="hidden" value="'.$row["id"].'"  name="IPotrosdocumentosservp" id="IPotrosdocumentosservp"/>
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
	        form_data.append("IPotrosdocumentosservp",  $("#IPotrosdocumentosservp").val());
	        $.ajax({
	            type: 'POST',
                url:"proveedores/controladorP.php",
				  dataType: "html",
	            contentType: false,
	            processData: false,
	            data: form_data,
 beforeSend: function() {
$('#2'+nombre).html('<p style="color:green;">Cargando archivo!</p>');
$('#respuestaser').html('<p style="color:green;">Actualizado!</p>');
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


$("#clickOTROSDOCUU").click(function(){
	
   $.ajax({  
    url:"proveedores/controladorP.php",
    method:"POST",  
    data:$('#listadootrosdocuumentosform').serialize(),

    beforeSend:function(){  
    $('#mensajeOTRODOCUMENTO').html('cargando'); 
    }, 	
	
    success:function(data){
	
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){
				
			$('#dataModal').modal('hide');
			$("#reseteOTROSDOCUUp").load(location.href + " #reseteOTROSDOCUUp");
			$("#mensajeOTRODOCUMENTO").html("<span id='ACTUALIZADO' >"+data+"</span>");

			}else{
				
			$("#mensajeOTRODOCUMENTO").html(data);
			
		}
    }  
   });
   
});

		});
		
	</script>