
<div id="content"> 


			<hr/>
			<strong>  <p class="mb-0 text-uppercase">
<img src="includes/contraer31.png" id="mostrar1" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar1" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;NUEVOS PERRMISOS</p><div  id="MENSAJEDEPLANTILLA"><div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $ROWDEPARTAMENTO; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $ROWDEPARTAMENTO; ?>%</div></div>
								</div></div></strong>
	       
            <div id="target1" style="display:block;"  class="content2 scroll">
			

			
			<form class="row g-3 needs-validation was-validated" novalidate="" id="PLANTILLANUEVOform" method="post"  >
			
			

							<table id="example2" class="table table-striped table-bordered" style="background:#e3effa">
					

								<thead>
									<tr style="text-align:center;">
										<th style="background:#e3effa"><strong>NUEVO DEPARTAMENTO</strong></th><br>
							
										<td style="background:#e3effa"><input style="width:500px;" type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $nombreplantilla; ?>" name="nombreplantilla"></td>
							
	<th style="background:#e3effa"><strong>DESCRIPCION</strong></th><br>
							
							
							
										<td style="background:#e3effa">
										
										<input style="width:500px;" type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $descripcion; ?>" name="descripcion"></td>
                                   </tr>
		
                                    </table><table>
									
                  <input  type="hidden" value="validaPLANTILLA"   name="validaPLANTILLA">
               
               <tr>
          
            <th>
	          <button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviarPlantillaNUEVO">GUARDAR</button></th>
                      
                 </tr> 
      
               </table>  
               </form>


</tbody>
</div>
</div>
</div>   
	 
			   
					