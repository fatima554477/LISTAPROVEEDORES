<script type="text/javascript">
	
	/*filtro */

/* iniciaB1*/

		$(function() {
			load(1);
		});
		function load(page){
			var query=$("#NOMBRE_EVENTO").val();
			var DEPARTAMENTO2=$("#DEPARTAMENTO2WE").val();var nommbrerazon=$("#nommbrerazon_1").val();
var P_NOMBRE_FISCAL_RS_EMPRESA=$("#P_NOMBRE_FISCAL_RS_EMPRESA_1").val();
var P_RFC_MTDP=$("#P_RFC_MTDP_1").val();
var usuario=$("#usuario_1").val();
var contrasenia=$("#contrasenia_1").val();
var email=$("#email_1").val();
var validaLISTADO=$("#validaLISTADO_1").val();
var P_TELEFONO_1_EMPRESA=$("#P_TELEFONO_1_EMPRESA").val();
var CIUDAD_SERVICIO=$("#CIUDAD_SERVICIO").val();
var PAIS_SERVICIO=$("#PAIS_SERVICIO").val();
var PCONTACTADO_POR=$("#PCONTACTADO_POR").val();
var PRODUCTO_O_SERVICIO_9=$("#PRODUCTO_O_SERVICIO_9_1").val();
var CONVENIO_PROVEEDOR=$("#CONVENIO_PROVEEDOR_1").val();


/*termina copiar y pegar*/
			
			var per_page=$("#per_page").val();
			var parametros = {
			"action":"ajax",
			"page":page,
			'query':query,
			'per_page':per_page,

/*inicia copiar y pegar*/'nommbrerazon':nommbrerazon,
'P_NOMBRE_FISCAL_RS_EMPRESA':P_NOMBRE_FISCAL_RS_EMPRESA,
'P_RFC_MTDP':P_RFC_MTDP,
'usuario':usuario,
'contrasenia':contrasenia,
'email':email,
'validaLISTADO':validaLISTADO,
'P_TELEFONO_1_EMPRESA':P_TELEFONO_1_EMPRESA,
'CIUDAD_SERVICIO':CIUDAD_SERVICIO,
'PAIS_SERVICIO':PAIS_SERVICIO,
'PCONTACTADO_POR':PCONTACTADO_POR,
'PRODUCTO_O_SERVICIO_9':PRODUCTO_O_SERVICIO_9,
'CONVENIO_PROVEEDOR':CONVENIO_PROVEEDOR,


/*termina copiar y pegar*/

			'DEPARTAMENTO2':DEPARTAMENTO2
			};
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'listaproveedores/clases/controlador_filtro.php',
				type: 'POST',				
				data: parametros,
				 beforeSend: function(objeto){
				$("#loader").html("Cargando...");
			  },
				success:function(data){
					$(".datos_ajax").html(data).fadeIn('slow');
					$("#loader").html("");
				}
			})
		}
/* terminaB1*/		

$(document).on('click', '.view_BITACORA_PROV', function () {
	var idProveedor = $(this).attr("id");
	if (!idProveedor) { return; }

	if ($('#modalBitacoraProveedor').length === 0) {
		$('body').append(
			'<div class="modal fade" id="modalBitacoraProveedor" tabindex="-1" aria-hidden="true">' +
			' <div class="modal-dialog modal-lg modal-dialog-scrollable">' +
			'  <div class="modal-content">' +
			'   <div class="modal-header"><h5 class="modal-title">Bitácora de proveedor</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>' +
			'   <div class="modal-body" id="bitacoraProveedorBody">Cargando...</div>' +
			'  </div>' +
			' </div>' +
			'</div>'
		);
	}

	$('#bitacoraProveedorBody').html('Cargando...');
	$('#modalBitacoraProveedor').modal('show');

	$.ajax({
		url: 'listaproveedores/clases/controlador_filtro.php',
		type: 'POST',
		data: { action: 'bitacora_proveedor', idProveedor: idProveedor },
		success: function (resp) {
			if (typeof resp === 'string') {
				try { resp = JSON.parse(resp); } catch (e) { resp = []; }
			}
			if (!resp || !resp.length) {
				$('#bitacoraProveedorBody').html('<div class="alert alert-secondary mb-0">Sin movimientos registrados.</div>');
				return;
			}
			var html = '<div class="table-responsive"><table class="table table-sm table-striped">';
			html += '<thead><tr><th>Fecha</th><th>Movimiento</th><th>Detalle</th><th>Usuario</th></tr></thead><tbody>';
			$.each(resp, function (_, row) {
				html += '<tr><td>' + (row.fecha_hora || '-') + '</td><td>' + (row.tipo_movimiento || '-') + '</td><td>' + (row.detalle || '-') + '</td><td>' + (row.usuario || '-') + '</td></tr>';
			});
			html += '</tbody></table></div>';
			$('#bitacoraProveedorBody').html(html);
		},
		error: function () {
			$('#bitacoraProveedorBody').html('<div class="alert alert-danger mb-0">No fue posible cargar la bitácora.</div>');
		}
	});
});
		
	</script>
