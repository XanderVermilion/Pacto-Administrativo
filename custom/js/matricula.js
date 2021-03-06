var manageBrandTable;

$(document).ready(function() {
	// top bar active
	$('#navBrand').addClass('active');
	
	// manage brand table
	manageBrandTable = $("#manageBrandTable").DataTable({
		'ajax': 'php_action/fetchMatricula.php',
		'order': []		
		
		
	});

	// submit brand form function
	$("#submitBrandForm").unbind('submit').bind('submit', function() {
		// remove the error text
		$(".text-danger").remove();
		// remove the form error
		$('.form-group').removeClass('has-error').removeClass('has-success');			

		var usuarioid = $("#usuarioid").val();
		var reunionid = $("#reunionid").val();

		if(usuarioid == "") {
			$("#usuarioid").after('<p class="text-danger">Este campo es obligatorio</p>');
			$('#usuarioid').closest('.form-group').addClass('has-error');
		} else {
			// remov error text field
			$("#usuarioid").find('.text-danger').remove();
			// success out for form 
			$("#usuarioid").closest('.form-group').addClass('has-success');	  	
		}

		if(reunionid == "") {
			$("#reunionid").after('<p class="text-danger">Este campo es obligatorio</p>');

			$('#reunionid').closest('.form-group').addClass('has-error');
		} else {
			// remov error text field
			$("#reunionid").find('.text-danger').remove();
			// success out for form 
			$("#reunionid").closest('.form-group').addClass('has-success');	  	
		}

		if(usuarioid && reunionid) {
			var form = $(this);
			// button loading
			$("#createBrandBtn").button('loading');

			$.ajax({
				url : form.attr('action'),
				type: form.attr('method'),
				data: form.serialize(),
				dataType: 'json',
				success:function(response) {
					// button loading
					$("#createBrandBtn").button('reset');

					if(response.success == true) {
						// reload the manage member table 
						manageBrandTable.ajax.reload(null, false);						

  	  			// reset the form text
						$("#submitBrandForm")[0].reset();
						// remove the error text
						$(".text-danger").remove();
						// remove the form error
						$('.form-group').removeClass('has-error').removeClass('has-success');
  	  			
  	  			$('#add-brand-messages').html('<div class="alert alert-success">'+
            '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> '+ response.messages +
          '</div>');

  	  			$(".alert-success").delay(500).show(10, function() {
							$(this).delay(3000).hide(10, function() {
								$(this).remove();
							});
						}); // /.alert
					}  // if

				} // /success
			}); // /ajax	
		} // if

		return false;
	}); // /submit brand form function

});
