<?php 
require "var.php.php";
session_start();
session_name('facturamail'.$var);
date_default_timezone_set('America/Mexico_City');
if(!$_SESSION[login]){
header("location:sistema.php");
}

$_SESSION[pagina_ver] = 'cambios2.php';



require 'receivemail.class.php';
$conn = new clase();

if($_GET[quitar_ip]){
extract($_GET);
$_SESSION[quitar_ip] = $quitar_ip;
//unset($_SESSION[agregar_ip]);
exit;
}

if($_POST[descomprimir]){


if($_POST[tipo] == 'zip' or $_POST[tipo] == 'ZIP' ){
$db_link = $conn->db();
extract($_POST);
$id = $conn->decrypt($descomprimir);
$qry='select * from archivos where id = "'.$id.'" ';
$res=mysql_query($qry) or die(mysql_error()." qry::$qry");
$obj = mysql_fetch_array($res);
//echo $_SESSION[rfcEmisorCarpeta].$obj[nombre_nuevo];
$enzipado = new ZipArchive();
$enzipado->open($_SESSION[rfcEmisorCarpeta].$obj[nombre_nuevo]);
$extraido = $enzipado->extractTo($_SESSION[rfcEmisorCarpeta]);
if($extraido == TRUE){

 for ($x = 0; $x < $enzipado->numFiles; $x++) {
 $archivo = $enzipado->statIndex($x);
// echo 
$nombrearchivo = $archivo['name'];
$extracer=explode('.',$nombrearchivo);
$cuenta=count($extracer);
$fin=$cuenta-1;
$nuevonombre = date('Y-m-d-h-i-s').$x.'.'.$extracer[$fin];

rename($_SESSION[rfcEmisorCarpeta].$archivo['name'],$_SESSION[rfcEmisorCarpeta].$nuevonombre);
 
 if($extracer[$fin]=='xml'){
	if(@simplexml_load_file($_SESSION[rfcEmisorCarpeta].$nuevonombre)){
	@$xmlDoc=simplexml_load_file($_SESSION[rfcEmisorCarpeta].$nuevonombre);
@$xpath='/cfdi:Comprobante';
foreach($xmlDoc->xpath($xpath) as $autor);}else{}

if(@simplexml_load_file($_SESSION[rfcEmisorCarpeta].$nuevonombre)){
	@$xmlDoc=simplexml_load_file($_SESSION[rfcEmisorCarpeta].$nuevonombre);
@$xpath='/cfdi:Comprobante/cfdi:Receptor';
foreach($xmlDoc->xpath($xpath) as $autorR);}else{}

if(@simplexml_load_file($_SESSION[rfcEmisorCarpeta].$nuevonombre)){
	@$xmlDoc=simplexml_load_file($_SESSION[rfcEmisorCarpeta].$nuevonombre);
@$xpath='/cfdi:Comprobante/cfdi:Emisor';
foreach($xmlDoc->xpath($xpath) as $autorE);}else{}

if(@simplexml_load_file($_SESSION[rfcEmisorCarpeta].$nuevonombre)){
	@$xmlDoc=simplexml_load_file($_SESSION[rfcEmisorCarpeta].$nuevonombre);
@$xpath='/cfdi:Comprobante/cfdi:Impuestos';
foreach($xmlDoc->xpath($xpath) as $impuesto);}else{}

if(@simplexml_load_file($_SESSION[rfcEmisorCarpeta].$nuevonombre)){
	@$xmlDoc=simplexml_load_file($_SESSION[rfcEmisorCarpeta].$nuevonombre);
@$xpath='/cfdi:Comprobante/cfdi:Impuestos/cfdi:Traslados/cfdi:Traslado';
foreach($xmlDoc->xpath($xpath) as $autor3);}else{}

if(@simplexml_load_file($_SESSION[rfcEmisorCarpeta].$nuevonombre)){
@$xmlDoc->registerXPathNamespace('tfd','http://www.sat.gob.mx/TimbreFiscalDigital');
@$xpath = '//tfd:TimbreFiscalDigital'; 
foreach($xmlDoc->xpath($xpath) as $autor4);}else{}
}

//$this->db();

$tbl = mysql_query("select * from tbl_documentos where id = '$obj[idTBL]' ")or die(mysql_error());

$tbl_r = mysql_fetch_array($tbl);

$tbl2 = mysql_query("update archivos set ZIPEADOS = 1 where id = '$id' ")or die(mysql_error());


 
//$idTBL =  mysql_insert_id();
$fechaxml = str_replace('T',' ',$autor['Fecha']);

mysql_query(
"INSERT INTO archivos 
(
 id ,  idU, nombre_viejo,
nombre_nuevo, tamanio_unidad, tamanio, idTBL,
fecha, total, nombreEmi, rfcE,
UUID, 

folio, serie, 
rfcR, nombreRec, 
totalImpuestosRetenidos , totalImpuestosTrasladados,

tipo, ZIPEADOS, TipoDeComprobante
) 

VALUES 

(
 '',  '$_SESSION[idU]', '$nombrearchivo', 
'$nuevonombre', '', '$tamanyo', '$tbl_r[id]', 
'$fechaxml', '$autor[Total]', '$autorE[Nombre]', '$autorE[Rfc]', 
'$autor4[UUID]',

'$autor[Folio]' , '$autor[Serie]',
'$autorR[Rfc]','$autorR[Nombre]',
'$impuesto[TotalImpuestosRetenidos]', '$impuesto[TotalImpuestosTrasladados]'

,'$extracer[$fin]', '1', '$autor[TipoDeComprobante]'
   )")or die(mysql_error()); 
unset($autor,$autor2,$autor3,$autor4,$nuevonombre);
 
 
 }
// echo $enzipado->numFiles ." archivos descomprimidos en total";
header("location:list.php");
}else {
echo 'Ocurrió un error y el archivo no se pudó descomprimir';
}
exit;
}
if($_POST[tipo] == 'rar'){}
}


if($_POST[sql]){
//http://www.imaginanet.com/blog/comprimir-archivos-dinamicamente-en-zip-con-php.html
extract($_POST);
$db_link = $conn->db();
$qry=$conn->decrypt($sql);
$res=mysql_query($qry) or die(mysql_error()." qry::$qry"); 

 $fecha=date("Y-m-d-h-i-s").'.zip';
 $zip = new ZipArchive;
 $zip->open($fecha,ZipArchive::CREATE);
 $i=0;
 while($obj=mysql_fetch_array($res)){

if( file_exists($_SESSION[rfcEmisorCarpeta].$obj[nombre_nuevo])==true ){ 
$i++;

if( strpos($obj[nombre_viejo],'/')==true){

$nombre_viejo1 = explode('/' , $obj[nombre_viejo]);
$nombre_viejo = $nombre_viejo1[1];

}else{
$nombre_viejo =  $obj[nombre_viejo];
}

$zip->addFile($_SESSION[rfcEmisorCarpeta].$obj[nombre_nuevo],$i.'_'.$nombre_viejo );

mysql_query("update archivos set descargado = descargado + 1 where id = '$obj[idarchivos]' ");

}

} 
$zip->close();
header('Content-Type: application/zip');
header('Content-Disposition: attachment; filename="'.$fecha.'"');
readfile($fecha);
@unlink($fecha);
exit;
/*extract($_POST);
require ("zipfile.php");
$zipfile = new zipfile();
$db_link = $conn->db();
$qry=$conn->decrypt($sql);
$res=mysql_query($qry) or die(mysql_error()." qry::$qry"); 
$fecha=date("Y-m-d - h-i-s").'.zip';

while($obj=mysql_fetch_array($res)){
$valor = file_get_contents($_SESSION[rfcEmisorCarpeta].$obj[nombre_nuevo]); 
$zipfile->add_file($valor, $obj[nombre_viejo]);
print $zipfile->file();
mysql_query("update archivos set descargado = descargado + 1 where id = '$obj[idarchivos]' ");
}
exit;*/
}

if($_POST[sql_excel]){
extract($_POST);
$qry=$conn->decrypt($sql_excel);
require('PHPExcel.php');
$objPHPexcel = new PHPExcel();
$i=3;

	//TITULOS
	$styleArray = array(
    'font'  => array(
        'bold'  => true,
        'color' => array('rgb' => '000'),
        'size'  => 10,
        'name'  => 'Calibri'
    ));
	//LOOP
	$styleArray2 = array(
    'font'  => array(
        'bold'  => FALSE,
        'color' => array('rgb' => '000'),
        'size'  => 10,
        'name'  => 'Calibri'		
    ));
								
$objPHPexcel->getActiveSheet()->getStyle('A1:N1')->applyFromArray($styleArray);
//$objPHPexcel->getActiveSheet()->getColumnDimension('F')->setWidth(12);

//AUTOAJUSTE PARA PARTIDAS
//$objPHPexcel->getActiveSheet()->getColumnDimension("A")->setAutoSize(true);
$objPHPexcel->getActiveSheet()->getColumnDimension("B")->setAutoSize(true);
//$objPHPexcel->getActiveSheet()->getColumnDimension("C")->setAutoSize(true);
$objPHPexcel->getActiveSheet()->getColumnDimension("D")->setAutoSize(true);
$objPHPexcel->getActiveSheet()->getColumnDimension("E")->setAutoSize(true);
$objPHPexcel->getActiveSheet()->getColumnDimension("J")->setAutoSize(true);
//$objPHPexcel->getActiveSheet()->getStyle('A1')->getFill()->getStartColor()->setRGB('FF0000');
//$objPHPExcel->getActiveSheet()->getStyle('A1')->getFill()->getStartColor()->setRGB('E4EAF4');

$sheet = $objPHPexcel->getActiveSheet();
$sheet->getStyle('A1:N1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$sheet->getStyle('A1:N1')->getFill()->getStartColor()->setRGB('E4EAF4');


$objPHPexcel->getActiveSheet()->getStyle('A1:N1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

//$objPHPexcel->getActiveSheet()->mergeCells('A1:D1');

$objPHPexcel->getActiveSheet()->SetCellValue('A1','Nombre archivo');
$objPHPexcel->getActiveSheet()->SetCellValue('B1','Total');
$objPHPexcel->getActiveSheet()->SetCellValue('C1','Nombre Emisor');
$objPHPexcel->getActiveSheet()->SetCellValue('D1','RFC Emisor');
$objPHPexcel->getActiveSheet()->SetCellValue('E1','UUID');
$objPHPexcel->getActiveSheet()->SetCellValue('F1','Fecha emision CFDI');
$objPHPexcel->getActiveSheet()->SetCellValue('G1','Tipo de archivo');
$objPHPexcel->getActiveSheet()->SetCellValue('H1','Folio');
$objPHPexcel->getActiveSheet()->SetCellValue('I1','Serie');
$objPHPexcel->getActiveSheet()->SetCellValue('J1','RFC Receptor');
$objPHPexcel->getActiveSheet()->SetCellValue('K1','Nombre Receptor');
$objPHPexcel->getActiveSheet()->SetCellValue('L1','Impuesto Trasladado');
$objPHPexcel->getActiveSheet()->SetCellValue('M1','Impuesto Retenido');
$objPHPexcel->getActiveSheet()->SetCellValue('N1','Email Emisor');
//AUTOAJUSTE PARA ENCABEZADOS
$objPHPexcel->getActiveSheet()->getColumnDimension('F')->setWidth(12);
$objPHPexcel->getActiveSheet()->getColumnDimension('A')->setWidth(12);
$objPHPexcel->getActiveSheet()->getColumnDimension('C')->setWidth(12);
$objPHPexcel->getActiveSheet()->getColumnDimension('K')->setWidth(12);
//

						
$db_link = $conn->db();
$res=mysql_query($qry) or die(mysql_error()." qry::$qry");


while($registro=mysql_fetch_object($res)){
$objPHPexcel->setActiveSheetIndex(0)
->setCellValue('A'.$i,$registro->nombre_viejo)
->setCellValue('B'.$i,$registro->total)
->setCellValue('C'.$i, utf8_encode( $registro->nombreEmi))
->setCellValue('D'.$i,utf8_encode($registro->rfcE))
->setCellValue('E'.$i,$registro->UUID)
->setCellValue('F'.$i,$registro->fechaFiscal)
->setCellValue('G'.$i,$registro->tipo)
->setCellValue('H'.$i,$registro->folio)
->setCellValue('I'.$i,$registro->serie)
->setCellValue('J'.$i,$registro->rfcR)
->setCellValue('K'.$i,utf8_encode($registro->nombreRec))
->setCellValue('L'.$i,$registro->totalImpuestosTrasladados)
->setCellValue('M'.$i,$registro->totalImpuestosRetenidos)
->setCellValue('N'.$i,$registro->emailemisor);
$objPHPexcel->getActiveSheet()->getStyle('A'.$i.':N'.$i)->applyFromArray($styleArray2);
$i++;
}


$f= date("Y-m-d - h-i-s");
header('Content-Type: application/vnd.ms-excel');
header('Content-disposition: attachment; filename="'.$f.'.xls"');
header('Cache-Control: max-age-0');
$objPHPexcel->getActiveSheet()->setTitle('reporte_web');
$objWriter=PHPExcel_IOFactory::createWriter($objPHPexcel,'Excel5');
$objWriter->save('php://output');
exit;

}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

 <link href="styleFACTURAMAIL.css" type="text/css" rel="stylesheet" />


<link rel="stylesheet" href="men_trabajo_top.css" type="text/css" />
<title>Cargar documento</title>
<style type="text/css" >
/*input{ font-family:Calibri; background-color:#FCFFE1; font-size:12px;}*/

#idU{

background-color:#DBFFC4;

}

</style>
</head>

<body>
<div id="Superior" align="center">
<?php require"superior.php"; ?>
</div>


<?php require 'barra.php'; ?>	
	
	
<div id="contenedor">
		<div id="contenido">


<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data"  >
<input name="archivo" type="file" size="50" />
<input type="submit" value="cargar archivo" />
</form>

<p>&nbsp;</p>
<p>
  <?php
    if(isset($_FILES["archivo"]) && $_FILES["archivo"]["size"] > 0){
$conn->cargar();
}
  if(empty($_GET)){
//  $conn->ver();
  
  }


  if($_GET['actualiza']){
$conn->guardar();
}

	?>
</p>
</div></div>
</body>
</html>
