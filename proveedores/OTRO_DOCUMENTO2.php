<div id="content">     
			<hr/>
		<strong>	  <p class="mb-0 text-uppercase" ><img src="includes/contraer51.png" id="mostrar6" style="cursor:pointer;"/>
<img src="includes/contraer61.png" id="ocultar6" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;ADJUNTAR OTROS DOCUMENTOS O IMÁGENES</p></strong></div>
<div id="mensajeOTRODOCUMENTO">
<div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $datosOTROSDOCUMENTOS ; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $datosOTROSDOCUMENTOS ; ?>%</div></div></div>
													                  
						
                            
	        <div id="target6" style="display:block;" class="content2">
        <div class="card">
          <div class="card-body">
		  
	<form class="row g-3 needs-validation was-validated" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" novalidate="" enctype="multipart/form-data" id="OTRODOCUMENTOform">
	
	

	
	<input type="hidden" name="validaOTROSDOCUMENTOS" value="validaOTROSDOCUMENTOS" />
	
	
<div class="col-md-6">
	<strong><label for="formFileSm"  class="form-label"> ADJUNTAR OTRO DOCUMENTO: (FORMATO PDF, JPG O PNG)</label></strong><input type="text" style="width: 250px;" placeholder="nombre del documento o imágen" name="F_PADJUNTAR_OTRO_DOCUMENTO_4_1"  value="<?php echo $F_PADJUNTAR_OTRO_DOCUMENTO_4_1 ?>">
		<div id="drop_file_zone" ondrop="upload_file(event,'F_PADJUNTAR_OTRO_DOCUMENTO_4')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="F_PADJUNTAR_OTRO_DOCUMENTO_4" type="text" onkeydown="return false" onclick="file_explorer('F_PADJUNTAR_OTRO_DOCUMENTO_4');" style="width:300px;" VALUE="<?php echo $F_PADJUNTAR_OTRO_DOCUMENTO_4; ?>" required /></p>
		<input type="file" name="F_PADJUNTAR_OTRO_DOCUMENTO_4" id="nono"/>
		<div id="1F_PADJUNTAR_OTRO_DOCUMENTO_4">
		<?php
		if($F_PADJUNTAR_OTRO_DOCUMENTO_4!=""){echo "<a target='_blank' href='includes/archivos/".$F_PADJUNTAR_OTRO_DOCUMENTO_4."'>Visualizar!</a>"; 
		}?></div>
	</div>	
	</div>
	
<div class="col-md-6">
	<strong><label for="formFileSm"  class="form-label">ADJUNTAR OTRO DOCUMENTO: (FORMATO PDF, JPG O PNG)</label></strong><input type="text" style="width: 250px;" placeholder="nombre del documento o imágen" name="F_PADJUNTAR_OTRO_DOCUMENTO_5_1" value="<?php echo $F_PADJUNTAR_OTRO_DOCUMENTO_5_1 ?>">
		<div id="drop_file_zone" ondrop="upload_file(event,'F_PADJUNTAR_OTRO_DOCUMENTO_5')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="F_PADJUNTAR_OTRO_DOCUMENTO_5" type="text" onkeydown="return false" onclick="file_explorer('F_PADJUNTAR_OTRO_DOCUMENTO_5');" style="width:300px;" VALUE="<?php echo $F_PADJUNTAR_OTRO_DOCUMENTO_5; ?>" required /></p>
		<input type="file" name="F_PADJUNTAR_OTRO_DOCUMENTO_5" id="nono"/>
		<div id="1F_PADJUNTAR_OTRO_DOCUMENTO_5">
		<?php
		if($F_PADJUNTAR_OTRO_DOCUMENTO_5!=""){echo "<a target='_blank' href='includes/archivos/".$F_PADJUNTAR_OTRO_DOCUMENTO_5."'>Visualizar!</a>"; 
		}?></div>
	</div>	
	</div>
		
		
		
	
						
<div class="col-md-6">
	<strong><label for="formFileSm"  class="form-label">ADJUNTAR OTRO DOCUMENTO: (FORMATO PDF, JPG O PNG)</label></strong><input type="text" style="width: 250px;" placeholder="nombre del documento o imágen"name="F_PADJUNTAR_OTRO_DOCUMENTO_6_1" value="<?php echo $F_PADJUNTAR_OTRO_DOCUMENTO_6_1 ?>">
		<div id="drop_file_zone" ondrop="upload_file(event,'F_PADJUNTAR_OTRO_DOCUMENTO_6')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="F_PADJUNTAR_OTRO_DOCUMENTO_6" type="text" onkeydown="return false" onclick="file_explorer('F_PADJUNTAR_OTRO_DOCUMENTO_6');" style="width:300px;" VALUE="<?php echo $F_PADJUNTAR_OTRO_DOCUMENTO_6; ?>" required /></p>
		<input type="file" name="F_PADJUNTAR_OTRO_DOCUMENTO_6" id="nono"/>
		<div id="1F_PADJUNTAR_OTRO_DOCUMENTO_6">
		<?php
		if($F_PADJUNTAR_OTRO_DOCUMENTO_6!=""){echo "<a target='_blank' href='includes/archivos/".$F_PADJUNTAR_OTRO_DOCUMENTO_6."'>Visualizar!</a>"; 
		}?></div>
	</div>	
	</div>
	

	

    <div class="col-md-6">
	<strong><label for="formFileSm"  class="form-label"> ADJUNTAR OTRO DOCUMENTO: (FORMATO PDF, JPG O PNG)</label></strong><input type="text" style="width: 250px;" placeholder="nombre del documento o imágen" name="F_PADJUNTAR_OTRO_DOCUMENTO_7_1" value="<?php echo $F_PADJUNTAR_OTRO_DOCUMENTO_7_1 ?>">
		<div id="drop_file_zone" ondrop="upload_file(event,'F_PADJUNTAR_OTRO_DOCUMENTO_7')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="F_PADJUNTAR_OTRO_DOCUMENTO_7" type="text" onkeydown="return false" onclick="file_explorer('F_PADJUNTAR_OTRO_DOCUMENTO_7');" style="width:300px;" VALUE="<?php echo $F_PADJUNTAR_OTRO_DOCUMENTO_7; ?>" required /></p>
		<input type="file" name="F_PADJUNTAR_OTRO_DOCUMENTO_7" id="nono"/>
		<div id="1F_PADJUNTAR_OTRO_DOCUMENTO_7">
		<?php
		if($F_PADJUNTAR_OTRO_DOCUMENTO_7!=""){echo "<a target='_blank' href='includes/archivos/".$F_PADJUNTAR_OTRO_DOCUMENTO_7."'>Visualizar!</a>"; 
		}?></div>
	</div>	
	</div>
	
<div class="col-md-6">
	<strong><label for="formFileSm"  class="form-label">ADJUNTAR OTRO DOCUMENTO: (FORMATO PDF, JPG O PNG)</label></strong><input type="text" style="width: 250px;" placeholder="nombre del documento o imágen" name="F_PADJUNTAR_OTRO_DOCUMENTO_8_1" value="<?php echo $F_PADJUNTAR_OTRO_DOCUMENTO_8_1 ?>">
		<div id="drop_file_zone" ondrop="upload_file(event,'F_PADJUNTAR_OTRO_DOCUMENTO_8')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="F_PADJUNTAR_OTRO_DOCUMENTO_7" type="text" onkeydown="return false" onclick="file_explorer('F_PADJUNTAR_OTRO_DOCUMENTO_8');" style="width:300px;" VALUE="<?php echo $F_PADJUNTAR_OTRO_DOCUMENTO_8; ?>" required /></p>
		<input type="file" name="F_PADJUNTAR_OTRO_DOCUMENTO_8" id="nono"/>
		<div id="1F_PADJUNTAR_OTRO_DOCUMENTO_8">
		<?php
		if($F_PADJUNTAR_OTRO_DOCUMENTO_8!=""){echo "<a target='_blank' href='includes/archivos/".$F_PADJUNTAR_OTRO_DOCUMENTO_8."'>Visualizar!</a>"; 
		}?></div>
	</div>	
	</div>
	
<div class="col-md-6">
	<strong><label for="formFileSm"  class="form-label"> ADJUNTAR OTRO DOCUMENTO: (FORMATO PDF, JPG O PNG)</label></strong><input type="text" style="width: 250px;" placeholder="nombre del documento o imágen" name="F_PADJUNTAR_OTRO_DOCUMENTO_9_1" value="<?php echo $F_PADJUNTAR_OTRO_DOCUMENTO_9_1 ?>">
		<div id="drop_file_zone" ondrop="upload_file(event,'F_PADJUNTAR_OTRO_DOCUMENTO_9')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="F_PADJUNTAR_OTRO_DOCUMENTO_9" type="text" onkeydown="return false" onclick="file_explorer('F_PADJUNTAR_OTRO_DOCUMENTO_9');" style="width:300px;" VALUE="<?php echo $F_PADJUNTAR_OTRO_DOCUMENTO_9; ?>" required /></p>
		<input type="file" name="F_PADJUNTAR_OTRO_DOCUMENTO_9" id="nono"/>
		<div id="1F_PADJUNTAR_OTRO_DOCUMENTO_9">
		<?php
		if($F_PADJUNTAR_OTRO_DOCUMENTO_9!=""){echo "<a target='_blank' href='includes/archivos/".$F_PADJUNTAR_OTRO_DOCUMENTO_9."'>Visualizar!</a>"; 
		}?></div>
	</div>	
	</div>
        

    <div class="col-md-6">
	<strong><label for="formFileSm"  class="form-label"> ADJUNTAR OTRO DOCUMENTO: (FORMATO PDF, JPG O PNG)</label></strong><input type="text" style="width: 250px;" placeholder="nombre del documento o imágen" name="F_PADJUNTAR_OTRO_DOCUMENTO_10_1" value="<?php echo $F_PADJUNTAR_OTRO_DOCUMENTO_10_1 ?>">
		<div id="drop_file_zone" ondrop="upload_file(event,'F_PADJUNTAR_OTRO_DOCUMENTO_10')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="F_PADJUNTAR_OTRO_DOCUMENTO_10" type="text" onkeydown="return false" onclick="file_explorer('F_PADJUNTAR_OTRO_DOCUMENTO_10');" style="width:300px;" VALUE="<?php echo $F_PADJUNTAR_OTRO_DOCUMENTO_10; ?>" required /></p>
		<input type="file" name="F_PADJUNTAR_OTRO_DOCUMENTO_10" id="nono"/>
		<div id="1F_PADJUNTAR_OTRO_DOCUMENTO_10">
		<?php
		if($F_PADJUNTAR_OTRO_DOCUMENTO_10!=""){echo "<a target='_blank' href='includes/archivos/".$F_PADJUNTAR_OTRO_DOCUMENTO_10."'>Visualizar!</a>"; 
		}?></div>
	</div>	
	</div>
	
<div class="col-md-6">
	<strong><label for="formFileSm"  class="form-label">ADJUNTAR OTRO DOCUMENTO: (FORMATO PDF, JPG O PNG)</label></strong><input type="text" style="width: 250px;" placeholder="nombre del documento o imágen" name="F_PADJUNTAR_OTRO_DOCUMENTO_11_1" value="<?php echo $F_PADJUNTAR_OTRO_DOCUMENTO_11_1 ?>">
		<div id="drop_file_zone" ondrop="upload_file(event,'F_PADJUNTAR_OTRO_DOCUMENTO_11')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="F_PADJUNTAR_OTRO_DOCUMENTO_11" type="text" onkeydown="return false" onclick="file_explorer('F_PADJUNTAR_OTRO_DOCUMENTO_11');" style="width:300px;" VALUE="<?php echo $F_PADJUNTAR_OTRO_DOCUMENTO_11; ?>" required /></p>
		<input type="file" name="F_PADJUNTAR_OTRO_DOCUMENTO_11" id="nono"/>
		<div id="1F_PADJUNTAR_OTRO_DOCUMENTO_11">
		<?php
		if($F_PADJUNTAR_OTRO_DOCUMENTO_11!=""){echo "<a target='_blank' href='includes/archivos/".$F_PADJUNTAR_OTRO_DOCUMENTO_11."'>Visualizar!</a>"; 
		}?></div>
	</div>	
	</div>
	
<div class="col-md-6">
	<strong><label for="formFileSm"  class="form-label"> ADJUNTAR OTRO DOCUMENTO: (FORMATO PDF, JPG O PNG)</label></strong><input type="text" style="width: 250px;" placeholder="nombre del documento o imágen" name="F_PADJUNTAR_OTRO_DOCUMENTO_12_1" value="<?php echo $F_PADJUNTAR_OTRO_DOCUMENTO_12_1 ?>">
		<div id="drop_file_zone" ondrop="upload_file(event,'F_PADJUNTAR_OTRO_DOCUMENTO_12')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="F_PADJUNTAR_OTRO_DOCUMENTO_12" type="text" onkeydown="return false" onclick="file_explorer('F_PADJUNTAR_OTRO_DOCUMENTO_12');" style="width:300px;" VALUE="<?php echo $F_PADJUNTAR_OTRO_DOCUMENTO_12; ?>" required /></p>
		<input type="file" name="F_PADJUNTAR_OTRO_DOCUMENTO_12" id="nono"/>
		<div id="1F_PADJUNTAR_OTRO_DOCUMENTO_12">
		<?php
		if($F_PADJUNTAR_OTRO_DOCUMENTO_12!=""){echo "<a target='_blank' href='includes/archivos/".$F_PADJUNTAR_OTRO_DOCUMENTO_12."'>Visualizar!</a>"; 
		}?></div>
	</div>	
	</div>
    	
<div class="col-md-6">
	<strong><label for="formFileSm"  class="form-label"> ADJUNTAR OTRO DOCUMENTO: (FORMATO PDF, JPG O PNG)</label></strong><input type="text" style="width: 250px;" placeholder="nombre del documento o imágen" name="F_PADJUNTAR_OTRO_DOCUMENTO_13_1" value="<?php echo $F_PADJUNTAR_OTRO_DOCUMENTO_13_1 ?>">
		<div id="drop_file_zone" ondrop="upload_file(event,'F_PADJUNTAR_OTRO_DOCUMENTO_13')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="F_PADJUNTAR_OTRO_DOCUMENTO_13" type="text" onkeydown="return false" onclick="file_explorer('F_PADJUNTAR_OTRO_DOCUMENTO_13');" style="width:300px;" VALUE="<?php echo $F_PADJUNTAR_OTRO_DOCUMENTO_13; ?>" required /></p>
		<input type="file" name="F_PADJUNTAR_OTRO_DOCUMENTO_13" id="nono"/>
		<div id="1F_PADJUNTAR_OTRO_DOCUMENTO_13">
		<?php
		if($F_PADJUNTAR_OTRO_DOCUMENTO_13!=""){echo "<a target='_blank' href='includes/archivos/".$F_PADJUNTAR_OTRO_DOCUMENTO_13."'>Visualizar!</a>"; 
		}?></div>
	</div>	
	</div>
	
                          
	<div style="float:left;"border="solid 1px #000;">
	<button class="btn btn-sm btn-outline-success px-5"  id="enviarOTRODOCUMENTO" type="button">GUARDAR</button>
	</div>
                         

	</div>
                            
 
 
                         </form>   
						 
                         
						   </div>
						 </div>
						 