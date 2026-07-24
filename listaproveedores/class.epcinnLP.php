<?php
/*
clase EPC INNOVA
CREADO : 10/OCTUBRE/2022
TESTER
PROGRAMER
*/
 
	define('__ROOT3__', dirname(dirname(__FILE__)));
	require __ROOT3__."/includes/class.epcinn.php";
	require __ROOT3__."/includes/error_reporting.php";	
 
	class accesoclase extends colaboradores{
 
	/* ─────────────────────────────────────────
	   HELPERS DE BITÁCORA  (misma firma que Doc2)
	   ───────────────────────────────────────── */
	private function nombre_usuario_bitacora_proveedor(){
		foreach (array('NOMBREUSUARIO','nombreusuario','usuario') as $key) {
			if(!empty($_SESSION[$key])){ return $_SESSION[$key]; }
		}
		if(!empty($_SESSION['idem'])){ return 'ID:'.$_SESSION['idem']; }
		return 'SIN_USUARIO';
	}
 
	private function registrar_bitacora_proveedor($idProveedor, $tipoMovimiento, $detalle){
		$conn = $this->db();
		$idProveedor    = intval($idProveedor);
		$tipoMovimiento = mysqli_real_escape_string($conn, $tipoMovimiento);
		$detalle        = mysqli_real_escape_string($conn, $detalle);
		$usuario        = mysqli_real_escape_string($conn, $this->nombre_usuario_bitacora_proveedor());
 
		mysqli_query($conn, "CREATE TABLE IF NOT EXISTS 02PROVEEDORES_BITACORA (
			id int(11) NOT NULL AUTO_INCREMENT,
			id_proveedor int(11) NOT NULL,
			tipo_movimiento varchar(50) NOT NULL,
			detalle text,
			usuario varchar(255) DEFAULT NULL,
			fecha_hora datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
			PRIMARY KEY (id),
			KEY idx_id_proveedor (id_proveedor),
			KEY idx_fecha_hora (fecha_hora)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");
 
		mysqli_query($conn, "INSERT INTO 02PROVEEDORES_BITACORA
			(id_proveedor, tipo_movimiento, detalle, usuario, fecha_hora)
		VALUES ('".$idProveedor."', '".$tipoMovimiento."', '".$detalle."', '".$usuario."', NOW())");
	}
 
	/* ─────────────────────────────────────────
	   LISTADOS
	   ───────────────────────────────────────── */
	public function listado2(){
		$conn = $this->db();
		$var = 'select *,02usuarios.id AS IDDD from 02usuarios left join (select d.* from 02direccionproveedor1 d inner join (select idRelacion, max(id) as max_id from 02direccionproveedor1 group by idRelacion) dx on dx.idRelacion = d.idRelacion and dx.max_id = d.id) as 02direccionproveedor1 on 02usuarios.id = 02direccionproveedor1.idRelacion order by nommbrerazon asc';		
		$query = mysqli_query($conn,$var);
		echo "<table class='table mb-0 table-striped'><tr>
		<td>usuario</td>
		<td>NOMBRE COMERCIAL</td>
		<td>RAZÓN SOCIAL</td>
		<td>RFC</td>
		<td>EMAIL</td>
		<td>Masiva</td>
		</tr>";
		while($row = mysqli_fetch_array($query)){
			echo '<tr>
		<td><a href="PROVEEDORES.php?idPROV='.$row['IDDD'].'">'.$row['usuario'].'</a></td>
		<td>'.$row['nommbrerazon'].' '.$row['nommbrerazon'].'</td>
		<td>'.$row['P_NOMBRE_FISCAL_RS_EMPRESA'].' '.$row['P_NOMBRE_FISCAL_RS_EMPRESA'].'</td>
		<td>'.$row['rfc'].'</td>
		<td>'.$row['email'].'</td>
		<td>
		<a href="'. $_SERVER['PHP_SELF']. '?idr1='.$row['id1'].'" target="_blank"><img src="includes/descargar.png"/></a></td>
		</tr>';
		}
		echo "</table>";		
	}	
 
	public function listado3(){
		$conn = $this->db();
		$var = 'select *,02usuarios.id AS IDDD from 02usuarios left join (select d.* from 02direccionproveedor1 d inner join (select idRelacion, max(id) as max_id from 02direccionproveedor1 group by idRelacion) dx on dx.idRelacion = d.idRelacion and dx.max_id = d.id) as 02direccionproveedor1 on 02usuarios.id = 02direccionproveedor1.idRelacion order by nommbrerazon asc';
		RETURN $query = mysqli_query($conn,$var);
	}	
	
	public function variablesusuario2($id){
		$conn = $this->db();
		$var2 = 'select *,02usuarios.id AS IDDD from 02usuarios left join (select d.* from 02direccionproveedor1 d inner join (select idRelacion, max(id) as max_id from 02direccionproveedor1 group by idRelacion) dx on dx.idRelacion = d.idRelacion and dx.max_id = d.id) as 02direccionproveedor1 on 02usuarios.id = 02direccionproveedor1.idRelacion where 02usuarios.id = "'.$id.'" ';		
		$query = mysqli_query($conn,$var2);
		return $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
	}
 
	public function listadociudad($idcc){
		$conn = $this->db();
		$variablequery = "select * from 02productosservicios where idRelacion = '".$idcc."' ";
		return $arrayquery = mysqli_query($conn,$variablequery);
	}
 
	public function listadotelefono($idt){
		$conn = $this->db();
		$variablequery = "select * from 02direccionproveedor1 where idRelacion = '".$idt."' ";
		return $arrayquery = mysqli_query($conn,$variablequery);
	}
 
	public function listadootrosproductosyserv($ID1){
		$conn = $this->db();
		$variablequery = "select * from 02otrosproveedores where idRelacion = '".$ID1."' ";
		return $arrayquery = mysqli_query($conn,$variablequery);
    }
 
	public function variableusuario2(){
		$conn = $this->db();
		$variablequery = "select * from 02usuarios where idRelacion = '".$_SESSION['idPROV']."' ";
		$arrayquery = mysqli_query($conn,$variablequery);
		return $row = mysqli_fetch_array($arrayquery, MYSQLI_ASSOC);		
	}
 
	/* ─────────────────────────────────────────
	   REVISORES
	   ───────────────────────────────────────── */
	public function revisar_usuario2($idp){
		$conn = $this->db();
		$var1 = 'select id from 02usuarios where id =  "'.$idp.'" ';
		$query = mysqli_query($conn,$var1) or die('P44'.mysqli_error($conn));
		$row = mysqli_fetch_array($query, MYSQLI_ASSOC);
		return $row['id'];
	}
 
	public function revisar_02direccionproveedor1($idp){
		$conn = $this->db();
		$var1 = 'select id from 02direccionproveedor1 where idRelacion =  "'.$idp.'" ';
		$query = mysqli_query($conn,$var1) or die('P44'.mysqli_error($conn));
		$row = mysqli_fetch_array($query, MYSQLI_ASSOC);
		return $row['id'];
	}
 
	public function revisar_02USUARIO($usuario){
		$conn = $this->db();
		$var1 = 'select id from 02usuarios where usuario =  "'.$usuario.'" ';
		$query = mysqli_query($conn,$var1) or die('P44'.mysqli_error($conn));
		$row = mysqli_fetch_array($query, MYSQLI_ASSOC);
		return $row['id'];
	}	
 private function existe_usuario_en_otro_proveedor($usuario, $idActual = 0){

		$conn = $this->db();

		$usuario = mysqli_real_escape_string($conn, trim($usuario));

		$idActual = (int)$idActual;



		if($usuario === ''){

			return false;

		}



		$query = mysqli_query(

			$conn,

			"SELECT id FROM 02usuarios WHERE usuario = '".$usuario."' AND id <> '".$idActual."' LIMIT 1"

		) or die('P44'.mysqli_error($conn));


	return mysqli_num_rows($query) > 0;



	}



	private function existe_nombre_comercial_en_otro_proveedor($nommbrerazon, $idActual = 0){



		$conn = $this->db();



		$nommbrerazon = mysqli_real_escape_string($conn, trim($nommbrerazon));



		$idActual = (int)$idActual;







		if($nommbrerazon === ''){



			return false;



		}







		$query = mysqli_query(



			$conn,



			"SELECT u.id

			FROM 02usuarios u

			LEFT JOIN 02direccionproveedor1 d ON u.id = d.idRelacion

			WHERE u.id <> '".$idActual."'

			AND (TRIM(u.nommbrerazon) = '".$nommbrerazon."' OR TRIM(d.P_NOMBRE_COMERCIAL_EMPRESA) = '".$nommbrerazon."')

			LIMIT 1"



		) or die('P44'.mysqli_error($conn));

		return mysqli_num_rows($query) > 0;

	}



	private function generar_usuario_unico_duplicado($usuarioBase, $idOrigen){

		$usuarioBase = trim($usuarioBase);

		$idOrigen = (int)$idOrigen;



		if($usuarioBase === ''){

			$usuarioBase = 'proveedor_'.$idOrigen;

		}



		$candidato = $usuarioBase.$idOrigen;

		$contador = 2;



		while($this->existe_usuario_en_otro_proveedor($candidato, 0)){

			$candidato = $usuarioBase.$idOrigen.'_'.$contador;

			$contador++;

		}



		return $candidato;

	}

	public function revisar_02campo($tabla,$campo,$valor){
		$conn = $this->db();
		$var1 = 'select id from '.$tabla.' where '.$campo.' =  "'.$valor.'" ';
		$query = mysqli_query($conn,$var1) or die('P44'.mysqli_error($conn));
		$row = mysqli_fetch_array($query, MYSQLI_ASSOC);
		return $row['id'];
	}	
 
	public function revisar_02TODOS($usuario,$nommbrerazon,$rfc,$P_NOMBRE_FISCAL_RS_EMPRESA){
		$conn = $this->db();
		$var1 = 'select *,02usuarios.id AS IDDD from 02usuarios left join (select d.* from 02direccionproveedor1 d inner join (select idRelacion, max(id) as max_id from 02direccionproveedor1 group by idRelacion) dx on dx.idRelacion = d.idRelacion and dx.max_id = d.id) as 02direccionproveedor1 on 02usuarios.id = 02direccionproveedor1.idRelacion WHERE 
		02usuarios.usuario= "'.$usuario.'" and
		02usuarios.nommbrerazon="'.$nommbrerazon.'" and 
		02direccionproveedor1.P_RFC_MTDP= "'.$rfc.'" and 
		02direccionproveedor1.P_NOMBRE_FISCAL_RS_EMPRESA= "'.$P_NOMBRE_FISCAL_RS_EMPRESA.'"
		';
		$query = mysqli_query($conn,$var1) or die('P44'.mysqli_error($conn));
		$row = mysqli_fetch_array($query, MYSQLI_ASSOC);
		return $row['IDDD'];
	}
 
	/* ─────────────────────────────────────────
	   BITÁCORA (consulta para el modal)
	   ───────────────────────────────────────── */
	public function listado_bitacora_proveedor_array($idProveedor){
		$conn = $this->db();
		$idProveedor = intval($idProveedor);
		$resultado = array();
		if($idProveedor <= 0){ return $resultado; }
 
		$query = mysqli_query($conn, "
			SELECT 
				b.id, 
				b.tipo_movimiento, 
				b.detalle, 
				b.usuario, 
				b.fecha_hora,
				COALESCE(d.P_NOMBRE_COMERCIAL_EMPRESA, u.nommbrerazon, CONCAT('Proveedor #', b.id_proveedor)) AS nombre_comercial
			FROM 02PROVEEDORES_BITACORA b
			LEFT JOIN 02usuarios u ON u.id = b.id_proveedor
			LEFT JOIN (select d.* from 02direccionproveedor1 d inner join (select idRelacion, max(id) as max_id from 02direccionproveedor1 group by idRelacion) dx on dx.idRelacion = d.idRelacion and dx.max_id = d.id) d ON d.idRelacion = b.id_proveedor
			WHERE b.id_proveedor = '".$idProveedor."'
			ORDER BY b.fecha_hora DESC, b.id DESC
			LIMIT 200
		");
 
		if($query){
			while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
				$resultado[] = array(
					'id'              => $row['id'],
					'tipo_movimiento' => $row['tipo_movimiento'],
					'detalle'         => $row['detalle'],
					'usuario'         => $row['usuario'],
					'fecha_hora'      => $row['fecha_hora'],
					'nombre_comercial'=> $row['nombre_comercial']
				);
			}
		}
		return $resultado;
	}
 
	/* ─────────────────────────────────────────
	   EMPRESA RELACIÓN
	   ───────────────────────────────────────── */
	public function PROVEEDOREMPRESA($IDRELACIONP,$IDRELACIONC){
		if($IDRELACIONC != ''){
			$conn = $this->db();
			$variablequery1 = "delete from 02empresarelacion where idRelacionP = '".$IDRELACIONP."' ";
			mysqli_query($conn,$variablequery1);
 
			$explotado = explode('or',$IDRELACIONC);
			$cuenta = count($explotado) - 1;
			for($rrr=0;$rrr<=$cuenta;$rrr++){
				$variablequery2 = "insert into 02empresarelacion(idRelacionP,idRelacionC)
				values('".$IDRELACIONP."','".$explotado[$rrr]."')";
				mysqli_query($conn,$variablequery2);
			}
			return "SI";
		}else{
			return "NO";
		}
	}
 private function mensaje_error_lp($mensaje){

		return "<strong><p style='color:red; font-size:20px; text-transform:uppercase;'>".$mensaje."</p></strong>";

	}

	/* ─────────────────────────────────────────
	   GUARDAR USUARIO (NUEVO / ACTUALIZAR)
	   ───────────────────────────────────────── */
	public function guardar_usuario2($usuario, $nommbrerazon, $P_NOMBRE_FISCAL_RS_EMPRESA, $contrasenia, $email, $rfc, $mandacorreo2, $id_empresa){
 
		if($mandacorreo2=='si'){
			if($this->ambiente()=='PROD'){
				$link_generado = 'https://epcinn.com/crm/sistemaPROD/?salir=1';
			}elseif($this->ambiente()=='PROD2'){
				$link_generado = 'https://epcinn.com/crm/sistemaPROD2/?salir=1';	
			}else{
				$link_generado = 'https://www.epcinn.com/pruebas/crm2/main-files/syn-ui/sistemaPRUEBAS/?salir=1';
			}
		}
 
		$conexion = new herramientas();
		$conn = $this->db();
		
		// Valores escapados para las consultas de escritura. Se conservan las

		// variables originales para validaciones, correo y texto de bitácora.

		$usuarioSql = mysqli_real_escape_string($conn, trim($usuario));

		$nommbrerazonSql = mysqli_real_escape_string($conn, trim($nommbrerazon));

		$P_NOMBRE_FISCAL_RS_EMPRESASql = mysqli_real_escape_string($conn, trim($P_NOMBRE_FISCAL_RS_EMPRESA));

		$contraseniaSql = mysqli_real_escape_string($conn, $contrasenia);

		$emailSql = mysqli_real_escape_string($conn, trim($email));

		$rfcSql = mysqli_real_escape_string($conn, trim($rfc));

		$idEmpresaSql = mysqli_real_escape_string($conn, $id_empresa);

 
		// ── Validaciones de unicidad ──────────────────────────────────────────
		if($this->revisar_02TODOS($usuario,$nommbrerazon,$rfc,$P_NOMBRE_FISCAL_RS_EMPRESA)>=1){}else{
			if($usuario!=''){
				$existe1 = $this->revisar_02campo('02usuarios','usuario',$usuario);		
				if($existe1>=1){
					echo "EL *USUARIO CRM* DEL PROVEEDOR ESTÁ PREVIAMENTE INGRESADO.";
					exit;
				}		
			}
			if($nommbrerazon!=''){
				$existe1 = $this->revisar_02campo('02usuarios','nommbrerazon',$nommbrerazon);		
				if($existe1>=1){
					echo "EL *NOMBRE COMERCIAL DEL PROVEEDOR* ESTÁ PREVIAMENTE INGRESADO.";
					exit;
				}
			}			
			if($rfc != ''){
				$rfc = trim($rfc);
				if($rfc != 'XAXX010101000' && $rfc != 'XEXX010101000'){
					$existe1 = $this->revisar_02campo('02direccionproveedor1','P_RFC_MTDP',$rfc);		
					if($existe1>=1){
						echo "EL * RFC DEL PROVEEDOR* ESTÁ PREVIAMENTE INGRESADO.";
						exit;
					}
				}
			}
			if($P_NOMBRE_FISCAL_RS_EMPRESA!=''){
				$existe1 = $this->revisar_02campo('02direccionproveedor1','P_NOMBRE_FISCAL_RS_EMPRESA',$P_NOMBRE_FISCAL_RS_EMPRESA);	
				if($existe1>=1){
					echo "EL *RAZÓN SOCIAL* DEL PROVEEDOR ESTÁ PREVIAMENTE INGRESADO.";
					exit;
				}
			}
		}
 
		// ── Envío de correo ───────────────────────────────────────────────────
		if($mandacorreo2=='si'){
			$adjuntos = array();
			$Subject = 'Favor de Completar el Formulario';
			$EMAILnombre = array($email=>$nommbrerazon .' ');
			$smtp = $conexion->array_smtp_ID($conn,$id_empresa);
			$idlogo = $smtp['idRelacion'];
			$logo = $conexion->variables_informacionfiscal_logo2_ID($conn,$idlogo);
			$embebida = array(
				'../includes/archivos/'.$logo => 'ver',
				'../manuales/munecos.jpg' => 'munecos',
				'../manuales/qr_proveedores_whatsapp.jpg' => 'qrproveedores'
			);
			$html = $this->html($link_generado,'Usuario: AdminPR_'.$usuario.' Password: '.$contrasenia);
			$conexion->email($EMAILnombre, $html, $adjuntos, $embebida, $Subject,$smtp);
		}
 
		// ── INSERT / UPDATE en 02usuarios ─────────────────────────────────────
		$existe1 = $this->revisar_02USUARIO($usuario);
		$idwebc  = '';
 
		if($existe1>=1){
			mysqli_query($conn, "update 02usuarios set
			PERMISOS = 'PROVEEDORES',
	        usuario = '".$usuarioSql."' , 

			nommbrerazon = '".$nommbrerazonSql."' ,

			contrasenia = '".$contraseniaSql."' ,

			email = '".$emailSql."' where id = '".$existe1."' ; ") or die('P156'.mysqli_error($conn));

			$idwebc = $existe1;
 
			// ── BITÁCORA: actualización de datos generales ────────────────────
			$this->registrar_bitacora_proveedor(
				$idwebc,
				'ACTUALIZACION',
				'Se actualizaron datos generales del proveedor.'
				.' Usuario CRM: '.$usuario
				.' | Nombre comercial: '.$nommbrerazon
				.' | RFC: '.$rfc
				.' | Email: '.$email
			);
		}else{
			mysqli_query($conn,"insert into 02usuarios (
			prefijo,
			usuario, nommbrerazon,
			contrasenia, email, PERMISOS) values (
			'AdminPR',
			'".$usuarioSql."' , 

			'".$nommbrerazonSql."' , 

			'".$contraseniaSql."' , 

			'".$emailSql."', 'PROVEEDORES'

			); ") or die('P160'.mysqli_error($conn));
			$idwebc = mysqli_insert_id($conn);
		}
 
		// ── INSERT / UPDATE en 02direccionproveedor1 ──────────────────────────
		$existe2 = $this->revisar_02direccionproveedor1($idwebc);
 
		if($existe2>=1){
			mysqli_query($conn,"update 02direccionproveedor1 set 
				P_RFC_MTDP = '".$rfcSql."' ,

			P_NOMBRE_COMERCIAL_EMPRESA = '".$nommbrerazonSql."',

			P_NOMBRE_FISCAL_RS_EMPRESA = '".$P_NOMBRE_FISCAL_RS_EMPRESASql."' where idRelacion = '".$idwebc."' ; ") or die('P156'.mysqli_error($conn));

 
			// ── BITÁCORA: actualización de datos fiscales ─────────────────────
			$this->registrar_bitacora_proveedor(
				$idwebc,
				'ACTUALIZACION',
				'Se actualizaron datos fiscales del proveedor.'
				.' Nombre comercial: '.$nommbrerazon
				.' | Razón social: '.$P_NOMBRE_FISCAL_RS_EMPRESA
				.' | RFC: '.$rfc
			);
 
			if($mandacorreo2=='si'){
				return "<P style='color:green; font-size:18px;'>INGRESADO Y CORREO ENVIADO</P>";
			}else{
				return "<P style='color:green; font-size:18px;'>INGRESADO</P>";
			}
		}else{
			// Primera vez: registrar empresa y dirección
			$this->PROVEEDOREMPRESA($idwebc,$idEmpresaSql);

			mysqli_query($conn,"insert into 02direccionproveedor1 
			( P_NOMBRE_COMERCIAL_EMPRESA, P_NOMBRE_FISCAL_RS_EMPRESA, idRelacion, P_RFC_MTDP) values 
			( '".$nommbrerazonSql."' ,'".$P_NOMBRE_FISCAL_RS_EMPRESASql."' , '".$idwebc."','".$rfcSql."'  ); ") or die('P160'.mysqli_error($conn));

 
			// ── BITÁCORA: ingreso nuevo proveedor ─────────────────────────────
			$this->registrar_bitacora_proveedor(
				$idwebc,
				'INGRESO',
				'Se registró nuevo proveedor.'
				.' Usuario CRM: '.$usuario
				.' | Nombre comercial: '.$nommbrerazon
				.' | Razón social: '.$P_NOMBRE_FISCAL_RS_EMPRESA
				.' | RFC: '.$rfc
				.' | Email: '.$email
				.($mandacorreo2=='si' ? ' | Correo de bienvenida enviado.' : '')
			);
 
			if($mandacorreo2=='si'){
				return "<P style='color:green; font-size:18px;'>INGRESADO Y CORREO ENVIADO</P>";
			}else{
				return "<P style='color:green; font-size:18px;'>INGRESADO</P>";
			}
		}
	}
 
	/* ─────────────────────────────────────────
	   BORRAR PROVEEDOR COMPLETO
	   ───────────────────────────────────────── */
	public function borra_listadoP($id){ 
		$conn = $this->db();
 
		// ── Recuperar nombre antes de borrar (para la bitácora) ───────────────
		$rowNombre = mysqli_fetch_array(
			mysqli_query($conn, "SELECT nommbrerazon FROM 02usuarios WHERE id = '".$id."' "),
			MYSQLI_ASSOC
		);
		$nombreComercial = $rowNombre ? $rowNombre['nommbrerazon'] : 'ID:'.$id;
 
		// ── Eliminaciones en cascada ──────────────────────────────────────────
		$tablasBorrar = array(
			'P302' => "DELETE FROM 02usuarios where id = '".$id."' ",
			'P305' => "DELETE FROM 02empresarelacion WHERE idRelacionP = '".$id."' ",
			'P308' => "DELETE FROM `02productosservicios` WHERE `idRelacion` = '".$id."' ",
			'P311' => "DELETE FROM `02otrosproveedores` WHERE `idRelacion` = '".$id."' ",
			'P314' => "DELETE FROM `02ligaproveedor` WHERE `idRelacion` = '".$id."' ",
			'P317' => "DELETE FROM `02presentacionproduc` WHERE `idRelacion` = '".$id."' ",
			'P320' => "DELETE FROM `02DOCUMENTOSFISCALES` WHERE `idRelacion` = '".$id."' ",
			'P326' => "DELETE FROM `02otrosdocumentos` WHERE `idRelacion` = '".$id."' ",
			'P329' => "DELETE FROM `02metodopago` WHERE `idRelacion` = '".$id."' ",
			'P332' => "DELETE FROM `02direccionproveedor1` WHERE `idRelacion` = '".$id."' ",
			'P335' => "DELETE FROM `02contactosprovee` WHERE `idRelacion` = '".$id."' ",
			'P338' => "DELETE FROM `02DIROFICINASBODEGAS` WHERE `idRelacion` = '".$id."' ",
			'P341' => "DELETE FROM `02DATOSBANCARIOS1` WHERE `idRelacion` = '".$id."' ",
			'P344' => "DELETE FROM `02REFERENCIASCOMERCIALES1` WHERE `idRelacion` = '".$id."' ",
		);
		foreach($tablasBorrar as $errCode => $sql){
			mysqli_query($conn, $sql) or die($errCode.mysqli_error($conn));
		}
 
		// ── BITÁCORA: baja de proveedor ───────────────────────────────────────
		// Nota: el registro de 02usuarios ya fue eliminado, pero la bitácora
		// guarda el id_proveedor; el registro en 02PROVEEDORES_BITACORA persiste
		// como evidencia histórica.
		$this->registrar_bitacora_proveedor(
			$id,
			'CANCELACION',
			'Se eliminó el proveedor "'.$nombreComercial.'" (ID:'.$id.') y todos sus registros relacionados.'
		);
 
		return "<strong><P style='color:green; font-size:25px;'>ELEMENTO BORRADO</P></strong>";
	}
 
	/* ─────────────────────────────────────────
	   LISTADO INDIVIDUAL
	   ───────────────────────────────────────── */
	public function Listado_LP2($id){
		$conn = $this->db();
		$variablequery = "select *,02usuarios.id AS IDDD from 
		02usuarios, 02direccionproveedor1 WHERE
		02usuarios.id = 02direccionproveedor1.idRelacion and 02usuarios.id = '".$id."' ";
		return $arrayquery = mysqli_query($conn,$variablequery);
	}
 
	/* ─────────────────────────────────────────
	   ACTUALIZAR PROVEEDOR
	   ───────────────────────────────────────── */
	PUBLIC FUNCTION ACTUALIZA_LP($ID,$email,$contrasenia,$mandacorreo,$nommbrerazon,$P_NOMBRE_FISCAL_RS_EMPRESA,$P_RFC_MTDP,$usuario){
		$conn = $this->db();
 
		$empresaquery = mysqli_query($conn, 'SELECT * FROM `02empresarelacion` where `02empresarelacion`.`idRelacionP` = "'.$ID.'" ') or die('P156'.mysqli_error($conn));
		$rowuem = mysqli_fetch_array($empresaquery);
 
		$nommbrerazon            = trim($nommbrerazon);
		$P_NOMBRE_FISCAL_RS_EMPRESA = trim($P_NOMBRE_FISCAL_RS_EMPRESA);
		$P_RFC_MTDP              = trim($P_RFC_MTDP);
			$IDSql = mysqli_real_escape_string($conn, $ID);

		$emailSql = mysqli_real_escape_string($conn, trim($email));

		$contraseniaSql = mysqli_real_escape_string($conn, $contrasenia);

		$nommbrerazonSql = mysqli_real_escape_string($conn, $nommbrerazon);

		$P_NOMBRE_FISCAL_RS_EMPRESASql = mysqli_real_escape_string($conn, $P_NOMBRE_FISCAL_RS_EMPRESA);

		$P_RFC_MTDPSql = mysqli_real_escape_string($conn, $P_RFC_MTDP);

		$usuarioSql = mysqli_real_escape_string($conn, trim($usuario));
		
			if($this->existe_usuario_en_otro_proveedor($usuario, $IDSql)){

			return $this->mensaje_error_lp("ERROR: EL USUARIO CRM YA EXISTE EN OTRO PROVEEDOR. CAPTURA UN USUARIO DIFERENTE PARA EVITAR CONFUSIÓN AL INGRESAR.");


		}

        
		if($this->existe_nombre_comercial_en_otro_proveedor($nommbrerazon, $IDSql)){



	return $this->mensaje_error_lp("ERROR: EL NOMBRE COMERCIAL DEL PROVEEDOR YA EXISTE EN OTRO PROVEEDOR. CAPTURA UN NOMBRE COMERCIAL DIFERENTE PARA EVITAR DUPLICADOS.");




		}

 
		// ── Datos anteriores para detectar cambios ────────────────────────────
		$rowAnterior = mysqli_fetch_array(
			
			mysqli_query($conn, "SELECT nommbrerazon, email, usuario FROM 02usuarios WHERE id = '".$IDSql."' "),

			MYSQLI_ASSOC
		);
		$rowDirAnterior = mysqli_fetch_array(
					mysqli_query($conn, "SELECT P_NOMBRE_FISCAL_RS_EMPRESA, P_RFC_MTDP FROM 02direccionproveedor1 WHERE idRelacion = '".$IDSql."' "),

			MYSQLI_ASSOC
		);
 
		// ── UPDATE 02usuarios ─────────────────────────────────────────────────
		mysqli_query($conn, "update 02usuarios set
	contrasenia = '".$contraseniaSql."' ,

		email = '".$emailSql."',

		nommbrerazon = '".$nommbrerazonSql."',

		usuario = '".$usuarioSql."'

		where id = '".$IDSql."' ; ") or die('P156'.mysqli_error($conn));

 
		// ── UPDATE / INSERT 02direccionproveedor1 ─────────────────────────────
			$direccionQuery = mysqli_query($conn, "select idRelacion from 02direccionproveedor1 where idRelacion = '".$IDSql."' ");

		if(mysqli_num_rows($direccionQuery) > 0){
			mysqli_query($conn, "update 02direccionproveedor1 set
		P_NOMBRE_COMERCIAL_EMPRESA = '".$nommbrerazonSql."',

			P_NOMBRE_FISCAL_RS_EMPRESA = '".$P_NOMBRE_FISCAL_RS_EMPRESASql."',

			P_RFC_MTDP = '".$P_RFC_MTDPSql."'

			where idRelacion = '".$IDSql."' ; ") or die('P156'.mysqli_error($conn));

		}else{
			mysqli_query($conn, "insert into 02direccionproveedor1 (
			idRelacion,
			P_NOMBRE_COMERCIAL_EMPRESA,
			P_NOMBRE_FISCAL_RS_EMPRESA,
			P_RFC_MTDP
			) values (
		'".$IDSql."',

			'".$nommbrerazonSql."',

			'".$P_NOMBRE_FISCAL_RS_EMPRESASql."',

			'".$P_RFC_MTDPSql."'

			); ") or die('P156'.mysqli_error($conn));
		}
 
		// ── Construir detalle de cambios ──────────────────────────────────────
		$cambios = array();
		if($rowAnterior){
			if(trim($rowAnterior['usuario'])     !== $usuario)      $cambios[] = 'Usuario CRM: "'.$rowAnterior['usuario'].'" → "'.$usuario.'"';
			if(trim($rowAnterior['nommbrerazon'])!== $nommbrerazon) $cambios[] = 'Nombre comercial: "'.$rowAnterior['nommbrerazon'].'" → "'.$nommbrerazon.'"';
			if(trim($rowAnterior['email'])       !== $email)        $cambios[] = 'Email: "'.$rowAnterior['email'].'" → "'.$email.'"';
		}
		if($rowDirAnterior){
			if(trim($rowDirAnterior['P_NOMBRE_FISCAL_RS_EMPRESA']) !== $P_NOMBRE_FISCAL_RS_EMPRESA)
				$cambios[] = 'Razón social: "'.$rowDirAnterior['P_NOMBRE_FISCAL_RS_EMPRESA'].'" → "'.$P_NOMBRE_FISCAL_RS_EMPRESA.'"';
			if(trim($rowDirAnterior['P_RFC_MTDP']) !== $P_RFC_MTDP)
				$cambios[] = 'RFC: "'.$rowDirAnterior['P_RFC_MTDP'].'" → "'.$P_RFC_MTDP.'"';
		}
 
		$detalleBitacora = 'Se actualizaron datos generales del proveedor.';
		if(!empty($cambios)){
			$detalleBitacora .= ' Cambios: '.implode(' | ', $cambios);
		}
 
		// ── BITÁCORA: actualización ───────────────────────────────────────────
		$this->registrar_bitacora_proveedor($ID, 'ACTUALIZACION', $detalleBitacora);
 
		// ── Envío de correo ───────────────────────────────────────────────────
		$variablequery = "select * from 02usuarios WHERE 02usuarios.id = '".$ID."' ";
		$arrayquery    = mysqli_query($conn,$variablequery);
		$rowus         = mysqli_fetch_array($arrayquery);
 
		if($mandacorreo=='si'){
			if($this->ambiente()=='PROD'){
				$link_generado = 'https://epcinn.com/crm/sistemaPROD/?salir=1';
			}elseif($this->ambiente()=='PROD2'){
				$link_generado = 'https://epcinn.com/crm/sistemaPROD2/?salir=1';	
			}else{
				$link_generado = 'https://www.epcinn.com/pruebas/crm2/main-files/syn-ui/sistemaPRUEBAS/?salir=1';
			}
 
			$conexion = new herramientas();
			$Subject  = 'Favor de Completar el Formulario';
			$EMAILnombre = array($email=>$nommbrerazon .' ');
			$smtp = $conexion->array_smtp_ID($conn,$rowuem['idRelacionC']);
			$idlogo = $smtp['idRelacion'];
			$logo = $conexion->variables_informacionfiscal_logo2_ID($conn,$idlogo);
			$embebida = array(
				'../includes/archivos/'.$logo => 'ver',
				'../manuales/munecos.jpg' => 'munecos',
				'../manuales/qr_proveedores_whatsapp.jpg' => 'qrproveedores'
			);
			$adjuntos = array();
			$html = $this->html($link_generado,'Usuario: AdminPR_'.$usuario.' Password: '.$contrasenia);
			$conexion->email($EMAILnombre, $html, $adjuntos, $embebida, $Subject, $smtp);
 
			return "ACTUALIZADO Y CORREO ENVIADO";
		}else{
			return "ACTUALIZADO";
		}
	}
 
	/* ─────────────────────────────────────────
	   DUPLICAR PROVEEDOR
	   ───────────────────────────────────────── */
	public function duplica($id, $usuarioDuplicado = '', $nombreComercialDuplicado = ''){


		$conn = $this->db();
		$id   = (int)$id;
 
		$queryejecuta = mysqli_query($conn,"select * from 02usuarios where id=".$id." limit 1");
		$row = mysqli_fetch_array($queryejecuta, MYSQLI_ASSOC);
		if(!$row){
			echo "NO SE ENCONTRÓ EL PROVEEDOR";
			return;
		}
 
	$usuarioDuplicado = trim($usuarioDuplicado);

		if($usuarioDuplicado === ''){

			$usuarioDuplicado = $this->generar_usuario_unico_duplicado($row['usuario'], $id);

		}



		if($this->existe_usuario_en_otro_proveedor($usuarioDuplicado, 0)){

			echo "ERROR: EL USUARIO CRM YA EXISTE EN OTRO PROVEEDOR. CAPTURA UN USUARIO DIFERENTE PARA DUPLICAR.";

			return;

		}

	$nombreComercialDuplicado = trim($nombreComercialDuplicado);



		if($nombreComercialDuplicado === ''){



			echo "ERROR: CAPTURA UN NOMBRE COMERCIAL DIFERENTE PARA DUPLICAR.";



			return;



		}



		if(strcasecmp(trim($row['nommbrerazon']), $nombreComercialDuplicado) === 0){



	echo $this->mensaje_error_lp("ERROR: NO PUEDES DUPLICAR CON EL MISMO NOMBRE COMERCIAL. CAPTURA UN NOMBRE COMERCIAL DIFERENTE.");



			return;



		}



		if($this->existe_nombre_comercial_en_otro_proveedor($nombreComercialDuplicado, 0)){



			echo "ERROR: EL NOMBRE COMERCIAL DEL PROVEEDOR YA EXISTE EN OTRO PROVEEDOR. CAPTURA UN NOMBRE COMERCIAL DIFERENTE PARA EVITAR DUPLICADOS.";



			return;



		}


		$usuario      = mysqli_real_escape_string($conn, $usuarioDuplicado);

	$nommbrerazon = mysqli_real_escape_string($conn, $nombreComercialDuplicado);

		$contrasenia  = mysqli_real_escape_string($conn, $row['contrasenia']);
		$email        = mysqli_real_escape_string($conn, $row['email']);
 
		mysqli_query($conn,"insert into 02usuarios (
		prefijo, usuario, nommbrerazon, contrasenia, email, PERMISOS) values (
		'AdminPR',
		'".$usuario."' ,
		'".$nommbrerazon."' ,
		'".$contrasenia."' ,
		'".$email."',
		'PROVEEDORES'
		); ") or die('P160'.mysqli_error($conn));
		$idwebc = mysqli_insert_id($conn);
 
		// ── 02direccionproveedor1 ─────────────────────────────────────────────
		$queryejecuta2 = mysqli_query($conn,"select * from 02direccionproveedor1 where idRelacion=".$id." limit 1");
		$row2 = mysqli_fetch_array($queryejecuta2, MYSQLI_ASSOC);
 
		if($row2){
		$nombreComercial = mysqli_real_escape_string($conn, $nombreComercialDuplicado);

			$razonSocial     = mysqli_real_escape_string($conn, $row2['P_NOMBRE_FISCAL_RS_EMPRESA']);
			$rfc             = mysqli_real_escape_string($conn, $row2['P_RFC_MTDP']);
 
			mysqli_query($conn,"insert into 02direccionproveedor1 (
			P_NOMBRE_COMERCIAL_EMPRESA,
			P_NOMBRE_FISCAL_RS_EMPRESA,
			idRelacion,
			P_RFC_MTDP) values (
			'".$nombreComercial."' ,
			'".$razonSocial."' ,
			'".$idwebc."',
			'".$rfc."'
			); ") or die('P160'.mysqli_error($conn));
		}
 
		// ── BITÁCORA: duplicado ───────────────────────────────────────────────
		// Registro en el proveedor NUEVO
		$this->registrar_bitacora_proveedor(
			$idwebc,
			'INGRESO',
					'Proveedor creado por duplicación del proveedor ID:'.$id.' ("'.$row['nommbrerazon'].'") con nombre comercial "'.$nombreComercialDuplicado.'".'

		);
		// Registro en el proveedor ORIGEN
		$this->registrar_bitacora_proveedor(
			$id,
			'ACTUALIZACION',
			'Este proveedor fue duplicado. Nuevo proveedor generado con ID:'.$idwebc.'.'
		);
 
		echo "PROVEEDOR DUPLICADO CON USUARIO CRM: AdminPR_".$usuario;

	}
 
	} // fin clase
?>