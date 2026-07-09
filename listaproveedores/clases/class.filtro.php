<?php
/**
 	--------------------------
	Autor: Sandor Matamoros
	Programer: Fatima Arellano
	Propietario: EPC
	----------------------------
*/

define("__ROOT1__", dirname(dirname(__FILE__)));
	include_once (__ROOT1__."/../includes/error_reporting.php");
	include_once (__ROOT1__."/../listaproveedores/class.epcinnLP.php");
	include_once (__ROOT1__."/../includes/convertirma.php");
     
	
	class orders extends accesoclase {
	public $mysqli;
	public $counter;

	function __construct(){
		$this->mysqli = $this->db();
    }
	
	public function countAll($sql){
		$query=$this->mysqli->query($sql);
		// FIX: si la query falla, retornar 0
		if ($query === false) {
			return 0;
		}
		$count=$query->num_rows;
		return $count;
	}
	
	public function todos_productosservicios($id){
		$conn = $this->db();
		$productosservicios = 'select * from 02otrosproveedores where idRelacion = "'.$id.'" ';
		$query=mysqli_query($conn,$productosservicios);
		$PRODUCTO_O_SERVICIO_9 = '';
			while($row_productos = mysqli_fetch_array($query,MYSQLI_ASSOC)){
				 $PRODUCTO_O_SERVICIO_9 .= $row_productos['PRODUCTO_O_SERVICIO_9'].'<br>';
			}
		return $PRODUCTO_O_SERVICIO_9;
	}
	
	public function contactospro($id){
		$conn = $this->db();
		$sql = "SELECT NOMBRE_CONTACTO_PROVEE
				FROM 02contactosprovee
				WHERE idRelacion = '".mysqli_real_escape_string($conn, $id)."'
				ORDER BY id DESC
				LIMIT 1";
		$query = mysqli_query($conn, $sql);
		$resultado = '';
		if($row = mysqli_fetch_assoc($query)){
			$resultado = $row['NOMBRE_CONTACTO_PROVEE'];
		}
		return $resultado;
	}

	public function contactoCELpro($id){
		$conn = $this->db();
		$sql = "SELECT CEL_CONTACTO_PROVEE
				FROM 02contactosprovee
				WHERE idRelacion = '".mysqli_real_escape_string($conn, $id)."'
				ORDER BY id DESC
				LIMIT 1";
		$query = mysqli_query($conn, $sql);
		$resultado = '';
		if($row3 = mysqli_fetch_assoc($query)){
			$resultado = $row3['CEL_CONTACTO_PROVEE'];
		}
		return $resultado;
	}

	public function convenionuevo($id) {
		$conn = $this->db();
		$sql = "SELECT CONVENIO_PROVEEDOR
				FROM 02metodopago
				WHERE idRelacion = '" . mysqli_real_escape_string($conn, $id) . "'
				ORDER BY id DESC
				LIMIT 1";
		$resultado = "<span style='color:#b0b0b0;'>SIN INFORMACIÓN</span>";
		if ($query = mysqli_query($conn, $sql)) {
			if ($row = mysqli_fetch_assoc($query)) {
				$valorConvenio = isset($row['CONVENIO_PROVEEDOR']) ? trim(strtoupper($row['CONVENIO_PROVEEDOR'])) : '';
				if ($valorConvenio === 'SI') {
					$resultado = 'SI';
				} elseif ($valorConvenio === 'NO') {
					$resultado = 'NO';
				}
			}
		}
		return $resultado;
	}

	public function datos_convenio($idRelacion){
		$conn = $this->db();
		$variable2 = "select * from 02metodopago where idRelacion = '".$idRelacion."' and CONVENIO_PROVEEDOR = 'SI'";
		$query2 = mysqli_query($conn,$variable2);
		$row2 = mysqli_fetch_array($query2, MYSQLI_ASSOC);
		return $row2;
	}

	public function getData($tables,$campos,$search){
		$offset    = $search['offset'];
		$per_page  = $search['per_page'];
		
		$sWhere  = " ";
		$sWhere2 = "";
		$sWhere3 = "";

		if($search['nommbrerazon']!=""){
			$sWhere2 .= "  02usuarios.nommbrerazon LIKE '%".$search['nommbrerazon']."%' OR ";
		}
		if($search['P_NOMBRE_FISCAL_RS_EMPRESA']!=""){
			$sWhere2 .= "  02direccionproveedor1.P_NOMBRE_FISCAL_RS_EMPRESA LIKE '%".$search['P_NOMBRE_FISCAL_RS_EMPRESA']."%' OR ";
		}
		if($search['CONVENIO_PROVEEDOR']!=""){
			$valorConvenio = $this->mysqli->real_escape_string($search['CONVENIO_PROVEEDOR']);
			$sWhere2 .= "  EXISTS (SELECT 1 FROM 02metodopago WHERE 02metodopago.idRelacion = 02usuarios.id AND 02metodopago.CONVENIO_PROVEEDOR LIKE '%".$valorConvenio."%') OR ";
		}
		if($search['P_RFC_MTDP']!=""){
			$sWhere2 .= "02direccionproveedor1.P_RFC_MTDP LIKE '%".$search['P_RFC_MTDP']."%' OR ";
		}
		if($search['usuario']!=""){
			$sWhere2 .= "02usuarios.usuario LIKE '%".$search['usuario']."%' OR ";
		}
		if($search['contrasenia']!=""){
			$sWhere2 .= "02usuarios.contrasenia LIKE '%".$search['contrasenia']."%' OR ";
		}
		if($search['email']!=""){
			$sWhere2 .= "02usuarios.email LIKE '%".$search['email']."%' OR ";
		}
		if($search['P_TELEFONO_1_EMPRESA']!=""){
			$sWhere2 .= "02direccionproveedor1.P_TELEFONO_1_EMPRESA LIKE '%".$search['P_TELEFONO_1_EMPRESA']."%' OR ";
		}
		if($search['CIUDAD_SERVICIO']!=""){
			$sWhere2 .= "02productosservicios.CIUDAD_SERVICIO LIKE '%".$search['CIUDAD_SERVICIO']."%' OR ";
		}
		if($search['PAIS_SERVICIO']!=""){
			$sWhere2 .= "02productosservicios.PAIS_SERVICIO LIKE '%".$search['PAIS_SERVICIO']."%' OR ";
		}
		if($search['PCONTACTADO_POR']!=""){
			$sWhere2 .= "02productosservicios.PCONTACTADO_POR LIKE '%".$search['PCONTACTADO_POR']."%' OR ";
		}

		if($sWhere2 != ""){
			$sWhere22 = substr($sWhere2, 0, -3);
			$sWhere3  = ' WHERE ( '.$sWhere22.' ) ';
		} else {
			$sWhere3 = '';
		}

		// ── FIX: un solo registro por proveedor en ambas tablas relacionadas ──
		$tables = '
			02usuarios
			LEFT JOIN (
				SELECT d.*
				FROM 02direccionproveedor1 d
				INNER JOIN (
					SELECT idRelacion, MIN(id) AS min_id
					FROM 02direccionproveedor1
					GROUP BY idRelacion
				) dx ON dx.idRelacion = d.idRelacion AND dx.min_id = d.id
			) AS 02direccionproveedor1 ON 02usuarios.id = 02direccionproveedor1.idRelacion

			LEFT JOIN (
				SELECT p.*
				FROM 02productosservicios p
				INNER JOIN (
					SELECT idRelacion, MIN(id) AS min_id
					FROM 02productosservicios
					GROUP BY idRelacion
				) px ON px.idRelacion = p.idRelacion AND px.min_id = p.id
			) AS 02productosservicios ON 02usuarios.id = 02productosservicios.idRelacion
		';
		// ─────────────────────────────────────────────────────────────────────

		$sWhere3 .= " ORDER BY nommbrerazon ASC";

		$sql  = "SELECT DISTINCT $campos, 02usuarios.id AS IDDDDDD FROM $tables $sWhere $sWhere3 LIMIT $offset, $per_page";
		$sql1 = "SELECT DISTINCT 02usuarios.id FROM $tables $sWhere $sWhere3";

		// FIX: verificar que la query no falle antes de retornar
		$query = $this->mysqli->query($sql);
		if ($query === false) {
			// Loguear el error para debugging sin romper la respuesta
			error_log("getData() SQL error: " . $this->mysqli->error . " | SQL: " . $sql);
			$this->setCounter(0);
			return false;
		}

		$nums_row = $this->countAll($sql1);

		$this->setCounter($nums_row);
		return $query;
	}

	function setCounter($counter) {
		$this->counter = $counter;
	}
	function getCounter() {
		return $this->counter;
	}
}
?>
