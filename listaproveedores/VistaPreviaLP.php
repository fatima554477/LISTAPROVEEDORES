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
	require "controladorLP.php";
//ECHO $identioficador;
//EXIT;
$conexion = NEW accesoclase();
$queryVISTAPREV = $conexion->Listado_LP2($identioficador);
 $output .= '
 <style type="text/css">
 #ACTUALIZADO{
color:green;
    text-transform: uppercase;
	font-size:25px;
	font-weight: bold;
}
  #ERROR{
color:red;
    text-transform: uppercase;
	font-size:25px;
	font-weight: bold;
}

/* ===== Select de evaluación con flecha e colores ===== */
/* La flecha va como background-image DEL PROPIO select (no como pseudo-elemento
   de un contenedor), así se garantiza que se vea encima del widget nativo. */
select.evaluacion-select{
    appearance: none !important;
    -webkit-appearance: none !important;
    -moz-appearance: none !important;
    width: 100%;
    padding-right: 34px !important;
    cursor: pointer;
    background-repeat: no-repeat !important;
    background-position: right 10px center !important;
    background-size: 12px 8px !important;
    border: 1px solid rgba(0,0,0,.2);
}

/* Flecha oscura (para fondos claros: blanco / amarillo / rosa) */
select.evaluacion-select.arrow-oscura{
    background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 12 8\'%3E%3Cpath fill=\'%23000000\' d=\'M0 0l6 8 6-8z\'/%3E%3C/svg%3E") !important;
}

/* Flecha clara (para fondos oscuros: verde / rojo) */
select.evaluacion-select.arrow-clara{
    background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 12 8\'%3E%3Cpath fill=\'%23ffffff\' d=\'M0 0l6 8 6-8z\'/%3E%3C/svg%3E") !important;
}

/* Colores por evaluación, con !important para ganarle a cualquier estilo del tema/Bootstrap */
select.evaluacion-select.eval-vacio{    background-color:#ffffff !important; color:#000000 !important; }
select.evaluacion-select.eval-de-casa{  background-color:#28a745 !important; color:#ffffff !important; }
select.evaluacion-select.eval-segunda{  background-color:#ffc107 !important; color:#000000 !important; }
select.evaluacion-select.eval-tercera{  background-color:#ffb6c1 !important; color:#000000 !important; }
select.evaluacion-select.eval-vetado{   background-color:#dc3545 !important; color:#ffffff !important; }
</style>
<div id="respuestaLP_"></div>
 <form  id="listadoLPform">

      <div class="table-responsive">
           <table class="table table-bordered">';
	$row = mysqli_fetch_array($queryVISTAPREV);
	$evaluacionActual = isset($row['EVALUACION']) ? trim((string)$row['EVALUACION']) : '';

	$opcionesEvaluacion = array(

		'' => 'SIN CLASIFICAR',

		'DE_CASA' => 'DE CASA',

		'SEGUNDA_OPCION' => 'SEGUNDA OPCIÓN',

		'TERCERA_OPCION' => 'TERCERA OPCIÓN',

		'VETADO' => 'VETADO'

	);

	// Mismos colores que usa el select ya seleccionado y que las banderas del listado
	$coloresEvaluacion = array(

		'' => array('#ffffff', '#000000'),

		'DE_CASA' => array('#28a745', '#ffffff'),

		'SEGUNDA_OPCION' => array('#ffc107', '#000000'),

		'TERCERA_OPCION' => array('#ffb6c1', '#000000'),

		'VETADO' => array('#dc3545', '#ffffff')

	);

	$opcionesEvaluacionHtml = '';

	foreach ($opcionesEvaluacion as $valorEvaluacion => $textoEvaluacion) {

		$selectedEvaluacion = ($evaluacionActual === $valorEvaluacion) ? ' selected' : '';

		$colorFondo = $coloresEvaluacion[$valorEvaluacion][0];
		$colorTexto = $coloresEvaluacion[$valorEvaluacion][1];
		$estiloOpcion = ' style="background-color:'.$colorFondo.';color:'.$colorTexto.';"';

		$opcionesEvaluacionHtml .= '<option value="'.htmlspecialchars($valorEvaluacion, ENT_QUOTES, 'UTF-8').'"'.$selectedEvaluacion.$estiloOpcion.'>'.htmlspecialchars($textoEvaluacion, ENT_QUOTES, 'UTF-8').'</option>';

	}



     $output .= '

 
<tr>
<td width="50%"><label>NOMBRE COMERCIAL DEL  PROVEEDOR:</label></td>
<td width="50%"><input type="text" name="nommbrerazon" value="'.$row["nommbrerazon"].'"  style="width:100%"></td>
</tr>

 <tr>
<td width="50%"><label>NOMBRE FISCAL </label></td>
<td width="50%"><input type="text" name="P_NOMBRE_FISCAL_RS_EMPRESA" value="'.$row["P_NOMBRE_FISCAL_RS_EMPRESA"].'"  style="width:100%"></td>
</tr>

<tr>
<td width="50%"><label>USUARIO CRM:</label></td>
<td width="50%"><input type="text" name="usuario" value="'.$row["usuario"].'"  style="width:100%"></td>
</tr>
<tr>
<td width="50%"><label>RFC:</label></td>
<td width="50%"><input type="text" name="P_RFC_MTDP" value="'.$row["P_RFC_MTDP"].'"  style="width:100%"></td>
</tr>
 
<tr>
<td width="50%"><label>CONTRASEÑA:</label></td>
<td width="50%"><input type="text" name="contrasenia" value="'.$row["contrasenia"].'"  style="width:100%"></td>
</tr>  

<tr>
<td width="50%"><label>EMAIL:</label></td>
<td width="50%"><input type="text" name="email" value="'.$row["email"].'"  style="width:100%"></td>
</tr> 



<tr>

<td width="50%"><label>CLASIFICACIÓN DEL PROVEEDOR:</label></td>

<td width="50%"><select name="EVALUACION" id="EVALUACION" class="form-control evaluacion-select">'.$opcionesEvaluacionHtml.'</select></td>

</tr>
 

	 <tr>  
            <td width="50%"><label>SOLO GUARDAR</label></td>  
            <td width="50%">
			<button class="btn btn-sm btn-outline-success px-5"  type="button" id="clickLP">GUARDAR</button>
			
			<input type="hidden" value="enviarLP"  name="enviarLP"/>
			<input type="hidden" value="'.$row["IDDD"].'"  name="IPLP" id="IPLP"/>
			</td>  
        </tr>
		
		
	 <tr>  
            <td width="30%"><label>GUARDAR Y ENVIAR EMAIL</label></td>  
            <td width="70%">
			<button class="btn btn-sm btn-outline-success px-5"  type="button" id="clickLPE">GUARDAR Y ENVIAR EMAIL</button>

			</td>  
        </tr>		
		
		
     ';

    $output .= '</table></div>

	</form>';
    echo $output;
}
//
?>

<script>
	$(document).ready(function(){
			function aplicarColorEvaluacion() {

			// value => [claseColor, claseFlecha]
			var estilos = {

				'':               ['eval-vacio',   'arrow-oscura'],

				'DE_CASA':        ['eval-de-casa', 'arrow-clara'],

				'SEGUNDA_OPCION':  ['eval-segunda', 'arrow-oscura'],

				'TERCERA_OPCION':  ['eval-tercera', 'arrow-oscura'],

				'VETADO':         ['eval-vetado',  'arrow-clara']

			};

			var $select = $('#EVALUACION');
			var estilo = estilos[$select.val()] || estilos[''];

			// Quita cualquier clase de color/flecha previa y aplica la que corresponde
			$select.removeClass('eval-vacio eval-de-casa eval-segunda eval-tercera eval-vetado arrow-oscura arrow-clara');
			$select.addClass(estilo[0] + ' ' + estilo[1]);

		}

		$(document).off('change.evaluacion').on('change.evaluacion', '#EVALUACION', aplicarColorEvaluacion);

		aplicarColorEvaluacion();



$("#clickLP").click(function(){
	
	var formulario = $("#listadoLPform").serializeArray();
	formulario.push(
		{ name: "mandacorreo", value: 'no' }
	);
	
	$.ajax({
		url:'listaproveedores/controladorLP.php',
		method:"POST",
		data:formulario, 
		beforeSend:function(){  
			$('#respuestaLP_').html('cargando'); 
		}, 	
		success:function(data){
			if($.trim(data)=='Ingresado' || $.trim(data)=='ACTUALIZADO'){
					$('#dataModal').modal('hide');
					load(1);

					//$("#resetSB").load(location.href + " #resetSB");
					$("#respuestaLP_").html("<span id='ACTUALIZADO' >"+data+"</span>");
			}else if($.trim(data)=='ACTUALIZADO Y CORREO ENVIADO'){
					$('#dataModal').modal('hide');

					load(1);

					$("#respuestaLP_").html("<span id='ACTUALIZADO' >"+data+"</span>");
			}else{
					$("#respuestaLP_").html(data);
			}
		}  
	});
});

$("#clickLPE").click(function(){
	
	var formulario = $("#listadoLPform").serializeArray();
	formulario.push(
		{ name: "mandacorreo", value: 'si' }
	);
	
	$.ajax({
		url:'listaproveedores/controladorLP.php',
		method:"POST",
		data:formulario, 
		beforeSend:function(){  
			$('#respuestaLP_').html('cargando'); 
		}, 	
		success:function(data){
			if($.trim(data)=='Ingresado' || $.trim(data)=='ACTUALIZADO'){
					$('#dataModal').modal('hide');
					
				
					$("#respuestaLP_").html("<span id='ACTUALIZADO' >"+data+"</span>");
					
			}else if($.trim(data)=='ACTUALIZADO Y CORREO ENVIADO'){
					$("#respuestaLP_").html("<span id='ACTUALIZADO' >"+data+"</span>");
			}else{   
					$("#respuestaLP_").html(data);
			}
		}  
	});
});

	
});
		
	</script>
