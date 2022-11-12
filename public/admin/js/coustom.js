$(document).ready(function () {

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$(document).on('click', ".donator-contact-suggest", function() {
		let contact = $(this).html();
		$("#user_phone").val(contact)
		$(this).parent().hide()
		$('#appendCatagoriesLevel').empty()
		$.ajax({
			url: 'donator-type',
			type: "post",
			dataType:'json',
			data:{'contact':contact},
			success:function (response){
				$("#donator_type").val(response.data[0].type)
				$("#donator_name").val(response.data[0].name)
				$("#donator-id").val(response.data[0].id)
				
			}
		})
		
	});
	
	$("#user_phone").on("keyup", function () {
		let target = $('#donator-phone-suggestion');
		target.empty();
		var search = $(this).val();
		if (search == '') {
			return false
		}
		try {
			$.ajax({
				url: 'append-donation',
				type: "post",
				dataType: 'json',
				data: {
					'search': search
				},
				success: function (response) {
					let content = '';
					if (response.success == true && response.data.length > 0) {
						 //console.log(response.data[0].id)
						content += '<div class="form-group mt-1">' +
							'<ul class="list-group">';
						for (let donator of response.data) {
							content += '<li class="list-group-item list-group-item-action cursor-pointer donator-contact-suggest">' +
								donator.phone
							'</li>';
						}
						content += '</ul>' +
							'</div >';
						target.append(content)
						
					} else {
						target.empty()
						// toastr.warning('No data found !', 'Oops !');
						//console.log(search);
						$("#donator-id").val(search)
						$("#donator_type").val("Irregular Donator")
						$("#donator_name").prop("readonly",false);
					}
				},
				error: function (error) {
					toastr.error('Something went wrong !', 'Error !')
				}
			});
		} catch (error) {
			console.log(error)
		}
	});
});
