$(document).ready(function() {
	$("#updateUserForm").unbind('submit').bind('submit', function() {
		var form = $(this);

		$.ajax({
			url: form.attr('action'),
			type: form.attr('method'),
			data: form.serialize(),
			dataType: 'json',
			success:function(response) {				
				if(response.success == true) {
					$("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
					  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
					  response.messages+
					'</div>');

					
					$(".text-danger").remove();
					$(".form-group").removeClass('has-error').removeClass('has-success');

				}
				else {
					$.each(response.messages, function(index, value) {
						var element = $("#"+index);

						$(element)
						.closest('.form-group')
						.removeClass('has-error')
						.removeClass('has-success')
						.addClass(value.length > 0 ? 'has-error' : 'has-success')
						.find('.text-danger').remove();

						$(element).after(value);

					});
				}
			} // /success
		});	 // /ajax

		return false;
	});	

	$("#changepasswordForm").unbind('submit').bind('submit', function() {
		var form = $(this);

		$.ajax({
			url: form.attr('action'),
			type: form.attr('method'),
			data: form.serialize(),
			dataType: 'json',
			success:function(response) {				
				if(response.success == true) {
					$("#passwordmessages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
					  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
					  response.messages+
					'</div>');

					$("#changepasswordForm")[0].reset();
					
					$(".text-danger").remove();
					$(".form-group").removeClass('has-error').removeClass('has-success');

				}
				else {
					$.each(response.messages, function(index, value) {
						var element = $("#"+index);

						$(element)
						.closest('.form-group')
						.removeClass('has-error')
						.removeClass('has-success')
						.addClass(value.length > 0 ? 'has-error' : 'has-success')
						.find('.text-danger').remove();

						$(element).after(value);

					});
				}
			} // /success
		});	 // /ajax

		return false;
	});	

});