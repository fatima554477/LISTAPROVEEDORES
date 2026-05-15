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

function _bitacoraBadgeCfg(tipo) {
	var t = (tipo || '').toUpperCase();
	if (t.indexOf('INGRESO') >= 0) return { cls: 'badge-ingreso', bg: '#E6F1FB', border: '#0C447C', iconPath: 'M12 5v14M5 12h14' };
	if (t.indexOf('AUTORIZ') >= 0) return { cls: 'badge-autorizacion', bg: '#EAF3DE', border: '#27500A', iconPath: 'M20 6L9 17l-5-5' };
	if (t.indexOf('ACTUAL') >= 0) return { cls: 'badge-actualizacion', bg: '#FAEEDA', border: '#633806', iconPath: 'M12 8v4l3 3M21 12a9 9 0 1 1-3-6.7' };
	if (t.indexOf('PAGO') >= 0) return { cls: 'badge-pago', bg: '#EAF3DE', border: '#27500A', iconPath: 'M3 10h18M7 15h1m3 0h6M5 6h14a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2z' };
	if (t.indexOf('CANCEL') >= 0) return { cls: 'badge-cancelacion', bg: '#FCEBEB', border: '#501313', iconPath: 'M18 6L6 18M6 6l12 12' };
	if (t.indexOf('ADJUN') >= 0) return { cls: 'badge-adjunto', bg: '#F3E8FF', border: '#5B21B6', iconPath: 'M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.2-9.2a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 1 1-2.83-2.83l8.49-8.48' };
	if (t.indexOf('RECHAZ') >= 0) return { cls: 'badge-rechazo', bg: '#FEE2E2', border: '#991B1B', iconPath: 'M12 9v4m0 4h.01M10.3 3.86l-8.4 14.54A2 2 0 0 0 3.63 21h16.74a2 2 0 0 0 1.73-2.99L13.7 3.86a2 2 0 0 0-3.4 0z' };
	return { cls: 'badge-default', bg: '#f1f3f5', border: '#6c757d', iconPath: 'M12 6v6l4 2' };
}
function _bitacoraInitials(name) {
	var n = (name || '').trim().split(/\s+/);
	if (!n.length || !n[0]) return '--';
	return ((n[0][0] || '') + (n[1] ? n[1][0] : '')).toUpperCase();
}
function _bitacoraIcon(path) {
	return '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="' + path + '"/></svg>';
}

$(document).on('click', '.view_BITACORA_PROV', function () {
	var idProveedor = $(this).attr("id");
	if (!idProveedor) return;

	$('#bitacoraProvLabel').html('Proveedor <b>#...</b>');
	$('#bitacoraStrip').hide().html('');
	$('#bitacoraProveedorBody').html('<div class="p-3 text-muted small"><span class="spinner-border spinner-border-sm me-2"></span>Cargando bitácora...</div>');
	$('#modalBitacoraProveedor').modal('show');

	$.ajax({
		url: 'listaproveedores/clases/controlador_filtro.php',
		type: 'POST',
		data: { action: 'bitacora_proveedor', idProveedor: idProveedor },
		success: function (resp) {
    if (typeof resp === 'string') { try { resp = JSON.parse(resp); } catch (e) { resp = []; } }
    if (!resp || !resp.length) {
        $('#bitacoraProvLabel').html('Sin movimientos registrados');
        $('#bitacoraProveedorBody').html('<div class="alert alert-light border m-3">No hay registros de bitácora para este proveedor.</div>');
        return;
    }

    // Usar nombre_comercial del primer registro (todos tienen el mismo proveedor)
    var nombreComercial = resp[0].nombre_comercial || ('Proveedor #' + idProveedor);
    $('#bitacoraProvLabel').html('PROVEEDOR: <b>' + nombreComercial + '</b>');

    var strip = '<span><b>Total movimientos:</b> ' + resp.length + '</span>';
    $('#bitacoraStrip').html(strip).show();

    var html = '<div class="bitacora-timeline-wrap"><div>';
    for (var i = 0; i < resp.length; i++) {
        var d = resp[i] || {};
        var isLast = (i === resp.length - 1);
        var cfg = _bitacoraBadgeCfg(d.tipo_movimiento);
        var usuario = (d.usuario || '').trim() || 'Sin usuario';
        var initials = _bitacoraInitials(usuario);

        // Detalle enriquecido con fecha formateada y usuario resaltado
        var detalleHtml = '<div class="small text-secondary mb-1">' + (d.detalle || 'Sin descripción') + '</div>'
          

        html += '<div class="d-flex gap-3">'
            + '<div class="d-flex flex-column align-items-center">'
            +   '<div class="bitacora-dot" style="background:' + cfg.bg + ';border-color:' + cfg.border + ';color:' + cfg.border + '">'
            +     _bitacoraIcon(cfg.iconPath)
            +   '</div>'
            +   (!isLast ? '<div class="bitacora-line"></div>' : '')
            + '</div>'
            + '<div class="flex-grow-1 pb-4">'
            +   '<div class="d-flex align-items-center gap-2 mb-1">'
            +     '<span class="badge-bitacora ' + cfg.cls + '">' + (d.tipo_movimiento || '-') + '</span>'
            +     '<small class="text-muted fw-semibold">' + (d.fecha_hora || '-') + '</small>'
            +   '</div>'
            +   detalleHtml
            +   '<div class="d-flex align-items-center gap-2 mt-1">'
            +     '<div class="bitacora-avatar" style="background:' + cfg.bg + ';color:' + cfg.border + ';">' + initials + '</div>'
            +     '<small class="text-muted">Realizado por: <b>' + usuario + '</b></small>'
            +   '</div>'
            + '</div>'
            + '</div>';
    }

			html += '</div></div>';
			$('#bitacoraProveedorBody').html(html);
		},
		error: function () {
			$('#bitacoraProvLabel').html('Proveedor <b>#' + idProveedor + '</b>');
			$('#bitacoraProveedorBody').html('<div class="alert alert-danger m-3">Error al consultar la bitácora. Intenta nuevamente.</div>');
		}
	});
});
		
	</script>

<div class="modal fade" id="modalBitacoraProveedor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content border-0 shadow-sm">
      <div class="modal-header text-white" style="background:#0C447C;">
        <div>
        <h5 class="modal-title mb-0">Historial de movimientos</h5>
<small class="opacity-75" id="bitacoraProvLabel">Cargando...</small>
        </div>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div id="bitacoraStrip" class="bitacora-strip" style="display:none;"></div>
      <div class="modal-body p-0" id="bitacoraProveedorBody" style="background:#f8fafc;">
        <div class="p-3 text-muted small">
          <span class="spinner-border spinner-border-sm me-2"></span>Cargando bitácora...
        </div>
      </div>
      <div class="modal-footer py-2">
        <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
