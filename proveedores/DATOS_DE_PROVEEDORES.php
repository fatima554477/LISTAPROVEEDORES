<div id="content">     
			<hr/>
			<strong>  <p class="mb-0 text-uppercase">
<img src="includes/contraer31.png" id="mostrar5" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar5" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;DOCUMENTOS LEGALES DEL PROVEEDOR</p><div  id="mensajeDATOSPROVEEDORES"><div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $datosproveedoresadjuntos; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $datosproveedoresadjuntos; ?>%</div>
								</div></div></strong>
	        <div id="target5" style="display:block;"  class="content2">
        <div class="card">
          <div class="card-body">
	<form class="row g-3 needs-validation was-validated" novalidate="" id="DATOSPROVEEDORESform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
 
              <table class="table mb-0 table-striped">

                <tr>
            
                <th style="text-align:center" scope="col">DOCUMENTOS LEGALES DEL PROVEEDOR</th>
                 </tr>
                </table>
          
             <div class="col-md-6">
	<strong>	<label for="formFileSm" class="form-label"> DESCARGAR CONTRATO PARA LLENADO DE PROVEEDORES (FORMATO PDF, JPG O PNG):</label></strong>
		<div id="drop_file_zone" ondrop="upload_file(event,'F_PDESCARGAR_CONTRATO_PROVEEDORES')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="F_PDESCARGAR_CONTRATO_PROVEEDORES" type="text" onkeydown="return false" onclick="file_explorer('F_PDESCARGAR_CONTRATO_PROVEEDORES');" style="width:300px;" VALUE="<?php echo $F_PDESCARGAR_CONTRATO_PROVEEDORES; ?>" required /></p>
		<input type="file" name="F_PDESCARGAR_CONTRATO_PROVEEDORES" id="nono"/>
		<div id="1F_PDESCARGAR_CONTRATO_PROVEEDORES">
		<?php
		if($F_PDESCARGAR_CONTRATO_PROVEEDORES!=""){echo "<a target='_blank' href='includes/archivos/".$F_PDESCARGAR_CONTRATO_PROVEEDORES."'>Visualizar!</a>"; 
		}?></div><br><input  class="form-check-input"  type="checkbox" style="width:7%" name="F_PDESCARGAR_CONTRATO_PROVEEDORES_1" id="F_PDESCARGAR_CONTRATO_PROVEEDORES_1"  >&nbsp;&nbsp;ENVIAR POR IMAIL	</div>	
	</div>


  <div class="col-md-6">
	<strong>	<label for="formFileSm" class="form-label"> ADJUNTAR CONTRATO FIRMADO (FORMATO PDF, JPG O PNG):</label></strong>
		<div id="drop_file_zone" ondrop="upload_file(event,'F_PADJUNTAR_CONTRATO_FIRMADO')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="F_PADJUNTAR_CONTRATO_FIRMADO" type="text" onkeydown="return false" onclick="file_explorer('F_PADJUNTAR_CONTRATO_FIRMADO');" style="width:300px;" VALUE="<?php echo $F_PADJUNTAR_CONTRATO_FIRMADO; ?>" required /></p>
		<input type="file" name="F_PADJUNTAR_CONTRATO_FIRMADO" id="nono"/>
		<div id="1F_PADJUNTAR_CONTRATO_FIRMADO">
		<?php
		if($F_PADJUNTAR_CONTRATO_FIRMADO!=""){echo "<a target='_blank' href='includes/archivos/".$F_PADJUNTAR_CONTRATO_FIRMADO."'>Visualizar!</a>"; 
		}?></div><br><input  class="form-check-input"  type="checkbox" style="width:7%" name="F_PADJUNTAR_CONTRATO_FIRMADO_1" id="F_PADJUNTAR_CONTRATO_FIRMADO_1"  >&nbsp;&nbsp;ENVIAR POR IMAIL	</div>
		
	</div>


  <div class="col-md-6">
	<strong>	<label for="formFileSm" class="form-label"> <strong><label for="formFileSm"  class="form-label"> ADJUNTAR CONTRATO FIRMADO (FORMATO PDF, JPG O PNG)</label></strong></label></strong>
		<div id="drop_file_zone" ondrop="upload_file(event,'F_PADJUNTAR_CONTRATO_FIRMADO_2')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="F_PADJUNTAR_CONTRATO_FIRMADO_2" type="text" onkeydown="return false" onclick="file_explorer('F_PADJUNTAR_CONTRATO_FIRMADO_2');" style="width:300px;" VALUE="<?php echo $F_PADJUNTAR_CONTRATO_FIRMADO_2; ?>" required /></p>
		<input type="file" name="F_PADJUNTAR_CONTRATO_FIRMADO_2" id="nono"/>
		<div id="1F_PADJUNTAR_CONTRATO_FIRMADO_2">
		<?php
		if($F_PADJUNTAR_CONTRATO_FIRMADO_2!=""){echo "<a target='_blank' href='includes/archivos/".$F_PADJUNTAR_CONTRATO_FIRMADO_2."'>Visualizar!</a>"; 
		}?></div><br><input  class="form-check-input"  type="checkbox" style="width:7%" name="F_PADJUNTAR_CONTRATO_FIRMADO_2_1"   id="F_PADJUNTAR_CONTRATO_FIRMADO_2_1" >&nbsp;&nbsp;ENVIAR POR IMAIL </div>
		
	</div>


  <div class="col-md-6">
	<strong>	<label for="formFileSm" class="form-label">ADJUNTAR CONVENIOS (FORMATO PDF, JPG O PNG)</label></strong>
		<div id="drop_file_zone" ondrop="upload_file(event,'F_PADJUNTAR_CONVENIOS')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="F_PADJUNTAR_CONVENIOS" type="text" onkeydown="return false" onclick="file_explorer('F_PADJUNTAR_CONVENIOS');" style="width:300px;" VALUE="<?php echo $F_PADJUNTAR_CONVENIOS; ?>" required /></p>
		<input type="file" name="F_PADJUNTAR_CONVENIOS" id="nono"/>
		<div id="1F_PADJUNTAR_CONVENIOS">
		<?php
		if($F_PADJUNTAR_CONVENIOS!=""){echo "<a target='_blank' href='includes/archivos/".$F_PADJUNTAR_CONVENIOS."'>Visualizar!</a>"; 
		}?></div><br><input  class="form-check-input"  type="checkbox" style="width:7%" name="F_PADJUNTAR_CONVENIOS_1"  id="F_PADJUNTAR_CONVENIOS_1" >&nbsp;&nbsp;ENVIAR POR IMAIL</div> 
		
	</div>


  <div class="col-md-6">
	<strong>	<label for="formFileSm" class="form-label"> CONTRATO PARA LLENADO DE CLIENTES:</label></strong>
		<div id="drop_file_zone" ondrop="upload_file(event,'ADJUNTAR_CONTRATO_INFORMACION')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="ADJUNTAR_CONTRATO_INFORMACION" type="text" onkeydown="return false" onclick="file_explorer('ADJUNTAR_CONTRATO_INFORMACION');" style="width:300px;" VALUE="<?php echo $ADJUNTAR_CONTRATO_INFORMACION; ?>" required /></p>
		<input type="file" name="ADJUNTAR_CONTRATO_INFORMACION" id="nono"/>
		<div id="1ADJUNTAR_CONTRATO_INFORMACION">
		<?php
		if($ADJUNTAR_CONTRATO_INFORMACION!=""){echo "<a target='_blank' href='includes/archivos/".$ADJUNTAR_CONTRATO_INFORMACION."'>Visualizar!</a>"; 
		}?></div><br><input  class="form-check-input"  type="checkbox" style="width:7%" name="ADJUNTAR_CONTRATO_INFORMACION_1"  id="ADJUNTAR_CONTRATO_INFORMACION_1" >&nbsp;&nbsp;ENVIAR POR IMAIL</div> 
	
	</div>  



  <div class="col-md-6">
	<strong>	<label for="formFileSm" class="form-label">ADJUNTAR CONSTANCIA DE SITUACIÓN FISCAL (FORMATO PDF, JPG O PNG)DESCARGAR CONTRATO PARA LLENADO DE PROVEEDORES:</label></strong>
		<div id="drop_file_zone" ondrop="upload_file(event,'F_PADJUNTAR_CONSTANCIA_DE_SITUACION_FISCAL')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="F_PADJUNTAR_CONSTANCIA_DE_SITUACION_FISCAL" type="text" onkeydown="return false" onclick="file_explorer('F_PADJUNTAR_CONSTANCIA_DE_SITUACION_FISCAL');" style="width:300px;" VALUE="<?php echo $F_PADJUNTAR_CONSTANCIA_DE_SITUACION_FISCAL; ?>" required /></p>
		<input type="file" name="F_PADJUNTAR_CONSTANCIA_DE_SITUACION_FISCAL" id="nono"/>
		<div id="1F_PADJUNTAR_CONSTANCIA_DE_SITUACION_FISCAL">
		<?php
		if($F_PADJUNTAR_CONSTANCIA_DE_SITUACION_FISCAL!=""){echo "<a target='_blank' href='includes/archivos/".$ADJUNTAR_CONTPROV_INFORMACION."'>Visualizar!</a>"; 
		}?></div><br><input  class="form-check-input"  type="checkbox" style="width:7%" name="F_PADJUNTAR_CONSTANCIA_DE_SITUACION_FISCAL_1"  id="F_PADJUNTAR_CONSTANCIA_DE_SITUACION_FISCAL_1" >&nbsp;&nbsp;ENVIAR POR IMAIL</div>
	
	</div>  



  <div class="col-md-6">
	<strong>	<label for="formFileSm" class="form-label">ADJUNTAR OPINIÓN DE CUMPLIMIENTO (FORMATO PDF, JPG O PNG)</label></strong>
		<div id="drop_file_zone" ondrop="upload_file(event,'F_PADJUNTAR_OPINION_CUMPLIMIENTO')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="F_PADJUNTAR_OPINION_CUMPLIMIENTO" type="text" onkeydown="return false" onclick="file_explorer('F_PADJUNTAR_OPINION_CUMPLIMIENTO');" style="width:300px;" VALUE="<?php echo $F_PADJUNTAR_OPINION_CUMPLIMIENTO; ?>" required /></p>
		<input type="file" name="F_PADJUNTAR_OPINION_CUMPLIMIENTO" id="nono"/>
		<div id="1F_PADJUNTAR_OPINION_CUMPLIMIENTO">
		<?php
		if($F_PADJUNTAR_OPINION_CUMPLIMIENTO!=""){echo "<a target='_blank' href='includes/archivos/".$F_PADJUNTAR_OPINION_CUMPLIMIENTO."'>Visualizar!</a>"; 
		}?></div><br><input  class="form-check-input"  type="checkbox" style="width:7%" name="F_PADJUNTAR_OPINION_CUMPLIMIENTO_1"  id="F_PADJUNTAR_OPINION_CUMPLIMIENTO_1" >&nbsp;&nbsp;ENVIAR POR IMAIL</div>
	
	</div>   


  <div class="col-md-6">
	<strong>	<label for="formFileSm" class="form-label"> ADJUNTAR RÉGIMEN FISCAL (FORMATO PDF, JPG O PNG)</label></strong>
		<div id="drop_file_zone" ondrop="upload_file(event,'F_PADJUNTAR_REGIMEN_FISCAL')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="F_PADJUNTAR_REGIMEN_FISCAL" type="text" onkeydown="return false" onclick="file_explorer('F_PADJUNTAR_REGIMEN_FISCAL');" style="width:300px;" VALUE="<?php echo $F_PADJUNTAR_REGIMEN_FISCAL; ?>" required /></p>
		<input type="file" name="F_PADJUNTAR_REGIMEN_FISCAL" id="nono"/>
		<div id="1F_PADJUNTAR_REGIMEN_FISCAL">
		<?php
		if($F_PADJUNTAR_REGIMEN_FISCAL!=""){echo "<a target='_blank' href='includes/archivos/".$F_PADJUNTAR_REGIMEN_FISCAL."'>Visualizar!</a>"; 
		}?></div><br><input  class="form-check-input"  type="checkbox" style="width:7%" name="F_PADJUNTAR_REGIMEN_FISCAL_1" id="F_PADJUNTAR_REGIMEN_FISCAL_1"  >&nbsp;&nbsp;ENVIAR POR IMAIL</div>
	
	</div> 




  <div class="col-md-6">
	<strong>	<label for="formFileSm" class="form-label">ADJUNTAR COMPROBANTE DE DOMICILIO (FORMATO PDF, JPG O PNG)</label></strong>
		<div id="drop_file_zone" ondrop="upload_file(event,'F_PADJUNTAR_COMPROBANTE_DE_DOMICILIO')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="F_PADJUNTAR_COMPROBANTE_DE_DOMICILIO" type="text" onkeydown="return false" onclick="file_explorer('F_PADJUNTAR_COMPROBANTE_DE_DOMICILIO');" style="width:300px;" VALUE="<?php echo $F_PADJUNTAR_COMPROBANTE_DE_DOMICILIO; ?>" required /></p>
		<input type="file" name="F_PADJUNTAR_COMPROBANTE_DE_DOMICILIO" id="nono"/>
		<div id="1F_PADJUNTAR_COMPROBANTE_DE_DOMICILIO">
		<?php
		if($F_PADJUNTAR_COMPROBANTE_DE_DOMICILIO!=""){echo "<a target='_blank' href='includes/archivos/".$ADJUNTAR_OPINION_INFORMACION."'>Visualizar!</a>"; 
		}?></div><br><input  class="form-check-input"  type="checkbox" style="width:7%" name="F_PADJUNTAR_COMPROBANTE_DE_DOMICILIO_1" id="F_PADJUNTAR_COMPROBANTE_DE_DOMICILIO_1"  >&nbsp;&nbsp;ENVIAR POR IMAIL</div> 
		
	</div> 


  <div class="col-md-6">
	<strong>	<label for="formFileSm" class="form-label">ADJUNTAR ESTADO DE CUENTA BANCARIO (FORMATO PDF, JPG O PNG)</label></strong>
		<div id="drop_file_zone" ondrop="upload_file(event,'F_PADJUNTAR_ESTADO_CUENTA_BANCARIO')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="F_PADJUNTAR_ESTADO_CUENTA_BANCARIO" type="text" onkeydown="return false" onclick="file_explorer('F_PADJUNTAR_ESTADO_CUENTA_BANCARIO');" style="width:300px;" VALUE="<?php echo $F_PADJUNTAR_ESTADO_CUENTA_BANCARIO; ?>" required /></p>
		<input type="file" name="F_PADJUNTAR_ESTADO_CUENTA_BANCARIO" id="nono"/>
		<div id="1F_PADJUNTAR_ESTADO_CUENTA_BANCARIO">
		<?php
		if($F_PADJUNTAR_ESTADO_CUENTA_BANCARIO!=""){echo "<a target='_blank' href='includes/archivos/".$F_PADJUNTAR_ESTADO_CUENTA_BANCARIO."'>Visualizar!</a>"; 
		}?></div><br><input  class="form-check-input"  type="checkbox" style="width:7%" name="F_PADJUNTAR_ESTADO_CUENTA_BANCARIO_1"  id="F_PADJUNTAR_ESTADO_CUENTA_BANCARIO_1"  >&nbsp;&nbsp;ENVIAR POR IMAIL</div> 
		
	</div>
               
                <div class="col-md-6">
	<strong>	<label for="formFileSm" class="form-label">ADJUNTAR ACTA CONSTITUTIVA: SIENDO PERSONA MORAL (FORMATO PDF, JPG O PNG)</label></strong>
		<div id="drop_file_zone" ondrop="upload_file(event,'F_PADJUNTAR_ACTA_CONSTITUTIVA')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="F_PADJUNTAR_ACTA_CONSTITUTIVA" type="text" onkeydown="return false" onclick="file_explorer('F_PADJUNTAR_ACTA_CONSTITUTIVA');" style="width:300px;" VALUE="<?php echo $F_PADJUNTAR_ACTA_CONSTITUTIVA; ?>" required /></p>
		<input type="file" name="F_PADJUNTAR_ACTA_CONSTITUTIVA" id="nono"/>
		<div id="1F_PADJUNTAR_ACTA_CONSTITUTIVA">
		<?php
		if($F_PADJUNTAR_ACTA_CONSTITUTIVA!=""){echo "<a target='_blank' href='includes/archivos/".$F_PADJUNTAR_ACTA_CONSTITUTIVA."'>Visualizar!</a>"; 
		}?></div><br><input  class="form-check-input"  type="checkbox" style="width:7%" name="F_PADJUNTAR_ACTA_CONSTITUTIVA_1" id="F_PADJUNTAR_ACTA_CONSTITUTIVA_1"  >&nbsp;&nbsp;ENVIAR POR IMAIL</div>
		
	</div>        
    
    
  <div class="col-md-6">
	<strong>	<label for="formFileSm" class="form-label">ADJUNTAR PODER NOTARIAL DEL REPRESENTANTE LEGAL (FORMATO PDF, JPG O PNG)</label></strong>
		<div id="drop_file_zone" ondrop="upload_file(event,'F_PADJUNTAR_PODER_NOTARIAL_REPRESENTANTE_LEGAL')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="F_PADJUNTAR_PODER_NOTARIAL_REPRESENTANTE_LEGAL" type="text" onkeydown="return false" onclick="file_explorer('F_PADJUNTAR_PODER_NOTARIAL_REPRESENTANTE_LEGAL');" style="width:300px;" VALUE="<?php echo $F_PADJUNTAR_PODER_NOTARIAL_REPRESENTANTE_LEGAL; ?>" required /></p>
		<input type="file" name="F_PADJUNTAR_PODER_NOTARIAL_REPRESENTANTE_LEGAL" id="nono"/>
		<div id="1F_PADJUNTAR_PODER_NOTARIAL_REPRESENTANTE_LEGAL">
		<?php
		if($F_PADJUNTAR_PODER_NOTARIAL_REPRESENTANTE_LEGAL!=""){echo "<a target='_blank' href='includes/archivos/".$F_PADJUNTAR_PODER_NOTARIAL_REPRESENTANTE_LEGAL."'>Visualizar!</a>"; 
		}?></div><br><input  class="form-check-input"  type="checkbox" style="width:7%" name="F_PADJUNTAR_PODER_NOTARIAL_REPRESENTANTE_LEGAL_1"  id="F_PADJUNTAR_PODER_NOTARIAL_REPRESENTANTE_LEGAL_1"  >&nbsp;&nbsp;ENVIAR POR IMAIL</div> 
		
	</div>          



  <div class="col-md-6">
	<strong>	<label for="formFileSm" class="form-label">ADJUNTAR IDENTIFICACIÓN OFICIAL DEL REPRESENTANTE LEGAL (FORMATO PDF, JPG O PNG)</label></strong>
		<div id="drop_file_zone" ondrop="upload_file(event,'F_PADJUNTAR_IDENTIFICACION_REPRESENTANTE_LEGAL')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="F_PADJUNTAR_IDENTIFICACION_REPRESENTANTE_LEGAL" type="text" onkeydown="return false" onclick="file_explorer('F_PADJUNTAR_IDENTIFICACION_REPRESENTANTE_LEGAL');" style="width:300px;" VALUE="<?php echo $F_PADJUNTAR_IDENTIFICACION_REPRESENTANTE_LEGAL; ?>" required /></p>
		<input type="file" name="F_PADJUNTAR_IDENTIFICACION_REPRESENTANTE_LEGAL" id="nono"/>
		<div id="1F_PADJUNTAR_IDENTIFICACION_REPRESENTANTE_LEGAL">
		<?php
		if($F_PADJUNTAR_IDENTIFICACION_REPRESENTANTE_LEGAL!=""){echo "<a target='_blank' href='includes/archivos/".$F_PADJUNTAR_IDENTIFICACION_REPRESENTANTE_LEGAL."'>Visualizar!</a>"; 
		}?></div><br><input  class="form-check-input"  type="checkbox" style="width:7%" name="F_PADJUNTAR_IDENTIFICACION_REPRESENTANTE_LEGAL_1" id="F_PADJUNTAR_IDENTIFICACION_REPRESENTANTE_LEGAL_1"  >&nbsp;&nbsp;ENVIAR POR IMAIL</div>
		
	</div>  
    </table>
           <table><tr>
           <th style="text-align:center;background:#faebee;" scope="col">FECHA DE ÚLTIMA CARGA</th>   
           <td  style="background:#faebee">
           <strong>
           <?php echo date('Y-m-d'); ?>
           </strong>
           <input type="hidden" style="width:200px;"  class="form-control" id="validationCustom03"   value="<?php echo date('Y-m-d'); ?>" name="ADJUNTAR_LOGO_FECHA_ULTIMA_CARGA">
           
           </td>
           </tr>
          </table>  
            
    <input type="hidden" value="DATOS_PROVEEDORES" name="DATOS_PROVEEDORES"/>     
 
    <table>
  <tr>       
<th>
          <button class="btn btn-sm btn-outline-success px-5"   type="button" id="guardarinformacionfiscal">GUARDAR</button></th>
	</tr></table>   
	        <table><tr>
            <td style="width: 500px"><textarea  style="float:right" placeholder="ESCRIBE AQUÍ TUS CORREOS SEPARADOS POR PUNTO Y COMA EJEMPLO: NOMBRE@CORREO.ES;NOMBRE@CORREO.ES"  name="DATOSPROVEE_ENVIAR_IMAIL" id="DATOSPROVEE_ENVIAR_IMAIL" class="form-control" aria-label="With textarea"><?php echo $DATOSPROVEE_ENVIAR_IMAIL; ?></textarea></td>
             <td>  <button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviari_email_datosprovee">ENVIAR POR EMAIL</button></td>   
         
          </tr>
            </table>
  </form>
     
                         </div>
	</div></div></div>






