<?php
header('Access-Control-Allow-Origin: *');
?>
<!DOCTYPE html>

<html>

<head>
    <title>Proyecto Línea de Vida</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        @yield('content')
    </div>
</body>
<script>
    $(document).ready(function() {

        /* When click New customer button */
        $('#new-customer').click(function() {
            $('#btn-save').val("create-customer");
            $('#customer').trigger("reset");
            $('#customerCrudModal').html("Add New Customer");
            $('#crud-modal').modal('show');
            $('#name').prop('readonly', '');
                $('#address').prop('readonly', '');
                $('#email').prop('readonly', '');
                $('#btn-save').prop('disabled', false);
                $('#btn-save').prop('hidden', false);
        });

        /* Edit customer */
        $('body').on('click', '#edit-customer', function() {
            var customer_id = $(this).data('id');
            $.get('customers/' + customer_id + '/edit', function(data) {
                $('#customerCrudModal').html("Edit customer");
                $('#btn-update').val("Update");
                $('#btn-save').prop('disabled', false);
                $('#btn-save').prop('hidden', false);
                $('#crud-modal').modal('show');
                $('#cust_id').val(data.id);
                $('#name').val(data.name);
                $('#email').val(data.email);
                $('#address').val(data.address);
                $('#name').prop('readonly', '');
                $('#address').prop('readonly', '');
                $('#email').prop('readonly', '');
            })
        });
        /* Show customer
        $('body').on('click', '#show-customer', function() {
            $('#customerCrudModal-show').html("Customer Details");
            $('#crud-modal-show').modal('show');
        }); */
        $('body').on('click', '#show-customer', function() {
            var customer_id = $(this).data('id');
            $.get('customers/' + customer_id + '/show', function(data) {
                $('#customerCrudModal').html("Customer Details");
                $('#btn-update').val("Ok");
                $('#name').prop('readonly', 'readonly');
                $('#address').prop('readonly', 'readonly');
                $('#email').prop('readonly', 'readonly');
                $('#btn-save').prop('disabled', true);
                $('#btn-save').prop('hidden', true);
                $('#crud-modal').modal('show');
                $('#cust_id').val(data.id);
                $('#name').val(data.name);
                $('#email').val(data.email);
                $('#address').val(data.address);
            })
        });

        /* Delete customer */
        $('body').on('click', '#delete-customer', function() {
            var customer_id = $(this).data("id");
            var token = $("meta[name='csrf-token']").attr("content");
            var confirmacion = confirm("Realmente desea eliminar este cliente?");
            if (confirmacion) {


                $.ajax({
                    type: "DELETE",
                    url: "https://localhost/proyecto-linea-de-vida/public/customers/" + customer_id,
                    data: {
                        "id": customer_id,
                        "_token": token,
                    },
                    success: function(data) {
                        $('#msg').html('Cliente eliminado correctamente!');
                        $("#customer_id_" + customer_id).remove();
                    },
                    error: function(data) {
                        console.log('Error:', data);
                    }
                });
            } else {

            }

        });
    });
</script>

</html>