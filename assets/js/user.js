var baseurl = "http://localhost:81/";

/****************** USER LOGIN FORM STARTS ************************/

$('#login-btn').click(function(){
	var user=$('#username').val();
	var pass=$('#password').val();
	
	$.post(baseurl+'user/loginuser', {user:user, pass:pass}, function(result){
		alert(result);
	});
	
});

/****************** USER LOGIN FORM ENDS ************************/

/****************** USER ENQUIRY FORM STARTS ************************/

$('#send-btn').click(function(){
	var Name=$('#name').val();
	var Email=$('#email').val();
	var Message = $('#message').val();
	var Purpose = $('#purpose').val();
	var Copy = $('#defaultContactFormCopy').val();
	
	if (Name) {
		if (Email) {
			if (Purpose) {
				if (Message) {

					$.post(baseurl+'email/send', {name:Name, email:Email, message:Message, purpose:Purpose,copy:Copy}, function(result){
						alert(result);
					});

					return true;
				} else {
					alert('Kindly fill in Message field');
					return false;
				}
			} else {
				alert('Kindly fill in your Purpose');
				return false;
			}
		} else {
			alert('Kindly fill in email in correct format');
			return false;
		}
	} else {
		alert('Kindly fill in your good name');
		return false;
	}
	
	
	
});

/****************** USER ENQUIRY FORM ENDS ************************/