$(document).ready(function () {
    $.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
    $(".x").on("click", function () {
        $(".x").removeClass("about-sidebar-indicator");
        var month = $(this).val();

        $(this).addClass("about-sidebar-indicator");
        $('.y').css("display", "none");

        $('#'+month).css("display", "block");

    });
    
    
});
    
    

$(document).ready(function(){
    var pathname =window.location.pathname; 
    //console.log(pathname);
    $(".ac").each(function(){
        if($(this).find('a:first').attr('href')==pathname){
            $(this).addClass("navbar-indicator");
        }
        else{
            $(this).removeClass("navbar-indicator");
         }
      });
    
});