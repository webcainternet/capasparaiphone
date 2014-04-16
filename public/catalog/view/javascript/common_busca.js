

$(document).ready(function() {

	/* Search */

	$('.button-search').bind('click', function() {

		/*url = $('base').attr('href') + 'index.php?route=product/search';*/
		url = $('base').attr('href') + 'busca';
		

		var filter_name = $('input[name=\'filter_name\']').attr('value');

		

		if (filter_name) {

			/*url += '&filter_name=' + encodeURIComponent(filter_name);*/
			url +='/' + encodeURIComponent(filter_name);

		}

		

		location = url;

	});
	

	$('#header input[name=\'filter_name\']').bind('keydown', function(e) {

		if (e.keyCode == 13) {

			/*url = $('base').attr('href') + 'index.php?route=product/search';*/
			url = $('base').attr('href') + 'busca';
			
			alert(url);

			 

			var filter_name = $('input[name=\'filter_name\']').attr('value');

			

			if (filter_name) {

				/*url += '&filter_name=' + encodeURIComponent(filter_name);*/
				url +='/' + encodeURIComponent(filter_name);

			}

			

			location = url;

		}

	});


});
