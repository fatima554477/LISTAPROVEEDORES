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
	            url: 'proveedores/controladorP.php',
	            contentType: false,
	            processData: false,
	            data: form_data,
 beforeSend: function() {
$('#1'+nombre).html('<p style="color:green;">CARGANDO archivo!</p>');
$('#mensajeADJUNTOCOL').html('<p style="color:green;">Actualizado!</p>');
    },				
	            success:function(response) {
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







function comasainput(name){
	
const numberNoCommas = (x) => {
  return x.toString().replace(/,/g, "");
}

    var total = document.getElementsByName(name)[0].value;
	 var total2 = numberNoCommas(total)
const numberWithCommas = (x) => {
  return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}	
    document.getElementsByName(name)[0].value = numberWithCommas(total2);	
}


function formato_telefono2(name){
	
const numberNoCommas = (x) => {
  return x.toString().replace(/,/g, "");
}

    var total = document.getElementsByName(name)[0].value;
	 var total2 = numberNoCommas(total)
const numberWithCommas = (x) => {
  return x.toString().replace(/\B(?=(\d{2})+(?!\d))/g, " ");
}	
    document.getElementsByName(name)[0].value = numberWithCommas(total2);	
}



        function formato_telefono(name){
        var TELEFONO = document.getElementsByName(name)[0].value;
        var formato_telefono_1 = "formato_telefono_1";
        $.ajax({
        url:'reportes/controladorMH.php',
        method:'POST',
        data:{TELEFONO:TELEFONO,formato_telefono_1:formato_telefono_1},
        beforeSend:function(){
        },
        success:function(data){
                          //$('#PAPELERIA_DIAS').val(data);                                            
                document.getElementsByName(name)[0].value = data;		  
        }
        });
        }








function cuentaDver(pasarDID){

    $('.only-one').on('change', function() {
        $('.only-one').not(this).prop('checked', false);  
    });

	var checkBox = document.getElementById("cuentaD"+pasarDID);
	var pasarD_text = "";
	if (checkBox.checked == true){
	pasarD_text = "si";
	}else{
	pasarD_text = "no";
	}
	
	$.ajax({
		url:'proveedores/controladorP.php',
		method:'POST',
		data:{pasarD_text:pasarD_text,pasarDID:pasarDID},
		beforeSend:function(){
			$('#mensajeDATOSBANCARIOS12').html('cargando');
		},
		success:function(data){
			$('#mensajeDATOSBANCARIOS12').html("<span id='ACTUALIZADO' >"+data+"</span>");
		}
	});

}












	$(document).ready(function(){






//*OTROS DOCUMENTOS */ 



/*PEGAR AQUI*/

$(document).on('click', '.view_dataotrodocuumodifica', function(){
  //$('#dataModal').modal();
  var personal_id = $(this).attr("id");
  $.ajax({
   url:"proveedores/VistaPreviaOTROSdocuu.php",
   method:"POST",
   data:{personal_id:personal_id},
    beforeSend:function(){  
    $('#mensajeOTRODOCUMENTO').html('CARGANDO'); 
    },    
   success:function(data){
    $('#personal_detalles').html(data);
    $('#dataModal').modal('show');
   }
  });
 });

$(document).on('click', '.view_dataotrodocuuborrar', function(){

  var borra_id_DOCUU = $(this).attr("id");
  var borraotrosdocuu = "borraotrosdocuu";

  //AGREGAR
    $('#personal_detalles3').html();
    $('#dataModal3').modal('show');
  $('#btnYes').click(function() {
  //AGREGAR

  
  $.ajax({
   url:"proveedores/controladorP.php",
   method:"POST",
   data:{borra_id_DOCUU:borra_id_DOCUU,borraotrosdocuu:borraotrosdocuu},
   
    beforeSend:function(){  
    $('#mensajeOTRODOCUMENTO').html('CARGANDO'); 
    },    
   success:function(data){
	   			$('#dataModal3').modal('hide');	   
			$("#mensajeOTRODOCUMENTO").html("<span id='ACTUALIZADO' >"+data+"</span>");			
			$("#reseteOTROSDOCUUp").load(location.href + " #reseteOTROSDOCUUp");
   }
  });
  
    //AGREGAR	
	});
  //AGREGAR	 
  
 });



$("#OTROSDOCUMENTOS").click(function(){
	/*nuevo script pbajar archivos y datos*/
const formData = new FormData($('#OTRODOCUMENTOform')[0]);

$.ajax({
   url:"proveedores/controladorP.php",
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false
}).done(function(data) {

		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){	
			//$('#target3').hide("linear");
			$("#reseteOTROSDOCUUp").load(location.href + " #reseteOTROSDOCUUp");
			$("#mensajeOTRODOCUMENTO").html("<span id='ACTUALIZADO' >"+data+"</span>");
			}else{
			$("#mensajeOTRODOCUMENTO").html(data);
		}
})
.fail(function() {
    console.log("detect error");
});
});

//SCRIPT enviar EMAIL //
$(document).on('click', '#enviar_email_otrodocumento', function(){
var ENVIAR_EMAIL_OTROSDOCU = $('#ENVIAR_EMAIL_OTROSDOCU').val();


        var myCheckboxes = new Array();
        $("input:checked").each(function() {
           myCheckboxes.push($(this).val());
        });
var dataString = $("#form_emai_otrodocumento").serialize();



$.ajax({
url:'proveedores/controladorP.php',
method:'POST',
dataType: 'html',

data: dataString+{ENVIAR_EMAIL_OTROSDOCU:ENVIAR_EMAIL_OTROSDOCU},


beforeSend:function(){
$('#mensajeOTRODOCUMENTO').html('CARGANDO');
},
success:function(data){
$('#mensajeOTRODOCUMENTO').html("<span id='ACTUALIZADO' >"+data+"</span>");

}
});
});









$(document).on('click', '#enviari_email_datosprovee', function(){
	
var DATOSPROVEE_ENVIAR_IMAIL = $('#DATOSPROVEE_ENVIAR_IMAIL').val();

if($('#F_PDESCARGAR_CONTRATO_PROVEEDORES_1').is(":checked")){
var F_PDESCARGAR_CONTRATO_PROVEEDORES_1 ='1';
}else{
var F_PDESCARGAR_CONTRATO_PROVEEDORES_1 ='0';
}
if($('#F_PADJUNTAR_CONTRATO_FIRMADO_1').is(":checked")){
var F_PADJUNTAR_CONTRATO_FIRMADO_1 ='1';
}else{
var F_PADJUNTAR_CONTRATO_FIRMADO_1 ='0';
}
if($('#F_PADJUNTAR_CONTRATO_FIRMADO_2_1').is(":checked")){
var F_PADJUNTAR_CONTRATO_FIRMADO_2_1 ='1';
}else{
var F_PADJUNTAR_CONTRATO_FIRMADO_2_1 ='0';
}
if($('#F_PADJUNTAR_CONVENIOS_1').is(":checked")){
var F_PADJUNTAR_CONVENIOS_1 ='1';
}else{
var F_PADJUNTAR_CONVENIOS_1 ='0';
}
if($('#ADJUNTAR_CONTRATO_INFORMACION_1').is(":checked")){
var ADJUNTAR_CONTRATO_INFORMACION_1 ='1';
}else{
var ADJUNTAR_CONTRATO_INFORMACION_1 ='0';
}
if($('#F_PADJUNTAR_CONSTANCIA_DE_SITUACION_FISCAL_1').is(":checked")){
var F_PADJUNTAR_CONSTANCIA_DE_SITUACION_FISCAL_1 ='1';
}else{
var F_PADJUNTAR_CONSTANCIA_DE_SITUACION_FISCAL_1 ='0';
}
if($('#F_PADJUNTAR_OPINION_CUMPLIMIENTO_1').is(":checked")){
var F_PADJUNTAR_OPINION_CUMPLIMIENTO_1 ='1';
}else{
var F_PADJUNTAR_OPINION_CUMPLIMIENTO_1 ='0';
}
if($('#F_PADJUNTAR_REGIMEN_FISCAL_1').is(":checked")){
var F_PADJUNTAR_REGIMEN_FISCAL_1 ='1';
}else{
var F_PADJUNTAR_REGIMEN_FISCAL_1 ='0';
}
if($('#F_PADJUNTAR_COMPROBANTE_DE_DOMICILIO_1').is(":checked")){
var F_PADJUNTAR_COMPROBANTE_DE_DOMICILIO_1 ='1';
}else{
var F_PADJUNTAR_COMPROBANTE_DE_DOMICILIO_1 ='0';
}
if($('#F_PADJUNTAR_ESTADO_CUENTA_BANCARIO_1').is(":checked")){
var F_PADJUNTAR_ESTADO_CUENTA_BANCARIO_1 ='1';
}else{
var F_PADJUNTAR_ESTADO_CUENTA_BANCARIO_1 ='0';
}
if($('#F_PADJUNTAR_ACTA_CONSTITUTIVA_1').is(":checked")){
var F_PADJUNTAR_ACTA_CONSTITUTIVA_1 ='1';
}else{
var F_PADJUNTAR_ACTA_CONSTITUTIVA_1 ='0';
}
if($('#F_PADJUNTAR_PODER_NOTARIAL_REPRESENTANTE_LEGAL_1').is(":checked")){
var F_PADJUNTAR_PODER_NOTARIAL_REPRESENTANTE_LEGAL_1 ='1';
}else{
var F_PADJUNTAR_PODER_NOTARIAL_REPRESENTANTE_LEGAL_1 ='0';
}
if($('#F_PADJUNTAR_IDENTIFICACION_REPRESENTANTE_LEGAL_1').is(":checked")){
var F_PADJUNTAR_IDENTIFICACION_REPRESENTANTE_LEGAL_1 ='1';
}else{
var F_PADJUNTAR_IDENTIFICACION_REPRESENTANTE_LEGAL_1 ='0';
}




$.ajax({
url:'proveedores/controladorP.php',
method:'POST',
//ADJUNTAR_LOGO_INFORMACION_1
data:{DATOSPROVEE_ENVIAR_IMAIL:DATOSPROVEE_ENVIAR_IMAIL,
F_PDESCARGAR_CONTRATO_PROVEEDORES_1:F_PDESCARGAR_CONTRATO_PROVEEDORES_1,
F_PADJUNTAR_CONTRATO_FIRMADO_1:F_PADJUNTAR_CONTRATO_FIRMADO_1,
F_PADJUNTAR_CONTRATO_FIRMADO_2_1:F_PADJUNTAR_CONTRATO_FIRMADO_2_1,
F_PADJUNTAR_CONVENIOS_1:F_PADJUNTAR_CONVENIOS_1,
ADJUNTAR_CONTRATO_INFORMACION_1:ADJUNTAR_CONTRATO_INFORMACION_1,
F_PADJUNTAR_CONSTANCIA_DE_SITUACION_FISCAL_1:F_PADJUNTAR_CONSTANCIA_DE_SITUACION_FISCAL_1,
F_PADJUNTAR_OPINION_CUMPLIMIENTO_1:F_PADJUNTAR_OPINION_CUMPLIMIENTO_1,
F_PADJUNTAR_REGIMEN_FISCAL_1:F_PADJUNTAR_REGIMEN_FISCAL_1,
F_PADJUNTAR_COMPROBANTE_DE_DOMICILIO_1:F_PADJUNTAR_COMPROBANTE_DE_DOMICILIO_1,
F_PADJUNTAR_ESTADO_CUENTA_BANCARIO_1:F_PADJUNTAR_ESTADO_CUENTA_BANCARIO_1,
F_PADJUNTAR_ACTA_CONSTITUTIVA_1:F_PADJUNTAR_ACTA_CONSTITUTIVA_1,
F_PADJUNTAR_PODER_NOTARIAL_REPRESENTANTE_LEGAL_1:F_PADJUNTAR_PODER_NOTARIAL_REPRESENTANTE_LEGAL_1,
F_PADJUNTAR_IDENTIFICACION_REPRESENTANTE_LEGAL_1:F_PADJUNTAR_IDENTIFICACION_REPRESENTANTE_LEGAL_1},
beforeSend:function(){
$('#mensajeDATOSPROVEEDORES').html('CARGANDO');
},
success:function(data){
$('#mensajeDATOSPROVEEDORES').html("<span id='ACTUALIZADO' >"+data+"</span>");

}
});
});












/*LISTO*/
	$("#enviarDATOSPROVEEDORES").click(function(){
		var formulario = $("#DATOSPROVEEDORESform").serializeArray();
			$.ajax({
			type: "POST",
			url: "proveedores/controladorP.php",
			data: formulario,
		}).done(function(respuesta){

			//$("#mensajeADJUNTOCOL").html(respuesta);
			if($.trim(respuesta)=='Ingresado' || $.trim(respuesta)=='Actualizado'){
			$('#target3').hide("linear");
			$("#mensajeDATOSPROVEEDORES").load(location.href + " #mensajeDATOSPROVEEDORES");
			}else{
			$("#mensajeDATOSPROVEEDORES").html(respuesta);				
			}

			});
	});	




/*LISTO*/                                                                                       
	$("#enviarINFOPRODSERV").click(function(){
		var formulario = $("#INFOPRODSERVform").serializeArray();
			$.ajax({
			type: "POST",
			url: "proveedores/controladorP.php",
			data: formulario,
		}).done(function(respuesta){

			//$("#mensajeADJUNTOCOL").html(respuesta);
			if($.trim(respuesta)=='Ingresado' || $.trim(respuesta)=='Actualizado'){
			$('#target1').hide("linear");
			$("#mensajeINFOPRODSERV").load(location.href + " #mensajeINFOPRODSERV");
			}else{
			$("#mensajeINFOPRODSERV").html(respuesta);				
			}

			});
	});	

//SCRIPT enviar EMAIL
           $(document).on('click', '#enviarPROservprod', function(){
             var SERVI_ENVIAR_IMAIL = $('#SERVI_ENVIAR_IMAIL').val();

           $.ajax({
            url:'proveedores/controladorP.php',
            method:'POST',
            data:{SERVI_ENVIAR_IMAIL:SERVI_ENVIAR_IMAIL},
            beforeSend:function(){
            $('#mensajeINFOPRODSERV').html('CARGANDO');
},
            success:function(data){
           $('#mensajeINFOPRODSERV').html("<span id='ACTUALIZADO' >"+data+"</span>");

}
});
});








//*enviar fotos productos del proveedor//*
       

/*PEGAR AQUI*/

$(document).on('click', '.view_dataotrosservmodifica', function(){
  //$('#dataModal').modal();
  var personal_id = $(this).attr("id");
  $.ajax({
   url:"proveedores/VistaPreviaOTROSservicios.php",
   method:"POST",
   data:{personal_id:personal_id},
    beforeSend:function(){  
    $('#mensajeOTROSP').html('CARGANDO'); 
    },    
   success:function(data){
    $('#personal_detalles').html(data);
    $('#dataModal').modal('show');
   }
  });
 });

$(document).on('click', '.view_dataotrosservborrar', function(){
  //$('#dataModal').modal();
  var borra_id_servis = $(this).attr("id");
  var borraotrosservicios = "borraotrosservicios";

  //AGREGAR
    $('#personal_detalles3').html();
    $('#dataModal3').modal('show');
  $('#btnYes').click(function() {
  //AGREGAR

  
  $.ajax({
   url:"proveedores/controladorP.php",
   method:"POST",
   data:{borra_id_servis:borra_id_servis,borraotrosservicios:borraotrosservicios},
   
    beforeSend:function(){  
    $('#mensajeOTROSP').html('CARGANDO'); 
    },    
   success:function(data){
	   			$('#dataModal3').modal('hide');	   
			$("#mensajeOTROSP").html("<span id='ACTUALIZADO' >"+data+"</span>");			
			$("#resetePRODUCYSERVp").load(location.href + " #resetePRODUCYSERVp");
   }
  });
  
    //AGREGAR	
	});
  //AGREGAR	 
  
 });



$("#enviarOTROSP").click(function(){
	/*nuevo script pbajar archivos y datos*/
const formData = new FormData($('#POTROSPform')[0]);

$.ajax({
   url:"proveedores/controladorP.php",
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false
}).done(function(data) {
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){	
			//$('#target3').hide("linear");
			$("#resetePRODUCYSERVp").load(location.href + " #resetePRODUCYSERVp");
			$("#mensajeOTROSP").html("<span id='ACTUALIZADO' >"+data+"</span>");
			}else{
			$("#mensajeOTROSP").html(data);
		}
})
.fail(function() {
    console.log("detect error");
});
});


//SCRIPT enviar EMAIL //
$(document).on('click', '#enviar_email_otrosproductos', function(){
var OTROSPRO_ENVIAR_IMAIL = $('#OTROSPRO_ENVIAR_IMAIL').val();


        var myCheckboxes = new Array();
        $("input:checked").each(function() {
           myCheckboxes.push($(this).val());
        });
var dataString = $("#form_emai_produservii").serialize();



$.ajax({
url:'proveedores/controladorP.php',
method:'POST',
dataType: 'html',

data: dataString+{OTROSPRO_ENVIAR_IMAIL:OTROSPRO_ENVIAR_IMAIL},


beforeSend:function(){
$('#mensajeOTROSP').html('CARGANDO');
},
success:function(data){
$('#mensajeOTROSP').html("<span id='ACTUALIZADO' >"+data+"</span>");

}
});
});





//*DOCUMENTOS FISCALES DEL PROVEEDOR*/ 



/*PEGAR AQUI*/

$(document).on('click', '.view_datadocufiscalmodifica', function(){
  //$('#dataModal').modal();
  var personal_id = $(this).attr("id");
  $.ajax({
   url:"proveedores/VistaPreviaDOCUMENTOfiscal.php",
   method:"POST",
   data:{personal_id:personal_id},
    beforeSend:function(){  
    $('#mensajeDOCUFISCAL').html('CARGANDO'); 
    },    
   success:function(data){
    $('#personal_detalles').html(data);
    $('#dataModal').modal('show');
   }
  });
 });

$(document).on('click', '.view_datadocufiscalborrar', function(){
  //$('#dataModal').modal();
  var borra_id_FISCAL = $(this).attr("id");
  var borradocufiscal = "borradocufiscal";

  //AGREGAR
    $('#personal_detalles3').html();
    $('#dataModal3').modal('show');
  $('#btnYes').click(function() {
  //AGREGAR

  
  $.ajax({
   url:"proveedores/controladorP.php",
   method:"POST",
   data:{borra_id_FISCAL:borra_id_FISCAL,borradocufiscal:borradocufiscal},
   
    beforeSend:function(){  
    $('#mensajeDOCUFISCAL').html('CARGANDO'); 
    },    
   success:function(data){
	   			$('#dataModal3').modal('hide');	   
			$("#mensajeDOCUFISCAL").html("<span id='ACTUALIZADO' >"+data+"</span>");			
			$("#resetedocufiscal").load(location.href + " #resetedocufiscal");
   }
  });
    //AGREGAR	
	});
  //AGREGAR	 
  
 });



$("#enviarDOCUMENTOSFISCALES").click(function(){
	/*nuevo script pbajar archivos y datos*/
const formData = new FormData($('#DOCUFISCALform')[0]);

$.ajax({
   url:"proveedores/controladorP.php",
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false
}).done(function(data) {

		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){	
			//$('#target3').hide("linear");
			$("#resetedocufiscal").load(location.href + " #resetedocufiscal");
			$("#mensajeDOCUFISCAL").html("<span id='ACTUALIZADO' >"+data+"</span>");
			}else{
			$("#mensajeDOCUFISCAL").html(data);
		}
})
.fail(function() {
    console.log("detect error");
});
});

//SCRIPT enviar EMAIL //
$(document).on('click', '#enviar_email_DOCUFISCAL', function(){
var ENVIAR_EMAIL_DOCUFISCAL = $('#ENVIAR_EMAIL_DOCUFISCAL').val();


        var myCheckboxes = new Array();
        $("input:checked").each(function() {
           myCheckboxes.push($(this).val());
        });
var dataString = $("#form_emai_docuFISCAL").serialize();



$.ajax({
url:'proveedores/controladorP.php',
method:'POST',
dataType: 'html',

data: dataString+{ENVIAR_EMAIL_DOCUFISCAL:ENVIAR_EMAIL_DOCUFISCAL},


beforeSend:function(){
$('#mensajeDOCUFISCAL').html('CARGANDO');
},
success:function(data){
$('#mensajeDOCUFISCAL').html("<span id='ACTUALIZADO' >"+data+"</span>");

}
});
});












//*enviar liga de productos del proveedor//*
       

/*PEGAR AQUI*/

$(document).on('click', '.view_dataLIGAservmodifica', function(){
  //$('#dataModal').modal();
  var personal_id = $(this).attr("id");
  $.ajax({
   url:"proveedores/VistaPreviaLIGAservicios.php",
   method:"POST",
   data:{personal_id:personal_id},
    beforeSend:function(){  
    $('#mensajeLIGAPRO').html('CARGANDO'); 
    },    
   success:function(data){
    $('#personal_detalles').html(data);
    $('#dataModal').modal('show');
   }
  });
 });

$(document).on('click', '.view_dataLIGAservborrar', function(){
  //$('#dataModal').modal(); view_dataLIGAservborrar
  var borra_id_LIGA = $(this).attr("id");
  var borraligaservicios = "borraligaservicios";

  //AGREGAR
    $('#personal_detalles3').html();
    $('#dataModal3').modal('show');
  $('#btnYes').click(function() {
  //AGREGAR

  
  $.ajax({
   url:"proveedores/controladorP.php",
   method:"POST",
   data:{borra_id_LIGA:borra_id_LIGA,borraligaservicios:borraligaservicios},
   
    beforeSend:function(){  
    $('#mensajeLIGAPRO').html('CARGANDO'); 
    },    
   success:function(data){
	   			$('#dataModal3').modal('hide');	   
			$("#mensajeLIGAPRO").html("<span id='ACTUALIZADO' >"+data+"</span>");			
			$("#reseteligaPRODUCp").load(location.href + " #reseteligaPRODUCp");
   }
  });
  
    //AGREGAR	
	});
  //AGREGAR	 
  
 });



$("#enviarligaPROD").click(function(){
	/*nuevo script pbajar archivos y datos*/
const formData = new FormData($('#LIGAPRODUCTOSform')[0]);

$.ajax({
   url:"proveedores/controladorP.php",
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false
}).done(function(data) {
	//view_dataLIGAservmodifica
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){	
			//$('#target3').hide("linear");
			$("#reseteligaPRODUCp").load(location.href + " #reseteligaPRODUCp");
			$("#mensajeLIGAPRO").html("<span id='ACTUALIZADO' >"+data+"</span>");
			}else{
			$("#mensajeLIGAPRO").html(data);
		}
})
.fail(function() {
    console.log("detect error");
});
});


//SCRIPT enviar EMAIL //
$(document).on('click', '#enviar_email_productosliga', function(){
var LIGAPRO_ENVIAR_IMAIL = $('#LIGAPRO_ENVIAR_IMAIL').val();


        var myCheckboxes = new Array();
        $("input:checked").each(function() {
           myCheckboxes.push($(this).val());
        });
var dataString = $("#form_emai_LIGApro").serialize();



$.ajax({
url:'proveedores/controladorP.php',
method:'POST',
dataType: 'html',

data: dataString+{LIGAPRO_ENVIAR_IMAIL:LIGAPRO_ENVIAR_IMAIL},


beforeSend:function(){
$('#mensajeLIGAPRO').html('CARGANDO');
},
success:function(data){
$('#mensajeLIGAPRO').html("<span id='ACTUALIZADO' >"+data+"</span>");

}
});
});











//*enviar presentacion de productos del proveedor//*
       

/*PEGAR AQUI*/

$(document).on('click', '.view_datapresenservmodifica', function(){
  //$('#dataModal').modal();
  var personal_id = $(this).attr("id");
  $.ajax({
   url:"proveedores/VistaPreviaPRESservicios.php",
   method:"POST",
   data:{personal_id:personal_id},
    beforeSend:function(){  
    $('#mensajePRESENTACIONP').html('CARGANDO'); 
    },    
   success:function(data){
    $('#personal_detalles').html(data);
    $('#dataModal').modal('show');
   }
  });
 });

$(document).on('click', '.view_datapresenservborrar', function(){

  var borra_id_PRES = $(this).attr("id");
  var borrapreseservicios = "borrapreseservicios";

  //AGREGAR
    $('#personal_detalles3').html();
    $('#dataModal3').modal('show');
  $('#btnYes').click(function() {
  //AGREGAR

  
  $.ajax({
   url:"proveedores/controladorP.php",
   method:"POST",
   data:{borra_id_PRES:borra_id_PRES,borrapreseservicios:borrapreseservicios},
   
    beforeSend:function(){  
    $('#mensajePRESENTACIONP').html('CARGANDO'); 
    },    
   success:function(data){
	   			$('#dataModal3').modal('hide');	   
			$("#mensajePRESENTACIONP").html("<span id='ACTUALIZADO' >"+data+"</span>");			
			$("#resetePRESENTACIONp").load(location.href + " #resetePRESENTACIONp");
   }
  });
  
    //AGREGAR	
	});
  //AGREGAR	 
  
 });



$("#enviarPRESENTAP").click(function(){
	/*nuevo script pbajar archivos y datos*/
const formData = new FormData($('#PRESENTACIONPform')[0]);

$.ajax({
   url:"proveedores/controladorP.php",
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false
}).done(function(data) {
	//view_dataLIGAservmodifica
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){	
			//$('#target3').hide("linear");
			$("#resetePRESENTACIONp").load(location.href + " #resetePRESENTACIONp");
			$("#mensajePRESENTACIONP").html("<span id='ACTUALIZADO' >"+data+"</span>");
			}else{
			$("#mensajePRESENTACIONP").html(data);
		}
})
.fail(function() {
    console.log("detect error");
});
});

//SCRIPT enviar EMAIL //
$(document).on('click', '#enviar_email_presenta', function(){
var EMAIL_RESENTACION_PRODUCTOS = $('#EMAIL_RESENTACION_PRODUCTOS').val();


        var myCheckboxes = new Array();
        $("input:checked").each(function() {
           myCheckboxes.push($(this).val());
        });
var dataString = $("#form_emai_presentacion").serialize();



$.ajax({
url:'proveedores/controladorP.php',
method:'POST',
dataType: 'html',

data: dataString+{EMAIL_RESENTACION_PRODUCTOS:EMAIL_RESENTACION_PRODUCTOS},


beforeSend:function(){
$('#mensajePRESENTACIONP').html('CARGANDO');
},
success:function(data){
$('#mensajePRESENTACIONP').html("<span id='ACTUALIZADO' >"+data+"</span>");

}
});
});


















/*LISTO enviarDIRECEP*/
	$("#enviarDIRECEP").click(function(){
		var formulario = $("#PDIRECEMPRE1form").serializeArray();
			$.ajax({
			type: "POST",
			url: "proveedores/controladorP.php",
			data: formulario,
		}).done(function(respuesta){

			//$("#mensajeADJUNTOCOL").html(respuesta);
			if($.trim(respuesta)=='Ingresado' || $.trim(respuesta)=='Actualizado'){
			$('#target10').hide("linear");
			$("#mensajeDIRECEP").load(location.href + " #mensajeDIRECEP");
			}else{
			$("#mensajeDIRECEP").html(respuesta);				
			}

			});
	});	







//SCRIPT enviar EMAIL
$(document).on('click', '#enviarPDirfiscal', function(){
var PDIRECCIONF_ENVIAR_IMAIL = $('#PDIRECCIONF_ENVIAR_IMAIL').val();

$.ajax({
url:'proveedores/controladorP.php',
method:'POST',
data:{PDIRECCIONF_ENVIAR_IMAIL:PDIRECCIONF_ENVIAR_IMAIL},
beforeSend:function(){
$('#mensajeDIRECEP').html('CARGANDO');
},
success:function(data){
$('#mensajeDIRECEP').html("<span id='ACTUALIZADO' >"+data+"</span>");

}
});
});






/*LISTO*/
	$("#enviarMETODOPAGO").click(function(){
		var formulario = $("#PMETODOPAGOform").serializeArray();
			$.ajax({
			type: "POST",
			url: "proveedores/controladorP.php",
			data: formulario,
		}).done(function(respuesta){

			//$("#mensajeADJUNTOCOL").html(respuesta);
			if($.trim(respuesta)=='Ingresado' || $.trim(respuesta)=='Actualizado'){
			$('#target7').hide("linear");
			$("#mensajeMETODOP").load(location.href + " #mensajeMETODOP");
			}else{
			$("#mensajeMETODOP").html(respuesta);				
			}

			});
	});


//SCRIPT enviar EMAIL
           $(document).on('click', '#enviar_email_metodopago', function(){
             var METODOPAGO_ENVIAR_IMAIL = $('#METODOPAGO_ENVIAR_IMAIL').val();

           $.ajax({
            url:'proveedores/controladorP.php',
            method:'POST',
            data:{METODOPAGO_ENVIAR_IMAIL:METODOPAGO_ENVIAR_IMAIL},
            beforeSend:function(){
            $('#mensajeMETODOP').html('CARGANDO');
},
            success:function(data){
           $('#mensajeMETODOP').html("<span id='ACTUALIZADO' >"+data+"</span>");

}
});
});









         //CONTACTOS DE PROVEEDORES//


$(document).on('click', '.view_dataCONTACTOSPROOmodifica', function(){
  //$('#dataModal').modal();
  var personal_id = $(this).attr("id");
  $.ajax({
   url:"proveedores/VistaPreviaCONTACTOSprovee.php",
   method:"POST",
   data:{personal_id:personal_id},
    beforeSend:function(){  
    $('#mensajeNOMBRECONTACTO1').html('CARGANDO'); 
    },    
   success:function(data){
    $('#personal_detalles').html(data);
    $('#dataModal').modal('show');
   }
  });
 });

$(document).on('click', '.view_dataCONTACTOSPROOborrar', function(){

  var borra_id_conp = $(this).attr("id");
  var borracontactprovee = "borracontactprovee";

  //AGREGAR
    $('#personal_detalles3').html();
    $('#dataModal3').modal('show');
  $('#btnYes').click(function() {
  //AGREGAR

  
  $.ajax({
   url:"proveedores/controladorP.php",
   method:"POST",
   data:{borra_id_conp:borra_id_conp,borracontactprovee:borracontactprovee},
   
    beforeSend:function(){  
    $('#mensajeNOMBRECONTACTO1').html('CARGANDO'); 
    },    
   success:function(data){
	   			$('#dataModal3').modal('hide');	   
			$("#mensajeNOMBRECONTACTO1").html("<span id='ACTUALIZADO' >"+data+"</span>");			
			$("#resetCONTACTOSP").load(location.href + " #resetCONTACTOSP");
   }
  });
  
    //AGREGAR	
	});
  //AGREGAR	 
  
 });


$("#enviarNOMBRECONTACTO1").click(function(){

const formData = new FormData($('#NOMBRECONTACTO1form')[0]);

$.ajax({
   url:"proveedores/controladorP.php",
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false
}).done(function(data) {

		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){	

			$("#resetCONTACTOSP").load(location.href + " #resetCONTACTOSP");
			$("#mensajeNOMBRECONTACTO1").html("<span id='ACTUALIZADO' >"+data+"</span>");
			}else{
			$("#mensajeNOMBRECONTACTO1").html(data);
		}
})
.fail(function() {
    console.log("detect error");
});
});

	//SCRIPT enviar EMAIL
$(document).on('click', '#enviarimailCONTP', function(){
var CONTACTOP_ENVIAR_IMAIL = $('#CONTACTOP_ENVIAR_IMAIL').val();


        var myCheckboxes = new Array();
        $("input:checked").each(function() {
           myCheckboxes.push($(this).val());
        });
var dataString = $("#form_emai_CONTACTOSP").serialize();  



$.ajax({
url:'proveedores/controladorP.php',
method:'POST',
dataType: 'html',

data: dataString+{CONTACTOP_ENVIAR_IMAIL:CONTACTOP_ENVIAR_IMAIL},


beforeSend:function(){
$('#mensajeNOMBRECONTACTO1').html('CARGANDO');
},
success:function(data){
$('#mensajeNOMBRECONTACTO1').html("<span id='ACTUALIZADO' >"+data+"</span>");

}
});
});
	
	
	
	
	
	
	
	






	
	


         //DIRECCION DE OFICINAS Y BODEGAS //


$(document).on('click', '.view_dataproBodegamodifica', function(){
  //$('#dataModal').modal();
  var personal_id = $(this).attr("id");
  $.ajax({
   url:"proveedores/VistaPreviaBODEGASPROprovee.php",
   method:"POST",
   data:{personal_id:personal_id},
    beforeSend:function(){  
    $('#mensajeDIROFICINASBODEGAS').html('CARGANDO'); 
    },    
   success:function(data){
    $('#personal_detalles').html(data);
    $('#dataModal').modal('show');
   }
  });
 });

$(document).on('click', '.view_dataproBodegaborrar', function(){

  var borra_id_bodeP = $(this).attr("id");
  var borrabodegasprovee = "borrabodegasprovee";

  //AGREGAR
    $('#personal_detalles3').html();
    $('#dataModal3').modal('show');
  $('#btnYes').click(function() {
  //AGREGAR

  
  $.ajax({
   url:"proveedores/controladorP.php",
   method:"POST",
   data:{borra_id_bodeP:borra_id_bodeP,borrabodegasprovee:borrabodegasprovee},
   
    beforeSend:function(){  
    $('#mensajeDIROFICINASBODEGAS').html('CARGANDO'); 
    },    
   success:function(data){
	   			$('#dataModal3').modal('hide');	   
			$("#mensajeDIROFICINASBODEGAS").html("<span id='ACTUALIZADO' >"+data+"</span>");			
			$("#resetBodegaP").load(location.href + " #resetBodegaP");
   }
  });
  
    //AGREGAR	
	});
  //AGREGAR	 
  
 });


$("#enviarDIROFICINASBODEGAS").click(function(){

const formData = new FormData($('#DIROFICINASBODEGASform')[0]);

$.ajax({
   url:"proveedores/controladorP.php",
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false
}).done(function(data) {

		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){	

			$("#resetBodegaP").load(location.href + " #resetBodegaP");
			$("#mensajeDIROFICINASBODEGAS").html("<span id='ACTUALIZADO' >"+data+"</span>");
			}else{
			$("#mensajeDIROFICINASBODEGAS").html(data);
		}
})
.fail(function() {
    console.log("detect error");
});
});

	//SCRIPT enviar EMAIL
$(document).on('click', '#enviaremailBODEGAS', function(){
var BODEGAS_ENVIAR_IMAIL = $('#BODEGAS_ENVIAR_IMAIL').val();


        var myCheckboxes = new Array();
        $("input:checked").each(function() {
           myCheckboxes.push($(this).val());
        });
var dataString = $("#form_emai_bodega").serialize();  



$.ajax({
url:'proveedores/controladorP.php',
method:'POST',
dataType: 'html',

data: dataString+{BODEGAS_ENVIAR_IMAIL:BODEGAS_ENVIAR_IMAIL},


beforeSend:function(){
$('#mensajeDIROFICINASBODEGAS').html('CARGANDO');
},
success:function(data){
$('#mensajeDIROFICINASBODEGAS').html("<span id='ACTUALIZADO' >"+data+"</span>");

}
});
});
		







 
 
 
 
 
 
 
 
 
 
 
 
 


     //DATOS BACANRIOS //

$("#enviarDATOSBANCARIOS1").click(function(){
	/*nuevo script pbajar archivos y datos*/
const formData = new FormData($('#DATOSBANCARIOS1form')[0]);

$.ajax({
    url: 'proveedores/controladorP.php',
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false
}).done(function(data) {
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){	
		
			$("#mensajeDATOSBANCARIOS1").html("<span id='ACTUALIZADO' >"+data+"</span>");
$('#resetBancario1p').load(location.href + ' #resetBancario1p');			
			}else{
			$("#mensajeDATOSBANCARIOS1").html(data);
		}
})
.fail(function() {
    console.log("detect error");
});
});



$(document).on('click', '.view_data_bancario1p_modifica', function(){
var personal_id = $(this).attr('id');
$.ajax({
url:'proveedores/VistaPreviaDatosBancario1.php',
method:'POST',
data:{personal_id:personal_id},
beforeSend:function(){
$('#mensajeDATOSBANCARIOS1').html('CARGANDO');
},
success:function(data){
$('#personal_detalles').html(data);
$('#dataModal').modal('toggle');
}
});
});


$(document).on('click', '.view_databancario1borrar', function(){
var borra_id_bancaP = $(this).attr('id');
var borra_datos_bancario1 = 'borra_datos_bancario1';
$('#personal_detalles3').html();
$('#dataModal3').modal('show');
$('#btnYes').click(function() {
$.ajax({
url:'proveedores/controladorP.php',
method:'POST',
data:{borra_id_bancaP:borra_id_bancaP,borra_datos_bancario1:borra_datos_bancario1},
beforeSend:function(){
$('#mensajeREFERENCIAS').html('CARGANDO');
},
success:function(data){
$('#dataModal3').modal('hide');
$('#mensajeDATOSBANCARIOS1').html("<span id='ACTUALIZADO' >"+data+"</span>");
$('#resetBancario1p').load(location.href + ' #resetBancario1p');
}
});
});
});


//SCRIPT enviar EMAIL
$(document).on('click', '#enviar_email_bancarios', function(){
var DAbancaPRO_ENVIAR_IMAIL = $('#DAbancaPRO_ENVIAR_IMAIL').val();


        var myCheckboxes = new Array();
        $("input:checked").each(function() {
           myCheckboxes.push($(this).val());
        });
var dataString = $("#form_emai_DATOSBpro").serialize();  



$.ajax({
url:'proveedores/controladorP.php',
method:'POST',
dataType: 'html',

data: dataString+{DAbancaPRO_ENVIAR_IMAIL:DAbancaPRO_ENVIAR_IMAIL},


beforeSend:function(){
$('#mensajeDATOSBANCARIOS1').html('CARGANDO');
},
success:function(data){
$('#mensajeDATOSBANCARIOS1').html("<span id='ACTUALIZADO' >"+data+"</span>");

}
});
});







/*$("#view_data_bancario1p_modifica").click(function(){
$.ajax({
//URL
url:"proveedores/VistaPreviaDatosBancario1.php",
method:"POST",
//FORMULARIO
data:$("#DATOSBANCARIOS1form").serialize(),
beforeSend:function(){
//MENSAJE personal_id
$("#mensajeDATOSBANCARIOS1").html("CARGANDO");
},
success:function(data){
if($.trim(data)=="Ingresado" || $.trim(data)=="Actualizado"){
$("#add_data_Modal").modal("hide");
//RESET
$("#resetBancario1p").load(location.href + " #resetBancario1p");
//MENSAJE
$("#mensajeDATOSBANCARIOS1").html("<span id='ACTUALIZADO' >"+data+"</span>");
}else{
//MENSAJE
$("#mensajeDATOSBANCARIOS1").html(data);
}
}
});
});*/
	
	
	
	
	
	
	
	
	
	
	
	
	
	
//SCRIPT PARA BORRAR
$(document).on('click', '.view_dataXXXXXXXXXX', function(){
var borra_id_XXXXXXXXXX = $(this).attr('id');
var borraXXXXXXXXXX = 'borraXXXXXXXXXX';
$('#personal_detalles3').html();
$('#dataModal3').modal('show');
$('#btnYes').click(function() {
$.ajax({
url:'proveedores/controladorP.php',
method:'POST',
data:{borra_id_XXXXXXXXXX:borra_id_XXXXXXXXXX,borraXXXXXXXXXX:borraXXXXXXXXXX},
beforeSend:function(){
$('#XXXXXXXXXX').html('CARGANDO');
},
success:function(data){
$('#dataModal3').modal('hide');
$('#XXXXXXXXXX').html("<span id='ACTUALIZADO' >"+data+"</span>");
$('#resetXXXXXXXXXX').load(location.href + ' #resetXXXXXXXXXX');
}
});
});
});	
	
	
	
/*LISTO*/
	$("#enviarDATOSBANCARIOS2").click(function(){
		var formulario = $("#DATOSBANCARIOS2form").serializeArray();
			$.ajax({
			type: "POST",
			url: "proveedores/controladorP.php",
			data: formulario,
		}).done(function(respuesta){

			//$("#mensajeADJUNTOCOL").html(respuesta);
			if($.trim(respuesta)=='Ingresado' || $.trim(respuesta)=='Actualizado'){
			$('#target12').hide("linear");
			$("#mensajeDATOSBANCARIOS2").load(location.href + " #mensajeDATOSBANCARIOS2");
			}else{
			$("#mensajeDATOSBANCARIOS2").html(respuesta);				
			}

			});
	});
	


	
         //REFERENCIAS COMERCIALES //


$(document).on('click', '.view_data_referenciap_modifica', function(){
  //$('#dataModal').modal();
  var personal_id = $(this).attr("id");
  $.ajax({
   url:"proveedores/VistaPreviaREFERPROprovee.php",
   method:"POST",
   data:{personal_id:personal_id},
    beforeSend:function(){  
    $('#mensajeREFERENCIASCOMERCIALES1').html('CARGANDO'); 
    },    
   success:function(data){
    $('#personal_detalles').html(data);
    $('#dataModal').modal('show');
   }
  });
 });

$(document).on('click', '.view_datareferenciaborrar', function(){

  var borra_id_REFEP = $(this).attr("id");
  var borrareferenprovee = "borrareferenprovee";

  //AGREGAR
    $('#personal_detalles3').html();
    $('#dataModal3').modal('show');
  $('#btnYes').click(function() {
  //AGREGAR

  
  $.ajax({
   url:"proveedores/controladorP.php",
   method:"POST",
   data:{borra_id_REFEP:borra_id_REFEP,borrareferenprovee:borrareferenprovee},
   
    beforeSend:function(){  
    $('#mensajeREFERENCIASCOMERCIALES1').html('CARGANDO'); 
    },    
   success:function(data){
	   			$('#dataModal3').modal('hide');	   
			$("#mensajeREFERENCIASCOMERCIALES1").html("<span id='ACTUALIZADO' >"+data+"</span>");			
			$("#resetPROrefe1p").load(location.href + " #resetPROrefe1p");
   }
  });
  
    //AGREGAR	
	});
  //AGREGAR	 
  
 });


$("#enviarREFERENCIASCOMERCIALES1").click(function(){

const formData = new FormData($('#REFERENCIASCOMERCIALES1form')[0]);

$.ajax({
   url:"proveedores/controladorP.php",
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false
}).done(function(data) {

		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){	

			$("#resetPROrefe1p").load(location.href + " #resetPROrefe1p");
			$("#mensajeREFERENCIASCOMERCIALES1").html("<span id='ACTUALIZADO' >"+data+"</span>");
			}else{
			$("#mensajeREFERENCIASCOMERCIALES1").html(data);
		}
})
.fail(function() {
    console.log("detect error");
});
});

//SCRIPT enviar EMAIL
$(document).on('click', '#enviar_email_refePRO', function(){
var REFE_ENVIAR_IMAIL = $('#REFE_ENVIAR_IMAIL').val();


        var myCheckboxes = new Array();
        $("input:checked").each(function() {
           myCheckboxes.push($(this).val());
        });
var dataString = $("#form_emai_REFEpro").serialize();  



$.ajax({
url:'proveedores/controladorP.php',
method:'POST',
dataType: 'html',

data: dataString+{REFE_ENVIAR_IMAIL:REFE_ENVIAR_IMAIL},


beforeSend:function(){
$('#mensajeREFERENCIASCOMERCIALES1').html('CARGANDO');
},
success:function(data){
$('#mensajeREFERENCIASCOMERCIALES1').html("<span id='ACTUALIZADO' >"+data+"</span>");

}
});
});


	
	
	
	
	
	
/*LISTO*/
	$("#enviarREFERENCIASCOMERCIALES2").click(function(){
		var formulario = $("#REFERENCIASCOMERCIALES2form").serializeArray();
			$.ajax({
			type: "POST",
			url: "proveedores/controladorP.php",
			data: formulario,
		}).done(function(respuesta){

			//$("#mensajeADJUNTOCOL").html(respuesta);
			if($.trim(respuesta)=='Ingresado' || $.trim(respuesta)=='Actualizado'){
			$('#target14').hide("linear");
			$("#mensajeREFERENCIASCOMERCIALES2").load(location.href + " #mensajeREFERENCIASCOMERCIALES2");
			}else{
			$("#mensajeREFERENCIASCOMERCIALES2").html(respuesta);				
			}

			});
	});	
	


/*LISTO*/
	$("#enviarREFERENCIASCOMERCIALES3").click(function(){
		var formulario = $("#REFERENCIASCOMERCIALES3form").serializeArray();
			$.ajax({
			type: "POST",
			url: "proveedores/controladorP.php",
			data: formulario,
		}).done(function(respuesta){

			//$("#mensajeADJUNTOCOL").html(respuesta);
			if($.trim(respuesta)=='Ingresado' || $.trim(respuesta)=='Actualizado'){
			$('#target15').hide("linear");
			$("#mensajeREFERENCIASCOMERCIALES3").load(location.href + " #mensajeREFERENCIASCOMERCIALES3");
			}else{
			$("#mensajeREFERENCIASCOMERCIALES3").html(respuesta);				
			}

			});
	});	
	
	
	
//SCRIPT PROVEEDOR DE //
$(document).on('click', '#enviarproveedorDE', function(){
//var ENVIAR_EMAIL_OTROSDOCU = $('#ENVIAR_EMAIL_OTROSDOCU').val();


        var myCheckboxes = new Array();
        $("input:checked").each(function() {
           myCheckboxes.push($(this).val());
        });
var dataString = $("#PROVEEDORDEform").serialize();



$.ajax({
url:'proveedores/controladorP.php',
method:'POST',
dataType: 'html',

//data: dataString+{ENVIAR_EMAIL_OTROSDOCU:ENVIAR_EMAIL_OTROSDOCU},
data: dataString,

beforeSend:function(){
$('#mensajeproveedorDE').html('CARGANDO');
},
success:function(data){
$('#mensajeproveedorDE').html("<span id='ACTUALIZADO' >"+data+"</span>");

}
});
});






         //NUEVO DOCUMENTO //


$(document).on('click', '.view_dataNUEVOdocumento', function(){
  //$('#dataModal').modal();
  var personal_id = $(this).attr("id");
  $.ajax({
   url:"proveedores/VistaPreviaNUEVODOCU.php",
   method:"POST",
   data:{personal_id:personal_id},
    beforeSend:function(){  
    $('#mensajeDOCUnuevo').html('CARGANDO'); 
    },    
   success:function(data){
    $('#personal_detalles').html(data);
    $('#dataModal').modal('show');
   }
  });
 });

$(document).on('click', '.view_databorraNUEVOdocumento', function(){

  var borra_id_NUEVOD = $(this).attr("id");
  var BORRARNUEVOFISCAL = "BORRARNUEVOFISCAL";

  //AGREGAR
    $('#personal_detalles3').html();
    $('#dataModal3').modal('show');
  $('#btnYes').click(function() {
  //AGREGAR

  
  $.ajax({
   url:"proveedores/controladorP.php",
   method:"POST",
   data:{borra_id_NUEVOD:borra_id_NUEVOD,BORRARNUEVOFISCAL:BORRARNUEVOFISCAL},
   
    beforeSend:function(){  
    $('#mensajeDOCUnuevo').html('CARGANDO'); 
    },    
   success:function(data){
	   			$('#dataModal3').modal('hide');	   
			$("#mensajeDOCUnuevo").html("<span id='ACTUALIZADO' >"+data+"</span>");			
			$("#reseteateNUEVO").load(location.href + " #reseteateNUEVO");
   }
  });
  
    //AGREGAR	
	});
  //AGREGAR	 
  
 });


$("#enviarNUEVOdocu").click(function(){

const formData = new FormData($('#DOCUMENTONUEVOform')[0]);

$.ajax({
   url:"proveedores/controladorP.php",
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false
}).done(function(data) {

		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){	

			$("#documentoslegales1a12").load(location.href + " #documentoslegales1a12");
			$("#reseteateNUEVO").load(location.href + " #reseteateNUEVO");			
			$("#mensajeDOCUnuevo").html("<span id='ACTUALIZADO' >"+data+"</span>");
			}else{
			$("#mensajeDOCUnuevo").html(data);
		}
})
.fail(function() {
    console.log("detect error");
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
				$('#targetVIDEO').hide("linear");
			});

		});
		
	</script>