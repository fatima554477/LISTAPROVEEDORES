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


        if($row["TARJETA_PRE"]!=""){
            $urlTARJETA_PRE= "<a target='_blank'
            href='includes/archivos/".$row["TARJETA_PRE"]."'>Visualizar!</a>";
            }else{
            $urlTARJETA_PRE="";
            }




     $output .= '

     <tr>
     <td width="30%"><label>DEPARTAMENTO</label></td>
     <td width="70%"><input type="text" name="DEPARTAMENTO_CONTACTO" value="'.$row["DEPARTAMENTO_CONTACTO"].'"></td>
     </tr> <tr>
     <td width="30%"><label>NOMBRE DE CONTACTO</label></td>
     <td width="70%"><input type="text" name="NOMBRE_CONTACTO_PROVEE" value="'.$row["NOMBRE_CONTACTO_PROVEE"].'"></td>
     </tr> <tr>
     <td width="30%"><label>CELULAR DE CONTACTO </label></td>
     <td width="70%"><input type="text" name="CEL_CONTACTO_PROVEE" value="'.$row["CEL_CONTACTO_PROVEE"].'"></td>
     </tr> <tr>
     <td width="30%"><label>TELEFONO DIRECTO</label></td>
     <td width="70%"><input type="text" name="TELEFONO_CONTACPROVEE" value="'.$row["TELEFONO_CONTACPROVEE"].'"></td>
     </tr> <tr>
     <td width="30%"><label>NUMERO DE EXTENSIÓN</label></td>
     <td width="70%"><input type="text" name="NUMERO_EXTENSION_PROVEE" value="'.$row["NUMERO_EXTENSION_PROVEE"].'"></td>
     </tr><tr>
     <td width="30%"><label>EMAIL DE CONTACTO</label></td>
     <td width="70%"><input type="text" name="EMAIL_CONTACTO_PROVEE" value="'.$row["EMAIL_CONTACTO_PROVEE"].'"></td>
     </tr>  <tr>
<td width="30%"><label>TARJETA DE PRESENTACIÓN:</label></td>
<td width="70%"><div class="col-md-6"> <div id="drop_file_zone" ondrop="upload_file(event, \'TARJETA_PRE\');" ondragover="return false" style="width:300px;"> <p>Suelta aquí o busca tu archivo</p> <p> <input class="form-control form-control-sm" id="TARJETA_PRE" type="text" onkeydown="return false" onclick="file_explorer(\'TARJETA_PRE\');" style="width:250px;" value="'.$row["TARJETA_PRE"].'" required /> </p> <input type="file" name="TARJETA_PRE" id="nono"/> <div id="2TARJETA_PRE"> '.$urlTARJETA_PRE.'</div> </div> </div></td>
</tr><tr>
     <td width="30%"><label>OBSERVACIONES</label></td>
     <td width="70%"><input type="text" name="OBSERVACIONES_PROVEE" value="'.$row["OBSERVACIONES_PROVEE"].'"></td>
     </tr> <tr>
     <td width="30%"><label>FECHA ÚLTIMA CARGA</label></td>
     <td width="70%"><input type="text" name="FECHA_CONTACTOS_PROVEE" value="'.$row["FECHA_CONTACTOS_PROVEE"].'"></td>
     </tr>  

	 <tr>  
            <td width="30%"><label>GUARDAR</label></td>  
            <td width="70%"><button class="btn btn-sm btn-outline-success px-5"  type="button" id="clickCONTprovee">GUARDAR</button>
			
			<input type="hidden" value="ENVIACONTACTPRO"  name="ENVIACONTACTPRO"/>
			<input type="hidden" value="'.$row["id"].'"  name="IPcontactosproveedores" id="IPcontactosproveedores"/>
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
	        form_data.append("IPcontactosproveedores",  $("#IPcontactosproveedores").val());
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