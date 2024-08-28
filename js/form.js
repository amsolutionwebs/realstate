$("#contactForm").validator().on("submit", function(event) {
	if(event.isDefaultPrevented()) {
		formError();
		submitMSG(false, "Did you fill in the form properly?");
	} else {
		event.preventDefault();
		submitForm();
	}
});


$("#contactFormFooter").validator().on("submit", function(event) {
	if(event.isDefaultPrevented()) {
		formError();
		submitMSG(false, "Did you fill in the form properly?");
	} else {
		event.preventDefault();
		submitFormFooter();
	}
});


function submitFormFooter() {
	var submit = 'submit';
	var boucher_type = $("#boucher_type").val();

	var name = $("#full_name").val();
	var email = $("#email_id").val();
	var message = $("#message_user").val();
	var mobile = $("#mobile_mobile").val();
	var requirment = $("#requirment_two").val();
	$.ajax({
		type: "POST",
		url: "mailer_action.php",
		data: "submit=" + submit +"&name=" + name + "&email=" + email + "&message=" + message + "&mobile=" + mobile + "&requirment=" + requirment,
		success: function(text) {
			
			$("#contactForm")[0].reset();
			submitMSG(true, "Message Submitted!");

			if (boucher_type=='shreeram') {
				window.location.href = 'images/project/brigade-sanctuary-1/2141_Brg_Sanctuary_A3 Presenter_V3.pdf';
			 }

			 if (boucher_type=='brigadesenctuary') {
				window.location.href = 'images/project/brigade-sanctuary-1/2141_Brg_Sanctuary_A3 Presenter_V3.pdf';
			 }

			  if (boucher_type=='prestige') {
				window.location.href = 'images/project/prestige/prestige.pdf';
			 }

			  if (boucher_type=='godrej') {
				window.location.href = 'images/project/godrej/price-boucher.jpg';
			 }

			  if (boucher_type=='godrej_sarrjapur') {
				window.location.href = 'images/project/godrej-sarjjapur/godrej-sarjappur.pdf';
			 }

	 		}
	});
}


function submitForm() {
	var submit = 'submit';
    var name = $("#name").val();
	var email = $("#email").val();
	var message = $("#message").val();
	var mobile = $("#mobile").val();
	var requirment = $("#requirment").val();
	$.ajax({
		type: "POST",
		url: "mailer_action.php",
		data: "submit=" + submit +"&name=" + name + "&email=" + email + "&message=" + message + "&mobile=" + mobile + "&requirment=" + requirment,
		success: function(text) {
			
			$("#contactForm")[0].reset();
			submitMSG(true, "Message Submitted!");

			

	 		}
	});
}

function formError() {
	$("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
		$(this).removeClass();
	});
}

function submitMSG(valid, msg) {
	if(valid) {
		var msgClasses = "h3 text-center tada animated text-success";
	} else {
		var msgClasses = "h3 text-center text-danger";
	}
	$("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
	$('#msgSubmit').delay(2000).hide(0);
}