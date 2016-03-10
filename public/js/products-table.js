jQuery(document).ready(function($) {

    $('#products-table').dataTable({
        responsive: true
    });


    $(document).on('click', ".fancybox", function(e) {
    	e.preventDefault();
		$.fancybox.open($(this).data('href'), {
			type: 'image',
			title: $(this).data('title'),
			openEffect	: 'elastic',
	    	closeEffect	: 'elastic',

	    	helpers : {
	    		title : {
	    			type : 'over'
	    		},
	    		overlay: true
	    	}
		});
	});

});
