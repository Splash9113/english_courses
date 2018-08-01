
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

require('./jquery-3.3.1.min');  //todo move to package
require('./slick.min');   //todo move to package
// require('./aos');   //todo enable and move to package

require('./main');

$('form.contacts__form').submit(function (form) {
    form.preventDefault();
    $.ajax({
        type: "POST",
        url: '/request-contact',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            name: $(form.target).find('input[name="name"]').val(),
            email: $(form.target).find('input[name="email"]').val(),
            phone: $(form.target).find('input[name="phone"]').val(),
            message: $(form.target).find('textarea[name="message"]').val(),
        },
        success: function() {
            $(form.target).trigger("reset");
            $('.popup').removeClass('popup--show');
            window.toastr.success('Request send')
        }
    });
});