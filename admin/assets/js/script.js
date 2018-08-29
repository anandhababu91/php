$(document).ready(function() {
	$('#Profile_form').validate({
		rules:{
			first_name:{ required:true },
			last_name:{ required:true },
			email:{ required:true , email:true },
			phone:{ required:true,number:true,minlength:10,maxlength:10}
		},
		messages:{
			first_name:{ required:"Please Enter First Name" },
			last_name:{ required:"Please Enter last Name" },
			email:{ required:"Please Enter Enail" },
			phone:{ required:"Please Enter Phone Number"}
		},
		highlight: function(e) {
                    $(e).closest(".form-group").addClass("has-error")
                },
                unhighlight: function(e) {
                    $(e).closest(".form-group").removeClass("has-error")
        },
	})
});