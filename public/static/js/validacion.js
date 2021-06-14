console.log('validación.js cargado');
if ($('#crearproveedor').length > 0) {

    $('#crearproveedor').validate({
        rules: {
            txtnit: {
                required: true,
                maxlength: 15
            },
            txtNombre: { required: true },
            txtDireccion: { required: true },
            txtTelefono: { required: true },
            txtNombrePersonaCargo: { required: true },
        },
        messages: {
            txtnit: {
                required: "El campo nit no debe estar vacío!",
                maxlength: "El campo nit no debe tener mas de 15 dígitos"
            },
            txtNombre: {
                required: "El campo nombre no debe estar vacío!",
            },
            txtDireccion: {
                required: "El campo dirección no debe estar vacío!",
            },
            txtTelefono: {
                required: "El campo teléfono no debe estar vacío!",
            },
            txtNombrePersonaCargo: {
                required: "El campo persona a cargo no debe estar vacío!",
            }
        }
    });
}
/*
console.log('proveedor validar');
$('#btnguardar').click(function() {
    console.log('btnguardar');
    if ($('crearproveedor').valid() == false) {
        alert('rrores form')
        return;
    }
});*/