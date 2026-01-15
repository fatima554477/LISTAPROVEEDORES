<div id="content">     
			<hr/>
		<strong>	  <p class="mb-0 text-uppercase" ><img src="includes/contraer31.png" id="mostrar5" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar5" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;DOCUMENTOS LEGALES DEL PROVEEDOR</p></strong></div>
<div  id="mensajeDATOSPROVEEDORES">
<div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $datosproveedoresadjuntos ; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $datosproveedoresadjuntos ; ?>%</div></div></div>
											                  
						
                            
	        <div id="target5" style="display:block;" class="content2">
        <div class="card">
          <div class="card-body">
		  
	<form class="row g-3 needs-validation was-validated" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" novalidate="" enctype="multipart/form-data" id="DATOSPROVEEDORESform">
	
	

	
	<input type="hidden" name="DATOS_PROVEEDORES" value="DATOS_PROVEEDORES" />
	
	
       
 
					 
								



	
<div class="col-md-6">
		<strong><label for="formFileSm"  class="form-label">DESCARGAR CONTRATO PARA LLENADO DE PROVEEDORES (FORMATO PDF, JPG O PNG)</label></strong>
		<div id="drop_file_zone" ondrop="upload_file(event,'F_PDESCARGAR_CONTRATO_PROVEEDORES')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="F_PDESCARGAR_CONTRATO_PROVEEDORES" type="text" onkeydown="return false" onclick="file_explorer('F_PDESCARGAR_CONTRATO_PROVEEDORES');" style="width:300px;" VALUE="<?php echo $F_PDESCARGAR_CONTRATO_PROVEEDORES; ?>" required /></p>
		<input type="file" name="F_PDESCARGAR_CONTRATO_PROVEEDORES" id="nono"/>
		<div id="1F_PDESCARGAR_CONTRATO_PROVEEDORES">
		<?php
		if($F_PDESCARGAR_CONTRATO_PROVEEDORES!=""){echo "<a target='_blank' href='includes/archivos/".$F_PDESCARGAR_CONTRATO_PROVEEDORES."'>Visualizar!</a>"; 
		}?></div>
	</div>	
	</div>
	
<div class="col-md-6">
<strong><label for="formFileSm"  class="form-label">ADJUNTAR CONTRATO FIRMADO (FORMATO PDF, JPG O PNG)</label></strong>
		<div id="drop_file_zone" ondrop="upload_file(event,'F_PADJUNTAR_CONTRATO_FIRMADO')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="F_PADJUNTAR_CONTRATO_FIRMADO" type="text" onkeydown="return false" onclick="file_explorer('F_PADJUNTAR_CONTRATO_FIRMADO');" style="width:300px;" VALUE="<?php echo $F_PADJUNTAR_CONTRATO_FIRMADO; ?>" required /></p>
		<input type="file" name="F_PADJUNTAR_CONTRATO_FIRMADO" id="nono"/>
		<div id="1F_PADJUNTAR_CONTRATO_FIRMADO">
		<?php
		if($F_PADJUNTAR_CONTRATO_FIRMADO!=""){echo "<a target='_blank' href='includes/archivos/".$F_PADJUNTAR_CONTRATO_FIRMADO."'>Visualizar!</a>"; 
		}?></div>
	</div>	
	</div>
	
<div class="col-md-6">
<strong><label for="formFileSm"  class="form-label"> ADJUNTAR CONTRATO FIRMADO (FORMATO PDF, JPG O PNG)</label></strong>
		<div id="drop_file_zone" ondrop="upload_file(event,'F_PADJUNTAR_CONTRATO_FIRMADO_2')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="F_PADJUNTAR_CONTRATO_FIRMADO_2" type="text" onkeydown="return false" onclick="file_explorer('F_PADJUNTAR_CONTRATO_FIRMADO_2');" style="width:300px;" VALUE="<?php echo $F_PADJUNTAR_CONTRATO_FIRMADO_2; ?>" required /></p>
		<input type="file" name="F_PADJUNTAR_CONTRATO_FIRMADO_2" id="nono"/>
		<div id="1F_PADJUNTAR_CONTRATO_FIRMADO_2">
		<?php
		if($F_PADJUNTAR_CONTRATO_FIRMADO_2!=""){echo "<a target='_blank' href='includes/archivos/".$F_PADJUNTAR_CONTRATO_FIRMADO_2."'>Visualizar!</a>"; 
		}?></div>
	</div>	
	</div>
	
<div class="col-md-6">
<strong><label for="formFileSm"  class="form-label"> ADJUNTAR CONVENIOS (FORMATO PDF, JPG O PNG)</label></strong>
		<div id="drop_file_zone" ondrop="upload_file(event,'F_PADJUNTAR_CONVENIOS')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="F_PADJUNTAR_CONVENIOS" type="text" onkeydown="return false" onclick="file_explorer('F_PADJUNTAR_CONVENIOS');" style="width:300px;" VALUE="<?php echo $F_PADJUNTAR_CONVENIOS; ?>" required /></p>
		<input type="file" name="F_PADJUNTAR_CONVENIOS" id="nono"/>
		<div id="1F_PADJUNTAR_CONVENIOS">
		<?php
		if($F_PADJUNTAR_CONVENIOS!=""){echo "<a target='_blank' href='includes/archivos/".$F_PADJUNTAR_CONVENIOS."'>Visualizar!</a>"; 
		}?></div>
	</div>	
	</div>
	
<div class="col-md-6">
<strong><label for="formFileSm"  class="form-label"> ADJUNTAR CONSTANCIA DE SITUACIÓN FISCAL (FORMATO PDF, JPG O PNG) </label></strong>
		<div id="drop_file_zone" ondrop="upload_file(event,'F_PADJUNTAR_CONSTANCIA_DE_SITUACION_FISCAL')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="F_PADJUNTAR_CONSTANCIA_DE_SITUACION_FISCAL" type="text" onkeydown="return false" onclick="file_explorer('F_PADJUNTAR_CONSTANCIA_DE_SITUACION_FISCAL');" style="width:300px;" VALUE="<?php echo $F_PADJUNTAR_CONSTANCIA_DE_SITUACION_FISCAL ; ?>" required /></p>
		<input type="file" name="F_PADJUNTAR_CONSTANCIA_DE_SITUACION_FISCAL" id="nono"/>
		<div id="1F_PADJUNTAR_CONSTANCIA_DE_SITUACION_FISCAL">
		<?php
		if($F_PADJUNTAR_CONSTANCIA_DE_SITUACION_FISCAL!=""){echo "<a target='_blank' href='includes/archivos/".$F_PADJUNTAR_CONSTANCIA_DE_SITUACION_FISCAL."'>Visualizar!</a>"; 
		}?></div>
	</div>	
	</div>
	
<div class="col-md-6">
<strong><label for="formFileSm"  class="form-label"> ADJUNTAR OPINIÓN DE CUMPLIMIENTO (FORMATO PDF, JPG O PNG) </label></strong>
		<div id="drop_file_zone" ondrop="upload_file(event,'F_PADJUNTAR_OPINION_CUMPLIMIENTO')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="F_PADJUNTAR_OPINION_CUMPLIMIENTO" type="text" onkeydown="return false" onclick="file_explorer('F_PADJUNTAR_OPINION_CUMPLIMIENTO');" style="width:300px;" VALUE="<?php echo $F_PADJUNTAR_OPINION_CUMPLIMIENTO; ?>" required /></p>
		<input type="file" name="F_PADJUNTAR_OPINION_CUMPLIMIENTO" id="nono"/>
		<div id="1F_PADJUNTAR_OPINION_CUMPLIMIENTO">
		<?php
		if($F_PADJUNTAR_OPINION_CUMPLIMIENTO!=""){echo "<a target='_blank' href='includes/archivos/".$F_PADJUNTAR_OPINION_CUMPLIMIENTO."'>Visualizar!</a>"; 
		}?></div>
	</div>	
	</div>
	
<div class="col-md-6">
<strong><label for="formFileSm"  class="form-label">  ADJUNTAR RÉGIMEN FISCAL (FORMATO PDF, JPG O PNG) </label></strong>
		<div id="drop_file_zone" ondrop="upload_file(event,'F_PADJUNTAR_REGIMEN_FISCAL')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="F_PADJUNTAR_REGIMEN_FISCAL" type="text" onkeydown="return false" onclick="file_explorer('F_PADJUNTAR_REGIMEN_FISCAL');" style="width:300px;" VALUE="<?php echo $F_PADJUNTAR_REGIMEN_FISCAL; ?>" required /></p>
		<input type="file" name="F_PADJUNTAR_REGIMEN_FISCAL" id="nono"/>
		<div id="1F_PADJUNTAR_REGIMEN_FISCAL">
		<?php
		if($F_PADJUNTAR_REGIMEN_FISCAL!=""){echo "<a target='_blank' href='includes/archivos/".$F_PADJUNTAR_REGIMEN_FISCAL."'>Visualizar!</a>"; 
		}?></div>
	</div>	
	</div>
	
<div class="col-md-6">
<strong><label for="formFileSm"  class="form-label">ADJUNTAR COMPROBANTE DE DOMICILIO (FORMATO PDF, JPG O PNG)</label></strong>
		<div id="drop_file_zone" ondrop="upload_file(event,'F_PADJUNTAR_COMPROBANTE_DE_DOMICILIO')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="F_PADJUNTAR_COMPROBANTE_DE_DOMICILIO" type="text" onkeydown="return false" onclick="file_explorer('F_PADJUNTAR_COMPROBANTE_DE_DOMICILIO');" style="width:300px;" VALUE="<?php echo $F_PADJUNTAR_COMPROBANTE_DE_DOMICILIO; ?>" required /></p>
		<input type="file" name="F_PADJUNTAR_COMPROBANTE_DE_DOMICILIO" id="nono"/>
		<div id="1F_PADJUNTAR_COMPROBANTE_DE_DOMICILIO">
		<?php
		if($F_PADJUNTAR_COMPROBANTE_DE_DOMICILIO!=""){echo "<a target='_blank' href='includes/archivos/".$F_PADJUNTAR_COMPROBANTE_DE_DOMICILIO."'>Visualizar!</a>"; 
		}?></div>
	</div>	
	</div>
	
<div class="col-md-6">
<strong><label for="formFileSm"  class="form-label"> ADJUNTAR ESTADO DE CUENTA BANCARIO (FORMATO PDF, JPG O PNG)</label></strong>
		<div id="drop_file_zone" ondrop="upload_file(event,'F_PADJUNTAR_ESTADO_CUENTA_BANCARIO')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="F_PADJUNTAR_ESTADO_CUENTA_BANCARIO" type="text" onkeydown="return false" onclick="file_explorer('F_PADJUNTAR_ESTADO_CUENTA_BANCARIO');" style="width:300px;" VALUE="<?php echo $F_PADJUNTAR_ESTADO_CUENTA_BANCARIO; ?>" required /></p>
		<input type="file" name="F_PADJUNTAR_ESTADO_CUENTA_BANCARIO" id="nono"/>
		<div id="1F_PADJUNTAR_ESTADO_CUENTA_BANCARIO">
		<?php
		if($F_PADJUNTAR_ESTADO_CUENTA_BANCARIO!=""){echo "<a target='_blank' href='includes/archivos/".$F_PADJUNTAR_ESTADO_CUENTA_BANCARIO."'>Visualizar!</a>"; 
		}?></div>
	</div>	
	</div>
	
<div class="col-md-6">
<strong><label for="formFileSm"  class="form-label">  ADJUNTAR ACTA CONSTITUTIVA: SIENDO PERSONA MORAL (FORMATO PDF, JPG O PNG)</label></strong>
		<div id="drop_file_zone" ondrop="upload_file(event,'F_PADJUNTAR_ACTA_CONSTITUTIVA')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="F_PADJUNTAR_ACTA_CONSTITUTIVA" type="text" onkeydown="return false" onclick="file_explorer('F_PADJUNTAR_ACTA_CONSTITUTIVA');" style="width:300px;" VALUE="<?php echo $F_PADJUNTAR_ACTA_CONSTITUTIVA; ?>" required /></p>
		<input type="file" name="F_PADJUNTAR_ACTA_CONSTITUTIVA" id="nono"/>
		<div id="1F_PADJUNTAR_ACTA_CONSTITUTIVA">
		<?php
		if($F_PADJUNTAR_ACTA_CONSTITUTIVA!=""){echo "<a target='_blank' href='includes/archivos/".$F_PADJUNTAR_ACTA_CONSTITUTIVA."'>Visualizar!</a>"; 
		}?></div>
	</div>	
	</div>
	
<div class="col-md-6">
<strong><label for="formFileSm"  class="form-label"> ADJUNTAR PODER NOTARIAL DEL REPRESENTANTE LEGAL (FORMATO PDF, JPG O PNG)</label></strong>
		<div id="drop_file_zone" ondrop="upload_file(event,'F_PADJUNTAR_PODER_NOTARIAL_REPRESENTANTE_LEGAL')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="F_PADJUNTAR_PODER_NOTARIAL_REPRESENTANTE_LEGAL" type="text" onkeydown="return false" onclick="file_explorer('F_PADJUNTAR_PODER_NOTARIAL_REPRESENTANTE_LEGAL');" style="width:300px;" VALUE="<?php echo $F_PADJUNTAR_PODER_NOTARIAL_REPRESENTANTE_LEGAL; ?>" required /></p>
		<input type="file" name="F_PADJUNTAR_PODER_NOTARIAL_REPRESENTANTE_LEGAL" id="nono"/>
		<div id="1F_PADJUNTAR_PODER_NOTARIAL_REPRESENTANTE_LEGAL">
		<?php
		if($F_PADJUNTAR_PODER_NOTARIAL_REPRESENTANTE_LEGAL!=""){echo "<a target='_blank' href='includes/archivos/".$F_PADJUNTAR_PODER_NOTARIAL_REPRESENTANTE_LEGAL."'>Visualizar!</a>"; 
		}?></div>
	</div>	
	</div>
	
<div class="col-md-6">
<strong><label for="formFileSm"  class="form-label"> ADJUNTAR IDENTIFICACIÓN OFICIAL DEL REPRESENTANTE LEGAL (FORMATO PDF, JPG O PNG)</label></strong>
		<div id="drop_file_zone" ondrop="upload_file(event,'F_PADJUNTAR_IDENTIFICACION_REPRESENTANTE_LEGAL')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="F_PADJUNTAR_IDENTIFICACION_REPRESENTANTE_LEGAL" type="text" onkeydown="return false" onclick="file_explorer('F_PADJUNTAR_IDENTIFICACION_REPRESENTANTE_LEGAL');" style="width:300px;" VALUE="<?php echo $F_PADJUNTAR_IDENTIFICACION_REPRESENTANTE_LEGAL; ?>" required /></p>
		<input type="file" name="F_PADJUNTAR_IDENTIFICACION_REPRESENTANTE_LEGAL" id="nono"/>
		<div id="1F_PADJUNTAR_IDENTIFICACION_REPRESENTANTE_LEGAL">
		<?php
		if($F_PADJUNTAR_IDENTIFICACION_REPRESENTANTE_LEGAL!=""){echo "<a target='_blank' href='includes/archivos/".$F_PADJUNTAR_IDENTIFICACION_REPRESENTANTE_LEGAL."'>Visualizar!</a>"; 
		}?></div>
	</div>	
	</div>
                          
	<div style="float:left;"border="solid 1px #000;">
	<button class="btn btn-sm btn-outline-success px-5"  id="enviarDATOSPROVEEDORES" type="button">GUARDAR</button>
	</div>
                         

	</div>
                            
 
 
                         </form>   
						 
                          </div>
						   </div>
						 </div>
						 