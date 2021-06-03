$(document).ready(function(){
		$('#casas').hide();
		var size  =  $('#cpf').attr("size");
		$('#cpf').keyup(function(){
			var entry = $(this).attr("value");
			var current_length = $(this).attr("value").length;
			if (current_length>= size) {
				$('#casas').html();
				$('#casas').show('fast');
			}
				else $('#casas').hide('fast');
			});
	});