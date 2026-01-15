	<div id="add_data_Modal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">

    <h4 class="modal-title">Detalles</h4>
   </div>
   <div class="modal-body" id="personal_detalles2">

   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
   </div>
  </div>
 </div>
</div>



<div id="dataModal" class="modal fade">
 <div class="modal-dialog modal-lg">
  <div class="modal-content">
   <div class="modal-header">

    <h4 class="modal-title">Detalles</h4>
   </div>
   <div class="modal-body" id="personal_detalles">
    
   </div>
   <div class="modal-footer">
   
   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
   
   </div>
  </div>
 </div>
</div>
	

<!--NUEVO CODIGO BORRAR-->
<div id="dataModal3" class="modal fade">
 <div class="modal-dialog modal-lg">
  <div class="modal-content">
   <div class="modal-header">

    <h4 class="modal-title">Detalles</h4>
   </div>
   <div class="modal-body" id="personal_detalles3">
    ¿ESTÁS SEGURO DE BORRAR ESTE REGISTRO?
   </div>
   <div class="modal-footer">
          <span id="btnYes" class="btn confirm">SI BORRAR</span>	  
   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
   
   </div>
  </div>
 </div>
</div>


	<script type="text/javascript">



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
	        $.ajax({
	            type: 'POST',
	            url: 'datosEPC/controladorD.php',
	            contentType: false,
	            processData: false,
	            data: form_data,
 beforeSend: function() {
$('#1'+nombre).html('<p style="color:green;">Cargando archivo!</p>');
$('#mensajeINFORMACIONFISCAL').html('<p style="color:green;">Actualizado!</p>');
    },				
	            success:function(response) {
//alert(response);
if($.trim(response) == 2 ){

$('#1'+nombre).html('<p style="color:red;">Error, archivo diferente a PDF, JPG o GIF.</p>');
$('#'+nombre).val("");
}else{
$('#'+nombre).val(response);
$('#1'+nombre).html('<a target="_blank" href="includes/archivos/'+$.trim(response)+'">Visualizar!</a>');	
}

	            }
	        });
	    }
	}

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
	        $.ajax({
	            type: 'POST',
	            url: 'datosEPC/controladorD.php',
	            contentType: false,
	            processData: false,
	            data: form_data,
 beforeSend: function() {
$('#1'+nombre).html('<p style="color:green;">Cargando archivo!</p>');
$('#mensajeDATOSBANCARIOS').html('<p style="color:green;">Actualizado!</p>');
    },				
	            success:function(response) {
//alert(response);
if($.trim(response) == 2 ){

$('#1'+nombre).html('<p style="color:red;">Error, archivo diferente a PDF, JPG o GIF.</p>');
$('#'+nombre).val("");
}else{
$('#'+nombre).val(response);
$('#1'+nombre).html('<a target="_blank" href="includes/archivos/'+$.trim(response)+'">Visualizar!</a>');	
}

	            }
	        });
	    }
	}
	
$(document).ready(function(){











                    


                        //*datos de la empresa*//

/*COPIAR AQUI*/

$("#guardarDATOSCORP").click(function(){
	/*nuevo script pbajar archivos y datos*/
const formData = new FormData($('#DATOSCORP1form')[0]);

$.ajax({
    url: 'datosEPC/controladorD.php',
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false
}).done(function(data) {
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){	
			$('#target1').hide("linear");
			$("#mensajeDATOSCORP").html("<span id='ACTUALIZADO' >"+data+"</span>");
			}else{
			$("#mensajeDATOSCORP").html(data);
		}
})
.fail(function() {
    console.log("detect error");
});
});




//SCRIPT enviar EMAIL
$(document).on('click', '#enviarimaildatosempresa', function(){
var DCORP_ENVIAR_IMAIL = $('#DCORP_ENVIAR_IMAIL').val();

$.ajax({
url:'datosEPC/controladorD.php',
method:'POST',
data:{DCORP_ENVIAR_IMAIL:DCORP_ENVIAR_IMAIL},
beforeSend:function(){
$('#mensajeDATOSCORP').html('cargando');
},
success:function(data){
$('#mensajeDATOSCORP').html("<span id='ACTUALIZADO' >"+data+"</span>");

}
});
});



















              //*datos de contacto//

/*PEGAR AQUI*/

$(document).on('click', '.view_datadecontacto', function(){
  //$('#dataModal').modal();
  var personal_id = $(this).attr("id");
  $.ajax({
   url:"datosEPC/VistaPreviaContactosE.php",
   method:"POST",
   data:{personal_id:personal_id},
    beforeSend:function(){  
    $('#mensajeCORPCONTACTOS').html('cargando'); 
    },    
   success:function(data){
    $('#personal_detalles').html(data);
    $('#dataModal').modal('show');
   }
  });
 });

$(document).on('click', '.view_datadecontactoborrar', function(){
  //$('#dataModal').modal();
  var borra_id_CE = $(this).attr("id");
  var borracontactosempresa = "borracontactosempresa";

  //AGREGAR
    $('#personal_detalles3').html();
    $('#dataModal3').modal('show');
  $('#btnYes').click(function() {
  //AGREGAR

  
  $.ajax({
   url:"datosEPC/controladorD.php",
   method:"POST",
   data:{borra_id_CE:borra_id_CE,borracontactosempresa:borracontactosempresa},
   
    beforeSend:function(){  
    $('#mensajeCORPCONTACTOS').html('cargando'); 
    },    
   success:function(data){
	   			$('#dataModal3').modal('hide');	   
			$("#mensajeCORPCONTACTOS").html("<span id='ACTUALIZADO' >"+data+"</span>");			
			$("#reseteate1CONTACTO").load(location.href + " #reseteate1CONTACTO");
   }
  });
  
    //AGREGAR	
	});
  //AGREGAR	 
  
 });



$("#guardarDATOSCONTACTOS").click(function(){
	/*nuevo script pbajar archivos y datos*/
const formData = new FormData($('#CONTACTOSEMPRESAform')[0]);

$.ajax({
    url: 'datosEPC/controladorD.php',
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false
}).done(function(data) {
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){	
			//$('#target3').hide("linear");
			$("#reseteate1CONTACTO").load(location.href + " #reseteate1CONTACTO");
			$("#mensajeCORPCONTACTOS").html("<span id='ACTUALIZADO' >"+data+"</span>");
			}else{
			$("#mensajeCORPCONTACTOS").html(data);
		}
})
.fail(function() {
    console.log("detect error");
});
});



//SCRIPT enviar EMAIL
$(document).on('click', '#enviarimailCONTACTOS', function(){
var CONTACTOS_ENVIAR_IMAIL = $('#CONTACTOS_ENVIAR_IMAIL').val();


        var myCheckboxes = new Array();
        $("input:checked").each(function() {
           myCheckboxes.push($(this).val());
        });
var dataString = $("#form_emai_contacto").serialize();



$.ajax({
url:'datosEPC/controladorD.php',
method:'POST',
dataType: 'html',

data: dataString+{CONTACTOS_ENVIAR_IMAIL:CONTACTOS_ENVIAR_IMAIL},


beforeSend:function(){
$('#mensajeCORPCONTACTOS').html('cargando');
},
success:function(data){
$('#mensajeCORPCONTACTOS').html("<span id='ACTUALIZADO' >"+data+"</span>");

}
});
});









          //direccion de bodegas//*


/*PEGAR AQUI*/

$("#guardardireccionBODEGAS").click(function(){
	/*nuevo script pbajar archivos y datos*/
const formData = new FormData($('#BODEGASOFICINASform')[0]);

$.ajax({
    url: 'datosEPC/controladorD.php',
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false
}).done(function(data) {
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){	
		
			$("#mensajeBODEGAS").html("<span id='ACTUALIZADO' >"+data+"</span>");
$('#resetDirBodega').load(location.href + ' #resetDirBodega');			
			}else{
			$("#mensajeBODEGAS").html(data);
		}
})
.fail(function() {
    console.log("detect error");
});
});



$(document).on('click', '.view_dataDirBodegamodifica', function(){
var personal_id = $(this).attr('id');
$.ajax({
url:'datosEPC/VistaPreviaDirBodegas.php',
method:'POST',
data:{personal_id:personal_id},
beforeSend:function(){
$('#mensajeBODEGAS').html('cargando');
},
success:function(data){
$('#personal_detalles').html(data);
$('#dataModal').modal('toggle');
}
});
});



$(document).on('click', '.view_dataDirBodegaborrar', function(){
var borra_id_DirBodega = $(this).attr('id');
var borraDirBodegaborrar = 'borraDirBodegaborrar';
$('#personal_detalles3').html();
$('#dataModal3').modal('show');
$('#btnYes').click(function() {
$.ajax({
url:'datosEPC/controladorD.php',
method:'POST',
data:{borra_id_DirBodega:borra_id_DirBodega,borraDirBodegaborrar:borraDirBodegaborrar},
beforeSend:function(){
$('#mensajeBODEGAS').html('cargando');
},
success:function(data){
$('#dataModal3').modal('hide');
$('#mensajeBODEGAS').html("<span id='ACTUALIZADO' >"+data+"</span>");
$('#resetDirBodega').load(location.href + ' #resetDirBodega');
}
});
});
});



//SCRIPT enviar EMAIL
$(document).on('click', '#enviarimaildirBODEGAS', function(){
var dirBODEGAS_ENVIAR_IMAIL = $('#dirBODEGAS_ENVIAR_IMAIL').val();


        var myCheckboxes = new Array();
        $("input:checked").each(function() {
           myCheckboxes.push($(this).val());
        });
var dataString = $("#form_email_bodega").serialize();



$.ajax({
url:'datosEPC/controladorD.php',
method:'POST',
dataType: 'html',

data: dataString+{dirBODEGAS_ENVIAR_IMAIL:dirBODEGAS_ENVIAR_IMAIL},


beforeSend:function(){
$('#mensajeBODEGAS').html('cargando');
},
success:function(data){
$('#mensajeBODEGAS').html("<span id='ACTUALIZADO' >"+data+"</span>");

}
});
});







   //*CONTACTOS DE BODEGAS //*

$("#guardarDATOSCONTACTOSBODE").click(function(){
	/*nuevo script pbajar archivos y datos*/
const formData = new FormData($('#CONTACTOSBODEEMPRESAform')[0]);

$.ajax({
    url: 'datosEPC/controladorD.php',
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false
}).done(function(data) {
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){	
$('#resetDATOSCONTACTOSBODE').load(location.href + ' #resetDATOSCONTACTOSBODE');
			$("#mensajeBODEGASCONTACTOS").html("<span id='ACTUALIZADO' >"+data+"</span>");
			}else{
			$("#mensajeBODEGASCONTACTOS").html(data);
		}
})
.fail(function() {
    console.log("detect error");
});
});





$(document).on('click', '.view_dataDATOSCONTACTOSBODEmodifica', function(){
var personal_id = $(this).attr('id');
$.ajax({
url:'datosEPC/VistaPreviaContactosBodega.php',
method:'POST',
data:{personal_id:personal_id},
beforeSend:function(){
$('#mensajeBODEGASCONTACTOS').html('cargando');
},
success:function(data){
$('#personal_detalles').html(data);
$('#dataModal').modal('toggle');
}
});
});
//borraDATOSCONTACTOSBODE

$(document).on('click', '.view_dataDATOSCONTACTOSBODEborrar', function(){
var borra_id_DATOSCONTACTOSBODE = $(this).attr('id');
var borraDATOSCONTACTOSBODE = 'borraDATOSCONTACTOSBODE';
$('#personal_detalles3').html();
$('#dataModal3').modal('show');
$('#btnYes').click(function() {
$.ajax({
url:'datosEPC/controladorD.php',
method:'POST',
data:{borra_id_DATOSCONTACTOSBODE:borra_id_DATOSCONTACTOSBODE,borraDATOSCONTACTOSBODE:borraDATOSCONTACTOSBODE},
beforeSend:function(){
$('#mensajeBODEGASCONTACTOS').html('cargando');
},
success:function(data){
$('#dataModal3').modal('hide');
$('#mensajeBODEGASCONTACTOS').html("<span id='ACTUALIZADO' >"+data+"</span>");
$('#resetDATOSCONTACTOSBODE').load(location.href + ' #resetDATOSCONTACTOSBODE');
}
});
});
});



//SCRIPT enviar EMAIL
$(document).on('click', '#enviarimailCONTBODEga', function(){
var CONTBODE_ENVIAR_IMAIL = $('#CONTBODE_ENVIAR_IMAIL').val();


        var myCheckboxes = new Array();
        $("input:checked").each(function() {
           myCheckboxes.push($(this).val());
        });
var dataString = $("#form_emai_contacbodega").serialize();



$.ajax({
url:'datosEPC/controladorD.php',
method:'POST',
dataType: 'html',

data: dataString+{CONTBODE_ENVIAR_IMAIL:CONTBODE_ENVIAR_IMAIL},


beforeSend:function(){
$('#mensajeBODEGASCONTACTOS').html('cargando');
},
success:function(data){
$('#mensajeBODEGASCONTACTOS').html("<span id='ACTUALIZADO' >"+data+"</span>");

}
});
});



















   //*INFORMACION FISCAL DE LAS EMPRESAS //*

$("#guardarinformacionfiscal").click(function(){
	/*nuevo script pbajar archivos y datos*/
//const formData = new FormData($('#INFORMACIONFISCALform')[0]);
$.ajax({
    url: 'datosEPC/controladorD.php',
    type: 'POST', 
	data:$('#INFORMACIONFISCALform').serialize()
}).done(function(data) {
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){	
			/*$("#resetdocs_info_fiscal").load(location.href + " #resetdocs_info_fiscal");	*/
			$("#mensajeINFORMACIONFISCAL").html("<span id='ACTUALIZADO' >"+data+"</span>");
			}else{
			$("#mensajeINFORMACIONFISCAL").html("<span id='ACTUALIZADO' >"+data+"</span>");
		}
})
.fail(function() {
    console.log("detect error");
});
});




/*$(document).on('click', '.view_datadocsinfofiscalmodifica', function(){
var personal_id = $(this).attr('id');
$.ajax({
url:'datosEPC/VistaPreviaInfoFiscal.php',
method:'POST',
data:{personal_id:personal_id},
beforeSend:function(){
$('#mensajeINFORMACIONFISCAL').html('cargando');
},
success:function(data){
$('#personal_detalles').html(data);
$('#dataModal').modal('toggle');
}
});
});*/


/*
$(document).on('click', '.view_datadocsinfofiscalborrar', function(){
  //$('#dataModal').modal();
  var borra_id_docsinfofiscal = $(this).attr("id");
  var borradocsinfofiscal = "borradocsinfofiscal";
  //AGREGAR
    $('#personal_detalles3').html();
    $('#dataModal3').modal('show');
  $('#btnYes').click(function() {
  //AGREGAR
  $.ajax({
   url:"datosEPC/controladorD.php",
   method:"POST",
   data:{borra_id_docsinfofiscal:borra_id_docsinfofiscal,borradocsinfofiscal:borradocsinfofiscal},
   
    beforeSend:function(){  
    $('#mensajeINFORMACIONFISCAL').html('cargando'); 
    },    
   success:function(data){
	   			$('#dataModal3').modal('hide');	   
			$("#mensajeINFORMACIONFISCAL").html("<span id='ACTUALIZADO' >"+data+"</span>");			
			$("#resetdocs_info_fiscal").load(location.href + " #resetdocs_info_fiscal");
   }
  });
    //AGREGAR	
	});
  //AGREGAR	 
 });
*/


//SCRIPT enviar EMAIL
/*$(document).on('click', '#enviari_email_infofiscaladj', function(){
var infofiscaladj_ENVIAR_IMAIL = $('#infofiscaladj_ENVIAR_IMAIL').val();

$.ajax({
url:'datosEPC/controladorD.php',
method:'POST',
data:{infofiscaladj_ENVIAR_IMAIL:infofiscaladj_ENVIAR_IMAIL},
beforeSend:function(){
$('#mensajeINFORMACIONFISCAL').html('cargando');
},
success:function(data){
$('#mensajeINFORMACIONFISCAL').html("<span id='ACTUALIZADO' >"+data+"</span>");

}
});
});*/



$(document).on('click', '#enviari_email_infofiscaladj', function(){
	
var infofiscaladj_ENVIAR_IMAIL2 = $('#infofiscaladj_ENVIAR_IMAIL').val();

 if($(ADJUNTAR_FOTOS_INFORMACION_1).is(":checked")){
	 var ADJUNTAR_FOTOS_INFORMACION_1 ='1';
	 }else{
	 var ADJUNTAR_FOTOS_INFORMACION_1 ='0';		 
	 }
	 
 if($('#ADJUNTAR_PRESENTACION_INFORMACION_1').is(":checked")){
	 var ADJUNTAR_PRESENTACION_INFORMACION_1 ='1';
	 }else{
	 var ADJUNTAR_PRESENTACION_INFORMACION_1 ='0';		 
	 }
 if($('#ADJUNTAR_LIGA_INFORMACION_1').is(":checked")){
	 var ADJUNTAR_LIGA_INFORMACION_1 ='1';
	 }else{
	 var ADJUNTAR_LIGA_INFORMACION_1 ='0';		 
	 }
 if($('#ADJUNTAR_CONTRATO_INFORMACION_1').is(":checked")){
	 var ADJUNTAR_CONTRATO_INFORMACION_1 ='1';
	 }else{
	 var ADJUNTAR_CONTRATO_INFORMACION_1 ='0';		 
	 }	 
 if($('#ADJUNTAR_CONTPROV_INFORMACION_1').is(":checked")){
	 var ADJUNTAR_CONTPROV_INFORMACION_1 ='1';
	 }else{
	 var ADJUNTAR_CONTPROV_INFORMACION_1 ='0';		 
	 }
 if($('#ADJUNTAR_CONVENIOS_INFORMACION_1').is(":checked")){
	 var ADJUNTAR_CONVENIOS_INFORMACION_1 ='1';
	 }else{
	 var ADJUNTAR_CONVENIOS_INFORMACION_1 ='0';		 
	 }
 if($('#ADJUNTAR_CONSFISCAL_INFORMACION_1').is(":checked")){
	 var ADJUNTAR_CONSFISCAL_INFORMACION_1 ='1';
	 }else{
	 var ADJUNTAR_CONSFISCAL_INFORMACION_1 ='0';		 
	 }
 if($('#ADJUNTAR_OPINION_INFORMACION_1').is(":checked")){
	 var ADJUNTAR_OPINION_INFORMACION_1 ='1';
	 }else{
	 var ADJUNTAR_OPINION_INFORMACION_1 ='0';		 
	 }		 
 if($('#ADJUNTAR_REFISCAL_INFORMACION_1').is(":checked")){
	 var ADJUNTAR_REFISCAL_INFORMACION_1 ='1';
	 }else{
	 var ADJUNTAR_REFISCAL_INFORMACION_1 ='0';		 
	 }	
 if($('#ADJUNTAR_CDOMICI_INFORMACION_1').is(":checked")){
	 var ADJUNTAR_CDOMICI_INFORMACION_1 ='1';
	 }else{
	 var ADJUNTAR_CDOMICI_INFORMACION_1 ='0';		 
	 }	
 if($('#ADJUNTAR_ESTCUENTA_INFORMACION_1').is(":checked")){
	 var ADJUNTAR_ESTCUENTA_INFORMACION_1 ='1';
	 }else{
	 var ADJUNTAR_ESTCUENTA_INFORMACION_1 ='0';		 
	 }
 if($('#ADJUNTAR_ACTA_INFORMACION_1').is(":checked")){
	 var ADJUNTAR_ACTA_INFORMACION_1 ='1';
	 }else{
	 var ADJUNTAR_ACTA_INFORMACION_1 ='0';		 
	 }
 if($('#ADJUNTAR_PNOTARIAL_INFORMACION_1').is(":checked")){
	 var ADJUNTAR_PNOTARIAL_INFORMACION_1 ='1';
	 }else{
	 var ADJUNTAR_PNOTARIAL_INFORMACION_1 ='0';		 
	 }
 if($('#ADJUNTAR_LEGAL_INFORMACION_1').is(":checked")){
	 var ADJUNTAR_LEGAL_INFORMACION_1 ='1';
	 }else{
	 var ADJUNTAR_LEGAL_INFORMACION_1 ='0';		 
	 }
 if($('#ADJUNTAR_SEGURO_INFORMACION_1').is(":checked")){
	 var ADJUNTAR_SEGURO_INFORMACION_1 ='1';
	 }else{
	 var ADJUNTAR_SEGURO_INFORMACION_1 ='0';		 
	 }	 
 if($('#ADJUNTAR_LOGO_INFORMACION_1').is(":checked")){
	 var ADJUNTAR_LOGO_INFORMACION_1 ='1';
	 }else{
	 var ADJUNTAR_LOGO_INFORMACION_1 ='0';		 
	 }
$.ajax({
url:'datosEPC/controladorD.php',
method:'POST',
//ADJUNTAR_LOGO_INFORMACION_1
data:{infofiscaladj_ENVIAR_IMAIL2:infofiscaladj_ENVIAR_IMAIL2,ADJUNTAR_SEGURO_INFORMACION_1:ADJUNTAR_SEGURO_INFORMACION_1,ADJUNTAR_FOTOS_INFORMACION_1:ADJUNTAR_FOTOS_INFORMACION_1,ADJUNTAR_PRESENTACION_INFORMACION_1:ADJUNTAR_PRESENTACION_INFORMACION_1,ADJUNTAR_CONTRATO_INFORMACION_1:ADJUNTAR_CONTRATO_INFORMACION_1,ADJUNTAR_LIGA_INFORMACION_1:ADJUNTAR_LIGA_INFORMACION_1,ADJUNTAR_CONTPROV_INFORMACION_1:ADJUNTAR_CONTPROV_INFORMACION_1,ADJUNTAR_CONVENIOS_INFORMACION_1:ADJUNTAR_CONVENIOS_INFORMACION_1,ADJUNTAR_CONSFISCAL_INFORMACION_1:ADJUNTAR_CONSFISCAL_INFORMACION_1,ADJUNTAR_OPINION_INFORMACION_1:ADJUNTAR_OPINION_INFORMACION_1,ADJUNTAR_REFISCAL_INFORMACION_1:ADJUNTAR_REFISCAL_INFORMACION_1,ADJUNTAR_CDOMICI_INFORMACION_1:ADJUNTAR_CDOMICI_INFORMACION_1,ADJUNTAR_ESTCUENTA_INFORMACION_1:ADJUNTAR_ESTCUENTA_INFORMACION_1,ADJUNTAR_ACTA_INFORMACION_1:ADJUNTAR_ACTA_INFORMACION_1,ADJUNTAR_PNOTARIAL_INFORMACION_1:ADJUNTAR_PNOTARIAL_INFORMACION_1,ADJUNTAR_LEGAL_INFORMACION_1:ADJUNTAR_LEGAL_INFORMACION_1,ADJUNTAR_LOGO_INFORMACION_1:ADJUNTAR_LOGO_INFORMACION_1},
beforeSend:function(){
$('#mensajeINFORMACIONFISCAL').html('cargando');
},
success:function(data){
$('#mensajeINFORMACIONFISCAL').html("<span id='ACTUALIZADO' >"+data+"</span>");

}
});
});



































             //*productos y servicios//*


$("#guardarserviciosproducto").click(function(){
	/*nuevo script pbajar archivos y datos*/
const formData = new FormData($('#PRODUCTOSERVICIOform')[0]);

$.ajax({
    url: 'datosEPC/controladorD.php',
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false
}).done(function(data) {
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){	
			$('#target').hide("linear");
			$("#mensajePRODUCTOSERVICIO").html("<span id='ACTUALIZADO' >"+data+"</span>");
			$("#resetProdServ").load(location.href + " #resetProdServ");			
			}else{
			$("#mensajePRODUCTOSERVICIO").html(data);
		}
})
.fail(function() {
    console.log("detect error");
});
});



$(document).on('click', '.view_dataPSsmodifica', function(){
var personal_id = $(this).attr('id');
$.ajax({
url:'datosEPC/VistaPreviaProductosServicios.php',
method:'POST',
data:{personal_id:personal_id},
beforeSend:function(){
$('#mensajePRODUCTOSERVICIO').html('cargando');
},
success:function(data){
$('#personal_detalles').html(data);
$('#dataModal').modal('toggle');
}
});
});




$(document).on('click', '.view_dataPSsborrar', function(){
  //$('#dataModal').modal();
  var borra_id_PS = $(this).attr("id");
  var borraPRODUCTOSSERV = "borraPRODUCTOSSERV";
  //AGREGAR
    $('#personal_detalles3').html();
    $('#dataModal3').modal('show');
  $('#btnYes').click(function() {
  //AGREGAR
  $.ajax({
   url:"datosEPC/controladorD.php",
   method:"POST",
   data:{borra_id_PS:borra_id_PS,borraPRODUCTOSSERV:borraPRODUCTOSSERV},
   
    beforeSend:function(){  
    $('#mensajePRODUCTOSERVICIO').html('cargando'); 
    },    
   success:function(data){
	   			$('#dataModal3').modal('hide');	   
			$("#mensajePRODUCTOSERVICIO").html("<span id='ACTUALIZADO' >"+data+"</span>");			
			$("#resetProdServ").load(location.href + " #resetProdServ");
   }
  });
    //AGREGAR	
	});
  //AGREGAR	 
 });

//SCRIPT enviar EMAIL
$(document).on('click', '#enviar_email_servicios', function(){
var pSERVICIOS_ENVIAR_IMAIL = $('#pSERVICIOS_ENVIAR_IMAIL').val();


        var myCheckboxes = new Array();
        $("input:checked").each(function() {
           myCheckboxes.push($(this).val());
        });
var dataString = $("#form_emai_serviproduc").serialize();



$.ajax({
url:'datosEPC/controladorD.php',
method:'POST',
dataType: 'html',

data: dataString+{pSERVICIOS_ENVIAR_IMAIL:pSERVICIOS_ENVIAR_IMAIL},


beforeSend:function(){
$('#mensajePRODUCTOSERVICIO').html('cargando');
},
success:function(data){
$('#mensajePRODUCTOSERVICIO').html("<span id='ACTUALIZADO' >"+data+"</span>");

}
});
});








             //* RECIBOS COPROBANTES O FACTURAS  de las empresas//*


$("#guardardatosRECIBOS").click(function(){
	/*nuevo script pbajar archivos y datos*/
const formData = new FormData($('#DOCURECIBOSform')[0]);

$.ajax({
    url: 'datosEPC/controladorD.php',
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false
}).done(function(data) {
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){	
$('#resetRECIBOSCYF').load(location.href + ' #resetRECIBOSCYF');
			$("#mensajeDOCURECIBOS").html("<span id='ACTUALIZADO' >"+data+"</span>");
			}else{
			$("#mensajeDOCURECIBOS").html(data);
		}
})
.fail(function() {
    console.log("detect error");
});
});

  
//DOCURECIBOSform
$(document).on('click', '.view_dataRECIBOSCYFmodifica', function(){
var personal_id = $(this).attr('id');
$.ajax({
url:'datosEPC/VistaPreviaRecibosComprobantesFacturas.php',
method:'POST',
data:{personal_id:personal_id},
beforeSend:function(){
$('#mensajeDOCURECIBOS').html('cargando');
},
success:function(data){
$('#personal_detalles').html(data);
$('#dataModal').modal('toggle');
}
});
});




$(document).on('click', '.view_dataRECIBOSCYFborrar', function(){
var borra_id_RECIBOSCYF = $(this).attr('id');
var borraRECIBOSCYF = 'borraRECIBOSCYF';
$('#personal_detalles3').html();
$('#dataModal3').modal('show');
$('#btnYes').click(function() {
$.ajax({
url:'datosEPC/controladorD.php',
method:'POST',
data:{borra_id_RECIBOSCYF:borra_id_RECIBOSCYF,borraRECIBOSCYF:borraRECIBOSCYF},
beforeSend:function(){
$('#mensajeDOCURECIBOS').html('cargando');
},
success:function(data){
$('#dataModal3').modal('hide');
$('#mensajeDOCURECIBOS').html("<span id='ACTUALIZADO' >"+data+"</span>");
$('#resetRECIBOSCYF').load(location.href + ' #resetRECIBOSCYF');
}
});
});
});





//SCRIPT enviar EMAIL
$(document).on('click', '#enviar_email_recibos_facturas', function(){
var RECIBOScf_ENVIAR_IMAIL = $('#RECIBOScf_ENVIAR_IMAIL').val();


        var myCheckboxes = new Array();
        $("input:checked").each(function() {
           myCheckboxes.push($(this).val());
        });
var dataString = $("#form_emai_recicomprofactu").serialize();  enviar_email_recibos_facturas



$.ajax({
url:'datosEPC/controladorD.php',
method:'POST',
dataType: 'html',

data: dataString+{RECIBOScf_ENVIAR_IMAIL:RECIBOScf_ENVIAR_IMAIL},


beforeSend:function(){
$('#mensajeDOCURECIBOS').html('cargando');
},
success:function(data){
$('#mensajeDOCURECIBOS').html("<span id='ACTUALIZADO' >"+data+"</span>");

}
});
});






             //* docuentos clasificados de las empresas//*


$("#guardardatosclasificados").click(function(){
	/*nuevo script pbajar archivos y datos*/
const formData = new FormData($('#DOCUCLASIFform')[0]);

$.ajax({
    url: 'datosEPC/controladorD.php',
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false
}).done(function(data) {
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){	
			$("#resetDOCUCLASIF").load(location.href + " #resetDOCUCLASIF");
			$("#mensajeDOCUCLASIF").html("<span id='ACTUALIZADO' >"+data+"</span>");
			}else{
			$("#mensajeDOCUCLASIF").html(data);
		}
})
.fail(function() {
    console.log("detect error");
});
});


$(document).on('click', '.view_datadocuclasificadosmodifica', function(){
var personal_id = $(this).attr('id');
$.ajax({
url:'datosEPC/VistaPreviaDocumentosClasificados.php',
method:'POST',
data:{personal_id:personal_id},
beforeSend:function(){
$('#mensajeDOCUCLASIF').html('cargando');
},
success:function(data){
$('#personal_detalles').html(data);
$('#dataModal').modal('toggle');
}
});
});



$(document).on('click', '.view_datadocuclasificadosborrar', function(){
var borra_id_docuclasificados = $(this).attr('id');
var borradocuclasificados = 'borradocuclasificados';
$('#personal_detalles3').html();
$('#dataModal3').modal('show');
$('#btnYes').click(function() {
$.ajax({
url:'datosEPC/controladorD.php',
method:'POST',
data:{borra_id_docuclasificados:borra_id_docuclasificados,borradocuclasificados:borradocuclasificados},
beforeSend:function(){
$('#mensajeDOCUCLASIF').html('cargando');
},
success:function(data){
$('#dataModal3').modal('hide');
$('#mensajeDOCUCLASIF').html("<span id='ACTUALIZADO' >"+data+"</span>");
$('#resetDOCUCLASIF').load(location.href + ' #resetDOCUCLASIF');
}
});
});
});


//SCRIPT enviar EMAIL
$(document).on('click', '#enviar_email_docuclasif', function(){
var docuclasif_ENVIAR_IMAIL = $('#docuclasif_ENVIAR_IMAIL').val();


        var myCheckboxes = new Array();
        $("input:checked").each(function() {
           myCheckboxes.push($(this).val());
        });
var dataString = $("#form_emai_documentosclasi").serialize();  



$.ajax({
url:'datosEPC/controladorD.php',
method:'POST',
dataType: 'html',

data: dataString+{docuclasif_ENVIAR_IMAIL:docuclasif_ENVIAR_IMAIL},


beforeSend:function(){
$('#mensajeDOCUCLASIF').html('cargando');
},
success:function(data){
$('#mensajeDOCUCLASIF').html("<span id='ACTUALIZADO' >"+data+"</span>");

}
});
});




             //*datos legales  de la empresa//*


$("#guardardatoslegales").click(function(){
	/*nuevo script pbajar archivos y datos*/
const formData = new FormData($('#DATOSLEGALESform')[0]);

$.ajax({
    url: 'datosEPC/controladorD.php',
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false
}).done(function(data) {
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){	
			$('#target11').hide("linear");
			$("#mensajedatoslegales").html("<span id='ACTUALIZADO' >"+data+"</span>");
			}else{
			$("#mensajedatoslegales").html(data);
		}
})
.fail(function() {
    console.log("detect error");
});
});





//SCRIPT enviar EMAIL
$(document).on('click', '#enviar_email_datoslegales', function(){
var legales_ENVIAR_IMAIL = $('#legales_ENVIAR_IMAIL').val();

$.ajax({
url:'datosEPC/controladorD.php',
method:'POST',
data:{legales_ENVIAR_IMAIL:legales_ENVIAR_IMAIL},
beforeSend:function(){
$('#mensajedatoslegales').html('cargando');
},
success:function(data){
$('#mensajedatoslegales').html("<span id='ACTUALIZADO' >"+data+"</span>");

}
});
});










             //* DATOS BANCARIOS DE LA EMPRESA//*


$("#guardardatosbancarios").click(function(){
	/*nuevo script pbajar archivos y datos*/
const formData = new FormData($('#DATOSBANCARIOSform')[0]);

$.ajax({
    url: 'datosEPC/controladorD.php',
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false
}).done(function(data) {
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){	
			$('#target9').hide("linear");
			$("#mensajeDATOSBANCARIOS").html("<span id='ACTUALIZADO' >"+data+"</span>");
$('#resetDatosBancarios').load(location.href + ' #resetDatosBancarios');			
			}else{
			$("#mensajeDATOSBANCARIOS").html(data);
		}
})
.fail(function() {
    console.log("detect error");
});
});





$(document).on('click', '.view_dataDATOSBanmodifica', function(){
var personal_id = $(this).attr('id');
$.ajax({
url:'datosEPC/VistaPreviaDatosBancarios.php',
method:'POST',
data:{personal_id:personal_id},
beforeSend:function(){
$('#mensajeDATOSBANCARIOS').html('cargando');
},
success:function(data){
$('#personal_detalles').html(data);
$('#dataModal').modal('toggle');
}
});
});


$(document).on('click', '.view_dataDATOSBanborrar', function(){
var borra_id_DatosBan = $(this).attr('id');
var borraDatosBan = 'borraDatosBan';
$('#personal_detalles3').html();
$('#dataModal3').modal('show');
$('#btnYes').click(function() {
$.ajax({
url:'datosEPC/controladorD.php',
method:'POST',
data:{borra_id_DatosBan:borra_id_DatosBan,borraDatosBan:borraDatosBan},
beforeSend:function(){
$('#mensajeDATOSBANCARIOS').html('cargando');
},
success:function(data){
$('#dataModal3').modal('hide');
$('#mensajeDATOSBANCARIOS').html("<span id='ACTUALIZADO' >"+data+"</span>");
$('#resetDatosBancarios').load(location.href + ' #resetDatosBancarios');
}
});
});
});


//SCRIPT enviar EMAIL
$(document).on('click', '#enviar_email_datosbancarios', function(){
var bancarios_ENVIAR_IMAIL = $('#bancarios_ENVIAR_IMAIL').val();


        var myCheckboxes = new Array();
        $("input:checked").each(function() {
           myCheckboxes.push($(this).val());
        });
var dataString = $("#form_emai_bancadatos").serialize();  



$.ajax({
url:'datosEPC/controladorD.php',
method:'POST',
dataType: 'html',

data: dataString+{bancarios_ENVIAR_IMAIL:bancarios_ENVIAR_IMAIL},


beforeSend:function(){
$('#mensajeDATOSBANCARIOS').html('cargando');
},
success:function(data){
$('#mensajeDATOSBANCARIOS').html("<span id='ACTUALIZADO' >"+data+"</span>");

}
});
});





             //* REFERENCIAS COMERCIALES DE LA EMPRESA//*


$("#guardardatosreferencias").click(function(){
	/*nuevo script pbajar archivos y datos*/
const formData = new FormData($('#REFERENCIASCform')[0]);

$.ajax({
    url: 'datosEPC/controladorD.php',
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false
}).done(function(data) {
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){	
			$('#target10').hide("linear");
			$("#mensajeREFERENCIAS").html("<span id='ACTUALIZADO' >"+data+"</span>");
$('#resetreferencias').load(location.href + ' #resetreferencias');			
			}else{
			$("#mensajeREFERENCIAS").html(data);
		}
})
.fail(function() {
    console.log("detect error");
});
});





$(document).on('click', '.view_datadatosreferenciasmodifica', function(){
var personal_id = $(this).attr('id');
$.ajax({
url:'datosEPC/VistaPreviaReferenciasComerciales.php',
method:'POST',
data:{personal_id:personal_id},
beforeSend:function(){
$('#mensajeREFERENCIAS').html('cargando');
},
success:function(data){
$('#personal_detalles').html(data);
$('#dataModal').modal('toggle');
}
});
});


$(document).on('click', '.view_datareferenciasborrar', function(){
var borra_id_rencias = $(this).attr('id');
var borrareferencias = 'borrareferencias';
$('#personal_detalles3').html();
$('#dataModal3').modal('show');
$('#btnYes').click(function() {
$.ajax({
url:'datosEPC/controladorD.php',
method:'POST',
data:{borrareferencias:borrareferencias,borra_id_rencias:borra_id_rencias},
beforeSend:function(){
$('#mensajeREFERENCIAS').html('cargando');
},
success:function(data){
$('#dataModal3').modal('hide');
$('#mensajeREFERENCIAS').html("<span id='ACTUALIZADO' >"+data+"</span>");
$('#resetreferencias').load(location.href + ' #resetreferencias');
}
});
});
});


//SCRIPT enviar EMAIL
$(document).on('click', '#enviar_EMAIL_datosreferencias', function(){
var referencias_ENVIAR_IMAIL = $('#referencias_ENVIAR_IMAIL').val();


        var myCheckboxes = new Array();
        $("input:checked").each(function() {
           myCheckboxes.push($(this).val());
        });
var dataString = $("#form_emai_comereferencias").serialize();  



$.ajax({
url:'datosEPC/controladorD.php',
method:'POST',
dataType: 'html',

data: dataString+{referencias_ENVIAR_IMAIL:referencias_ENVIAR_IMAIL},


beforeSend:function(){
$('#mensajeREFERENCIAS').html('cargando');
},
success:function(data){
$('#mensajeREFERENCIAS').html("<span id='ACTUALIZADO' >"+data+"</span>");

}
});
});


			$('#target1').hide("linear");
			$('#target2').hide("linear");
			$('#target3').hide("linear");
			$('#target4').hide("linear");
			$('#target5').hide("linear");
			$('#target6').hide("linear");
			$('#target7').hide("linear");
			$('#target8').hide("linear");
			$('#target9').hide("linear");
			$('#target10').hide("linear");
			$('#target11').hide("linear");
			$('#target12').hide("linear");
			$('#target13').hide("linear");
			$('#target14').hide("linear");
			$('#target15').hide("linear");
			$('#target16').hide("linear");
			$('#target17').hide("linear");
			$('#target18').hide("linear");
			$('#target19').hide("linear");
			$('#target20').hide("linear");
			$('#target21').hide("linear");
			$('#target22').hide("linear");
			$('#target23').hide("linear");
			$('#targetVIDEO').hide("linear");
			
			$("#mostrar1").click(function(){
				$('#target1').show("swing");
		 	});
			$("#ocultar1").click(function(){
				$('#target1').hide("linear");
			});
			$("#mostrar2").click(function(){
				$('#target2').show("swing");
		 	});
			$("#ocultar2").click(function(){
				$('#target2').hide("linear");
			});
			$("#mostrar3").click(function(){
				$('#target3').show("swing");
		 	});
			$("#ocultar3").click(function(){
				$('#target3').hide("linear");
			});
			$("#mostrar4").click(function(){
				$('#target4').show("swing");
		 	});
			$("#ocultar4").click(function(){
				$('#target4').hide("linear");
			});
			$("#mostrar5").click(function(){
				$('#target5').show("swing");
		 	});
			$("#ocultar5").click(function(){
				$('#target5').hide("linear");
			});
			$("#mostrar6").click(function(){
				$('#target6').show("swing");
		 	});
			$("#ocultar6").click(function(){
				$('#target6').hide("linear");
			});
			$("#mostrar7").click(function(){
				$('#target7').show("swing");
		 	});
			$("#ocultar7").click(function(){
				$('#target7').hide("linear");
			});
			$("#mostrar8").click(function(){
				$('#target8').show("swing");
		 	});
			$("#ocultar8").click(function(){
				$('#target8').hide("linear");
			});
			$("#mostrar9").click(function(){
				$('#target9').show("swing");
		 	});
			$("#ocultar9").click(function(){
				$('#target9').hide("linear");
			});
			$("#mostrar10").click(function(){
				$('#target10').show("swing");
		 	});
			$("#ocultar10").click(function(){
				$('#target10').hide("linear");
			});
			$("#mostrar11").click(function(){
				$('#target11').show("swing");
		 	});
			$("#ocultar11").click(function(){
				$('#target11').hide("linear");
			});
			$("#mostrar12").click(function(){
				$('#target12').show("swing");
		 	});
			$("#ocultar12").click(function(){
				$('#target12').hide("linear");
			});
			$("#mostrar13").click(function(){
				$('#target13').show("swing");
		 	});
			$("#ocultar13").click(function(){
				$('#target13').hide("linear");
			});
			$("#mostrar14").click(function(){
				$('#target14').show("swing");
		 	});
			$("#ocultar14").click(function(){
				$('#target14').hide("linear");
			});
			$("#mostrar15").click(function(){
				$('#target15').show("swing");
		 	});
			$("#ocultar15").click(function(){
				$('#target15').hide("linear");
			});
			$("#mostrar16").click(function(){
				$('#target16').show("swing");
		 	});
			$("#ocultar16").click(function(){
				$('#target16').hide("linear");
			});
			$("#mostrar17").click(function(){
				$('#target17').show("swing");
		 	});
			$("#ocultar17").click(function(){
				$('#target17').hide("linear");
			});
			$("#mostrar18").click(function(){
				$('#target18').show("swing");
		 	});
			$("#ocultar18").click(function(){
				$('#target18').hide("linear");
			});
			$("#mostrar19").click(function(){
				$('#target19').show("swing");
		 	});
			$("#ocultar19").click(function(){
				$('#target19').hide("linear");
			});
			$("#mostrar20").click(function(){
				$('#target20').show("swing");
		 	});
			$("#ocultar20").click(function(){
				$('#target20').hide("linear");
			});
			$("#mostrar21").click(function(){
				$('#target21').show("swing");
		 	});
			$("#ocultar21").click(function(){
				$('#target21').hide("linear");
			});
			$("#mostrar22").click(function(){
				$('#target22').show("swing");
		 	});
			$("#ocultar22").click(function(){
				$('#target22').hide("linear");
			});
			$("#mostrar23").click(function(){
				$('#target22').show("swing");
		 	});
			$("#ocultar23").click(function(){
				$('#target23').hide("linear");
			});
			$("#mostrarVIDEO").click(function(){
				$('#targetVIDEO').show("swing");
		 	});
			$("#ocultarVIDEO").click(function(){
				$('#targetVIDEO').hide("linear");
			});
			

			$("#mostrartodos").click(function(){
				$('#target1').show("swing");
				$('#target2').show("swing");
				$('#target3').show("swing");
				$('#target4').show("swing");
				$('#target5').show("swing");
				$('#target6').show("swing");
				$('#target7').show("swing");
				$('#target8').show("swing");
				$('#target9').show("swing");
				$('#target10').show("swing");
				$('#target11').show("swing");
				$('#target12').show("swing");
				$('#target13').show("swing");
				$('#target14').show("swing");
				$('#target15').show("swing");
				$('#target16').show("swing");
				$('#target17').show("swing");
				$('#target18').show("swing");
				$('#target19').show("swing");
				$('#target20').show("swing");
				$('#target21').show("swing");
				$('#target22').show("swing");
				$('#target23').show("swing");
				$('#targetVIDEO').show("swing");
		 	});
			
			$("#ocultartodos").click(function(){
				$('#target1').hide("linear");
				$('#target2').hide("linear");	
				$('#target3').hide("linear");
				$('#target4').hide("linear");
				$('#target5').hide("linear");
				$('#target6').hide("linear");
				$('#target7').hide("linear");
				$('#target8').hide("linear");
				$('#target9').hide("linear");
				$('#target10').hide("linear");
				$('#target11').hide("linear");
				$('#target12').hide("linear");
				$('#target13').hide("linear");
				$('#target14').hide("linear");
				$('#target15').hide("linear");
				$('#target16').hide("linear");
				$('#target17').hide("linear");
				$('#target18').hide("linear");
				$('#target19').hide("linear");
				$('#target20').hide("linear");
				$('#target21').hide("linear");
				$('#target22').hide("linear");
				$('#target23').hide("linear");
				$('#targetVIDEO').hide("linear");
			});










			$("#mostrartodos2").click(function(){
				$('#target1').show("swing");
				$('#target2').show("swing");
				$('#target3').show("swing");
				$('#target4').show("swing");
				$('#target5').show("swing");
				$('#target6').show("swing");
				$('#target7').show("swing");
				$('#target8').show("swing");
				$('#target9').show("swing");
				$('#target10').show("swing");
				$('#target11').show("swing");
				$('#target12').show("swing");
				$('#target13').show("swing");
				$('#target14').show("swing");
				$('#target15').show("swing");
				$('#target16').show("swing");
				$('#target17').show("swing");
				$('#target18').show("swing");
				$('#target19').show("swing");
				$('#target20').show("swing");
				$('#target21').show("swing");
				$('#target22').show("swing");
				$('#target23').show("swing");
				$('#targetVIDEO').show("swing");
		 	});
			
			$("#ocultartodos2").click(function(){
				$('#target1').hide("linear");
				$('#target2').hide("linear");	
				$('#target3').hide("linear");
				$('#target4').hide("linear");
				$('#target5').hide("linear");
				$('#target6').hide("linear");
				$('#target7').hide("linear");
				$('#target8').hide("linear");
				$('#target9').hide("linear");
				$('#target10').hide("linear");
				$('#target11').hide("linear");
				$('#target12').hide("linear");
				$('#target13').hide("linear");
				$('#target14').hide("linear");
				$('#target15').hide("linear");
				$('#target16').hide("linear");
				$('#target17').hide("linear");
				$('#target18').hide("linear");
				$('#target19').hide("linear");
				$('#target20').hide("linear");
				$('#target21').hide("linear");
				$('#target22').hide("linear");
				$('#target23').hide("linear");
				$('#targetVIDEO').hide("linear");
			});
















		});
	</script>