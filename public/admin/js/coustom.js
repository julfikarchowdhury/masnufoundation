// $(document).ready(function(){
//     //live search
//     $("#search").on("keyup",function(){
//         var search_term=$(this).val;
//         $.ajax({
//             url: '{{URL::to('/admin/donations/search_number/')}}',
//             type: "POST",
//             data: {search:search_term},
//             seccess: function(data){
//                 $("#searchitem").html(data);
//             }
//         });
//     });
// });
//realone 

$(document).ready(function () {

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});


	//type suggest
	//$(".donator-contact-suggest").on("click",function(){
		        
	//live search

	$(document).on('click', ".donator-contact-suggest", function() {
		let contact = $(this).html();
		$("#user_phone").val(contact)
		$(this).parent().hide()
		$('#appendCatagoriesLevel').empty()
		
	});
	

	$("#user_phone").on("keyup", function () {
		let target = $('#appendCatagoriesLevel');
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
					//let content2 = '';
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

	// $(document).ready(function(){
	//     $("#user_phone").on("keyup",function(){
	//     $user_phone = $(this).val();
	//     alert($user_phone);
	//     $.ajax({
	//       headers: {
	//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	//       },
	//       type:'get',
	//       url:'/admin/donations/append-donation',
	//       data:{user_phone:user_phone},
	//       seccess:function(resp){
	//         $("#appendCatagoriesLevel").html(resp);

	//       },error:function(){ 
	//         alert("Error");
	//       }
	//     })
	//   });
});
