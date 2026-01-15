<?php
function cargar($archivo){
		$nombre_carpeta='archivos';
		$filehandle = opendir($nombre_carpeta);
		$nombretemp = $_FILES[$archivo]["tmp_name"];
		$nombrearchivo = $_FILES[$archivo]["name"];
		$tamanyoarchivo = $_FILES[$archivo]["size"];
		$tipoarchivo = getimagesize($nombretemp);
		$extension = explode('.',$nombrearchivo);
		$cuenta = count($extension) - 1;
		$nuevonombre =  $archivo.'_'.date('Y_m_d_h_i_s').'.'.$extension[$cuenta];

		if( $tipoarchivo[0] == 0 || $tipoarchivo[0] == 0 ||$tipoarchivo[0] == 0 || $tipoarchivo [2] == 2 || $tipoarchivo [2] == 3 ||$tipoarchivo[2] == 4){ //gif o jpg
		/*if ($tamanyoarchivo <= $tamanyomax) { //archivo demasioado grande*/
		if(move_uploaded_file($nombretemp, $nombre_carpeta.'/'. $nuevonombre)){
		chmod ($nombre_carpeta.'/' . $nuevonombre, 0755);
		$tamanyo =fileSize($nombre_carpeta.'/'. $nuevonombre);
		$fp = fopen($nombre_carpeta.'/'.$nuevonombre, "rb"); 
		$contenido = fread($fp, $tamanyo);
		$contenido = addslashes($contenido);
		/*echo "<form action='{$_SERVER['PHP_SELF']}' method='post'>
		<input type='submit' value='ok!!'></form>";*/
		//return $nuevonombre;
		echo $_SESSION['nombre']=$nuevonombre;
		}else{
			echo "<p>no se ah podido cargar el archivo. </p>";
		}

		}else{
			echo "<p> no es un archivo gif o jpg valido.</p>";
		}
}
print_r($_FILES); 
if($_FILES["file"]["size"]>0){ $F_ACTA_NACIMIENTO = cargar("file"); }else{ $F_ACTA_NACIMIENTO = "" ; }

if($_FILES["F_ACTA_NACIMIENTO2"]["size"]>0){ $F_ACTA_NACIMIENTO = cargar("F_ACTA_NACIMIENTO2"); }else{ $F_ACTA_NACIMIENTO = "" ; }