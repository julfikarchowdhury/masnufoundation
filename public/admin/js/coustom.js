$(document).ready(function () {

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	//work to put the contact clicked by user from automatic contact suggestion
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
	//filter by month in donation blade
	$(".x").on("click", function (){
		var month = $(this).val();
		//to get the last part of url
	var pathname = window.location.pathname,
	parts = pathname.split("/"),
	last_part = parts[parts.length-1];
	// alert(last_part)
		$.ajax({
			url: 'filter-by-month/'+last_part,
			type: "post",
			data:{'month':month},
			success:function (response){
				$('#filtered-table').html(response);
				}
				
			});
		$("#filterByMonth").html($(this).html()).css('font-weight','bold');
	});
	
	
	


	//live search on add donation page for automatic contact suggestion
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
						$("#donator_type").val("0")//0 indicate irregular Donator
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
	//filter by month on donation blade page
	
	
});
// content +='<tr>';
// 				 for (let donator of response.donations) {
					
// 					content += '<td style="padding:15px 10px;text-align:center;">' +
// 								donator.id
//                             '</td>' +
//                             '<td style="padding:15px 10px;text-align:center;">' +
//                                 donator.amount
//                             '</td>' +
//                                 '<td style="padding:15px 10px;text-align:center;">' +
//                                 donator.donator_name                                       
//                                 '</td>' +
//                                 '<td style="padding:15px 10px;text-align:center;">' +
//                                     '<a href="{{ url("admin/donators/".'+donator.id+') }}">'+donator.donator_name+'</a> ' +                          
//                                 '</td>' +
//                             '<td style="padding:15px 10px;text-align:center;">' +
// 							donator.donator_type   
//                             '</td>' +
//                             '<td style="padding:15px 10px;text-align:center;">' +
// 							donator.date
//                             '</td>' +
//                             '<td style="padding:15px 10px;text-align:center;">' +
// 							donator.donation_type
//                             '</td>' +
//                             '<td>' +
//                                 '<a href="{{ url("admin/show-donation-details/".'+donator.id+') }}">' +
//                                     '<i style="font-size:35px;text-align: center"  class="mdi mdi-eye" title="show detals"></i>' +
//                                 '</a> ' +
//                             '</td>' ;
// 				}
// 				content += '</tr>';

