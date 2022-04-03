/*=========================================================================================
    File Name: functions.js
    Description: Global system functions
    ----------------------------------------------------------------------------------------
    Item Name: Painel  - Vuejs, HTML & Laravel Admin Dashboard Template
    Author: AV DESIGN
    Author URL: http://www.avdesign.com.br
==========================================================================================*/
/**
 *  Status dos erros.
 * @param xhr
 * @returns {string}
 */
function errorStatus(xhr, config) {
    switch (xhr.status) {
        case 403:
            alert(`${config.error} ${xhr.status}: Unauthorized action.`);
            break;
        case 404:
            alert(`${config.error} ${xhr.status}: Not Found.`);
            break;
        case 422:
            let obj = $.parseJSON(xhr.responseText), message = '';
            $.each( obj, function( key, value ) {
                $("#"+key).addClass('required');
                if (key == 'message') {
                    message += '<h4 class="alert-heading"><strong>'+config.error+': </strong>' + config.textError + '</h4>';
                } else if (key == 'errors') {
                    $.each(obj[key], function(i, error) {
                        message += '<p>'+error+'</p>';
                    });
                } else {
                    message += '<p>'+value+'</p>';
                }
            });
            return displayAlert('danger', message);
            break;
        default:
            alert(`Erro: ${xhr.status} ${xhr.responseText}.`);
    }
}

/**
 * Configuração dos alerts.
 * @param cls
 * @param message
 * @returns {string}
 */
function displayAlert(cls, message) {
    return  '<div class="alert alert-'+cls+' mt-1" role="alert">' + message + '</div>';
}
