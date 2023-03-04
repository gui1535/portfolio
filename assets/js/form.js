$(document).ready(function () {
    $('#form-contato').submit(function (event) {
        event.preventDefault();
        const thisForm = $(this);
        // Form Data
        const formData = new FormData(this);
        // Button
        btnIsLoading(thisForm, true)
        // Send AJAX
        $.ajax({
            url: 'enviar_email.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                // Handle the server response here
                console.log(response);
                $.toaster(response.message, 'Sucesso', 'success');
                btnIsLoading(thisForm, false)
            },
            error: function (xhr, status, error) {
                // Handle any errors here
                $.toaster("Erro inesperado, tente novamente mais tarde", '', 'danger');
                btnIsLoading(thisForm, false)
            }
        });
    });
});

function btnIsLoading(form, isLoading) {
    const button = form.find('button');
    button.empty();
    if (isLoading) {
        button.attr('disabled', true);
        button.addClass('disabled')
        button.append(
            '<div class="spinner-border" role="status">' +
            '<span class="sr-only">Loading...</span>' +
            '</div>'
        );
    } else {
        button.attr('disabled', false);
        button.removeClass('disabled')
        button.append('Enviar');
    }
}