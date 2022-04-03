
(function ($) {
    "use strict";
    jQuery(document).ready(function ($) {
        $(document).on('submit','#contact-form',function(e){
            e.preventDefault();
            var name = $('#name').val(),
                email = $('#email').val(),
                message = $('#message').val();
            $.ajax({
                type: "POST",
                url:'contact',
                dataType: 'json',
                data:{
                    'name': name,
                    'email': email,
                    'message': message,
                    '_token': $('input[name="_token"]').val()
                },
                beforeSend: function() {
                    $('.btn-contact').prop("disabled", true);
                },
                success:function(data){
                    let msg = displayAlert('success', data.message)
                    $('#return-contact').html(msg);
                    $('#name').val('');
                    $('#email').val('');
                    $('#message').val('');
                    $('#return-contact').fadeOut(6000);
                    $('.btn-contact').prop("disabled", false);
                },
                error: function(xhr) {
                    $('.btn-contact').prop("disabled", false);
                    let msg = errorStatus(xhr);
                    $('#return-contact').html(msg);
                    $('#return-contact').fadeOut(6000);
                }
            });
        });
    })

}(jQuery));