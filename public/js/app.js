$(function() {
    $('.col-sm-3').matchHeight({
        byRow: true,
        property: 'height',
        target: null,
        remove: false
    });
    var element = $('.qty');
    element.TouchSpin({
        min: 1,
        max: 100,
    });
    element.on('change', function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers:
            {
                'X-CSRF-Token': $('input[name="_token"]').val()
            }
        });
        $.ajax({
    		url: 'updatecart',
    		type: 'post',
    		data: { qty:$(this).val(), identifier:$('input[name="productIdentifier"]').val() },
    		success: function (data) {
    			location.reload();
    		}
    	});
    });
});
