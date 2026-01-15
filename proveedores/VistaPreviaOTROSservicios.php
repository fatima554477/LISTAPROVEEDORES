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
$queryVISTAPREV = $conexion->listadootrosproductosyserv2($identioficador);
 $output .= ' <form  id="listadootrosproductosform"> 
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($queryVISTAPREV))
    {


		if($row["PRODUCTO_O_SERVICIO_10"]!=""){
            $urlPRODUCTO_O_SERVICIO_10 = "<a target='_blank'
            href='includes/archivos/".$row["PRODUCTO_O_SERVICIO_10"]."'>Visualizar!</a>";
            }else{
            $urlPRODUCTO_O_SERVICIO_10="";
            }





     $output .= '

<tr>
<td width="30%"><label>PRODUCTO O SERVICIO:</label></td>
<td width="70%"><input type="text" name="PRODUCTO_O_SERVICIO_9" value="'.$row["PRODUCTO_O_SERVICIO_9"].'"></td>
</tr> <tr>
<td width="30%"><label>FOTO DEL PRODUCTO:</label></td>
<td width="70%"><div class="col-md-6"> <div id="drop_file_zone" ondrop="upload_file(event, \'PRODUCTO_O_SERVICIO_10\');" ondragover="return false" style="width:300px;"> <p>Suelta aquí o busca tu archivo</p> <p> <input class="form-control form-control-sm" id="PRODUCTO_O_SERVICIO_10" type="text" onkeydown="return false" onclick="file_explorer(\'PRODUCTO_O_SERVICIO_10\');" style="width:250px;" value="'.$row["PRODUCTO_O_SERVICIO_10"].'" required /> </p> <input type="file" name="PRODUCTO_O_SERVICIO_10" id="nono"/> <div id="2PRODUCTO_O_SERVICIO_10"> '.$urlPRODUCTO_O_SERVICIO_10.'</div> </div> </div></td>
</tr><tr>
<td width="30%"><label>OBSERVACIONES:</label></td>
<td width="70%"><input type="text" name="PRODUCTO_O_SERVICIO_11" value="'.$row["PRODUCTO_O_SERVICIO_11"].'"></td>
</tr> <tr>
<td width="30%"><label>FECHA DE ÚLTIMA CARGA:</label></td>
<td width="70%"><input  type=»text» readonly=»readonly» name="PRODUCTO_O_SERVICIO_12" value="'.$row["PRODUCTO_O_SERVICIO_12"].'"></td>
</tr>

	 <tr>  
            <td width="30%"><label>GUARDAR</label></td>  
            <td width="70%"><button class="btn btn-sm btn-outline-success px-5"  type="button" id="clickotrosservicios">GUARDAR</button>
			
			<input type="hidden" value="ENVIARotroservicios1"  name="ENVIARotroservicios1"/>
			<input type="hidden" value="'.$row["id"].'"  name="IPotrosproductosservp" id="IPotrosproductosservp"/>
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
	        form_data.append("IPotrosproductosservp",  $("#IPotrosproductosservp").val());
	        $.ajax({
	            type: 'POST',
	            url: 'proveedores/controladorP.php',
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


$("#clickotrosservicios").click(function(){
	
   $.ajax({  
    url:"proveedores/controladorP.php",
    method:"POST",  
    data:$('#listadootrosproductosform').serialize(),

    beforeSend:function(){  
    $('#mensajeOTROSP').html('cargando'); 
    }, 	
	
    success:function(data){
	
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){
				
			$('#dataModal').modal('hide');
			$("#resetePRODUCYSERVp").load(location.href + " #resetePRODUCYSERVp");
			$("#mensajeOTROSP").html("<span id='ACTUALIZADO' >"+data+"</span>");

			}else{
				
			$("#mensajeOTROSP").html(data);
			
		}
    }  
   });
   
});

		});
		
	</script>