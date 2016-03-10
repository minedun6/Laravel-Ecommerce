$(function () {
    var element = $('.qty');
    element.TouchSpin({
        min: 1,
        max: 100,
    });

    element.on('change', function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('input[name="_token"]').val()
            }
        });
        $.ajax({
            url: 'updatecart',
            type: 'post',
            data: {qty: $(this).val(), identifier: $(this).data('value')},
            success: function (data) {
                location.reload();
            }
        });
    });
});
