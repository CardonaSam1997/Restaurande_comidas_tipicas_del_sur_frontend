$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    });

    $('form').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(response) {
                alert('Factura enviada correctamente');
            },
            error: function(xhr) {
                alert('Error al enviar la factura');
            }
        });
    });
});
