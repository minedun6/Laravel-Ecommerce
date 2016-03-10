jQuery(document).ready(function($) {

    var element = $('.qty');
    element.TouchSpin({
        min: 1,
        max: 999,
        initval: 1
    });

    $('select').select2({
        placeholder: 'Choose Category ...',
        allowClear: true
    });

});