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
$queryVISTAPREV = $conexion->Listado_datos_bancariosPRO2($identioficador);
 $output .= ' <form  id="Listado_datos_bancariosPform"> 
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($queryVISTAPREV))
    {


        if($row["FOTO_ESTADO_PROVEE"]!=""){
            $urlFOTO_ESTADO_PROVEE= "<a target='_blank'
            href='includes/archivos/".$row["FOTO_ESTADO_PROVEE"]."'>Visualizar!</a>";
            }else{
            $urlFOTO_ESTADO_PROVEE="";
            }





     $output .= '

	<tr>
	
	<td width="30%" style="font-weight:bold;" ><label>TIPO DE MONEDA O DIVISA:</label></td>
    <td width="70%" >
        <select name="P_TIPO_DE_MONEDA_1" style="background:#daddf5">
		
		
            <option style="background:#f2b4f5" value="SELECCIONA UNA OPCIÓN">SELECCIONA UNA OPCIÓN</option> 
			
			
            <option style="background:#a3e4d7" value="MXN" '.($row["P_TIPO_DE_MONEDA_1"] == "MXN" ? "selected" : "").'>MXN (Peso mexicano) </option>
			
            <option style="background:#c9e8e8" value="USD" '.($row["P_TIPO_DE_MONEDA_1"] == "USD" ? "selected" : "").'>USD (Dolar) </option>			

             <option style="background:#e8f6f3" value="EUR" '.($row["P_TIPO_DE_MONEDA_1"] == "EUR" ? "selected" : "").'>EUR (Euro) </option>     

             <option style="background:#fdf2e9" value="GBP" '.($row["P_TIPO_DE_MONEDA_1"] == "GBP" ? "selected" : "").'>GBP (Libra esterlina)</option> 
	

             <option style="background:#eaeded" value="CHF" '.($row["P_TIPO_DE_MONEDA_1"] == "CHF" ? "selected" : "").'>CHF (Franco suizo)</option> 

             <option style="background:#fdebd0" value="CNY" '.($row["P_TIPO_DE_MONEDA_1"] == "CNY" ? "selected" : "").'>CNY (Yuan)</option> 
			 
             <option style="background:#ebdef0" value="JPY" '.($row["P_TIPO_DE_MONEDA_1"] == "JPY" ? "selected" : "").'>JPY (Yen japonés)</option>

             <option style="background:#fef5e7" value="HKD" '.($row["P_TIPO_DE_MONEDA_1"] == "HKD" ? "selected" : "").'>HKD (Dólar hongkonés)</option> 
			 
             <option style="background:#ebedef" value="CAD" '.($row["P_TIPO_DE_MONEDA_1"] == "CAD" ? "selected" : "").'>CAD (Dólar canadiense)</option> 	


             <option style="background:#fbeee6" value="AUD" '.($row["P_TIPO_DE_MONEDA_1"] == "AUD" ? "selected" : "").'>AUD (Dólar australiano)</option>
			 			 
             <option style="background:#f2b4f5" value="BRL" '.($row["P_TIPO_DE_MONEDA_1"] == "BRL" ? "selected" : "").'>BRL (Real brasileño)</option>
			 			 
             <option style="background:#e8f6f3" value="RUB" '.($row["P_TIPO_DE_MONEDA_1"] == "RUB" ? "selected" : "").'>RUB  (Rublo ruso)</option>			 
        </select>
    </td>
</tr> 



 <tr>
<td width="30%"><label>INSTITUCIÓN FINANCIERA</label></td>
<td width="70%"><input type="text" name="P_INSTITUCION_FINANCIERA_1" value="'.$row["P_INSTITUCION_FINANCIERA_1"].'"></td>
</tr> <tr>
<td width="30%"><label>NÚMERO DE CUENTA</label></td>
<td width="70%"><input type="text" name="P_NUMERO_DE_CUENTA_DB_1" value="'.$row["P_NUMERO_DE_CUENTA_DB_1"].'"></td>
</tr> <tr>
<td width="30%"><label> CLABE</label></td>
<td width="70%"><input type="text" name="P_NUMERO_CLABE_1" value="'.$row["P_NUMERO_CLABE_1"].'"></td>
</tr> <tr>
<td width="30%"><label>NÚMERO DE SUCURSAL</label></td>
<td width="70%"><input type="text" name="P_NUMERO_DE_SUCURSAL_1" value="'.$row["P_NUMERO_DE_SUCURSAL_1"].'"></td>
</tr> <tr>
<td width="30%"><label>NÚMERO IBAN</label></td>
<td width="70%"><input type="text" name="P_NUMERO_IBAN_1" value="'.$row["P_NUMERO_IBAN_1"].'"></td>
</tr> <tr>
<td width="30%"><label>NÚMERO CUENTA SWIFT</label></td>
<td width="70%"><input type="text" name="P_NUMERO_CUENTA_SWIFT_1" value="'.$row["P_NUMERO_CUENTA_SWIFT_1"].'"></td>
</tr><tr>
<td width="30%"><label>FOTO DEL ESTADO DE CUENTA:</label></td>
<td width="70%"><div class="col-md-6"> <div id="drop_file_zone" ondrop="upload_file(event, \'FOTO_ESTADO_PROVEE\');" ondragover="return false" style="width:300px;"> <p>Suelta aquí o busca tu archivo</p> <p> <input class="form-control form-control-sm" id="FOTO_ESTADO_PROVEE" type="text" onkeydown="return false" onclick="file_explorer(\'FOTO_ESTADO_PROVEE\');" style="width:250px;" value="'.$row["FOTO_ESTADO_PROVEE"].'" required /> </p> <input type="file" name="FOTO_ESTADO_PROVEE" id="nono"/> <div id="2FOTO_ESTADO_PROVEE"> '.$urlFOTO_ESTADO_PROVEE.'</div> </div> </div></td>
</tr> <tr>
<td width="30%"><label>FECHA DE ÚLTIMA CARGA:</label></td>
<td width="70%"><input  type=»text» readonly=»readonly» name="ULTIMA_CARGA_DATOBANCA" value="'.$row["ULTIMA_CARGA_DATOBANCA"].'"></td>
</tr>

	 <tr>  
            <td width="30%"><label>GUARDAR</label></td>  
            <td width="70%"><button class="btn btn-sm btn-outline-success px-5"  type="button" id="clickRdatosbancario">GUARDAR</button>
			
			<input type="hidden" value="ENVIARRdatosbancario1p"  name="ENVIARRdatosbancario1p"/>
			<input type="hidden" value="'.$row["id"].'"  name="IPdatosbancario1p" id="IPdatosbancario1p"/>
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
	        form_data.append("IPdatosbancario1p",  $("#IPdatosbancario1p").val());
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


$("#clickRdatosbancario").click(function(){
	
   $.ajax({  
    url:"proveedores/controladorP.php",
    method:"POST",  
    data:$('#Listado_datos_bancariosPform').serialize(),

    beforeSend:function(){  
    $('#mensajeDATOSBANCARIOS1').html('cargando'); 
    }, 	
	
    success:function(data){
	
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){
				
			$('#dataModal').modal('hide');
			$("#resetBancario1p").load(location.href + " #resetBancario1p");
			$("#mensajeDATOSBANCARIOS1").html("<span id='ACTUALIZADO' >"+data+"</span>");

			}else{
				
			$("#mensajeDATOSBANCARIOS1").html(data);
			
		}
    }  
   });
   
});

		});
		
	</script>