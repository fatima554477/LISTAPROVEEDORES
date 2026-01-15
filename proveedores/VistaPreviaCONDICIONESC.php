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
$queryVISTAPREV = $conexion->listadoCONDICIONES2($identioficador);
 $output .= ' <form  id="listadoCONDICIONES22"> 
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($queryVISTAPREV))
    {


        if($row["CONVENIO_DOPROVEEDOR"]!=""){
            $urlCONVENIO_DOPROVEEDOR= "<a target='_blank'
            href='includes/archivos/".$row["CONVENIO_DOPROVEEDOR"]."'>Visualizar!</a>";
            }else{
            $urlCONVENIO_DOPROVEEDOR="";
            }




     $output .= '
	 
	 
<tr>
<td width="30%"><label>CONDICIONES DE PAGO:</label></td>
<td width="70%"><input type="text" name="P_CONDICIONES_DE_PAGO" value="'.$row["P_CONDICIONES_DE_PAGO"].'"></td>
</tr>

<tr>
<td width="30%"><label>LÍMITE DE CREDITO:</label></td>
<td width="70%"><input type="text" name="P_LIMITE_DE_CREDITO" value="'.$row["P_LIMITE_DE_CREDITO"].'"></td>
</tr>

<tr>
<td width="30%"><label>FECHA DE INICIO DEL NUEVO CONVENIO:</label></td>
<td width="70%"><input type="text" name="P_FECHA_INICIO_NUEVO_CONVENIO" value="'.$row["P_FECHA_INICIO_NUEVO_CONVENIO"].'"></td>
</tr>

<tr>
<td width="30%"><label>FECHA DE FINALIZACIÓN DEL CONVENIO:</label></td>
<td width="70%"><input type="text" name="P_FECHA_FINALIZACION_CONVENIO" value="'.$row["P_FECHA_FINALIZACION_CONVENIO"].'"></td>
</tr>

<tr>
<td width="30%"><label>PORCENTAJE DE COMISIÓN QUE OTORGA:</label></td>
<td width="70%"><input type="text" name="P_PORCENTAJE_COMISION_OTORGA" value="'.$row["P_PORCENTAJE_COMISION_OTORGA"].'"></td>
</tr>

<tr>
    <td width="30%"  ><label>¿EXISTE CONVENIO?</label></td>
    <td width="70%" >
        <select name="CONVENIO_PROVEEDOR" style="background:#daddf5" >
		<option style="background:#f6f6bd" value="SI" '.($row["CONVENIO_PROVEEDOR"] == "SI" ? "selected" : "").'>SI</option>

            <option style="background:#dae5f5" value="NO" '.($row["CONVENIO_PROVEEDOR"] == "NO" ? "selected" : "").'>NO</option>

            
           
        </select>
    </td>
</tr>





<tr>
<td width="30%"><label>FOTO DEL PRODUCTO:</label></td>
<td width="70%"><div class="col-md-6"> <div id="drop_file_zone" ondrop="upload_file(event, \'CONVENIO_DOPROVEEDOR\');" ondragover="return false" style="width:300px;"> <p>Suelta aquí o busca tu archivo</p> <p> <input class="form-control form-control-sm" id="CONVENIO_DOPROVEEDOR" type="text" onkeydown="return false" onclick="file_explorer(\'CONVENIO_DOPROVEEDOR\');" style="width:250px;" value="'.$row["CONVENIO_DOPROVEEDOR"].'" required /> </p> <input type="file" name="CONVENIO_DOPROVEEDOR" id="nono"/> <div id="2CONVENIO_DOPROVEEDOR"> '.$urlCONVENIO_DOPROVEEDOR.'</div> </div> </div></td>
</tr> 



<tr>
<td width="30%"><label>OBSERVACIONES:</label></td>
<td width="70%"><input type="text" name="OBSERVACIONES_CONVENIO" value="'.$row["OBSERVACIONES_CONVENIO"].'"></td>
</tr> 


<tr>
<td width="30%"><label>FECHA DE ÚLTIMA CARGA:</label></td>
<td width="70%"><input  type=»text» readonly=»readonly» name="ULTIMA_CARGA_CONVENIO" value="'.$row["ULTIMA_CARGA_CONVENIO"].'"></td>
</tr>

	 <tr>  
            <td width="30%"><label>GUARDAR</label></td>  
            <td width="70%"><button class="btn btn-sm btn-outline-success px-5"  type="button" id="clickconvenio">GUARDAR</button>
			
			<input type="hidden" value="ENVIACONVENIO"  name="ENVIACONVENIO"/>
			<input type="hidden" value="'.$row["id"].'"  name="ipconvenio" id="ipconvenio"/>
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
	        form_data.append("ipconvenio",  $("#ipconvenio").val());
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


$("#clickconvenio").click(function(){
	
   $.ajax({  
    url:"proveedores/controladorP.php",
    method:"POST",  
    data:$('#listadoCONDICIONES22').serialize(),

    beforeSend:function(){  
    $('#mensajeMETODOP').html('cargando'); 
    }, 	
	
    success:function(data){
	
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){
				
			$('#dataModal').modal('hide');
			$("#reseteCONDICIONESp").load(location.href + " #reseteCONDICIONESp");
			$("#mensajeMETODOP").html("<span id='ACTUALIZADO' >"+data+"</span>");

			}else{
				
			$("#mensajeMETODOP").html(data);
			
		}
    }  
   });
   
});

		});
		
	</script>