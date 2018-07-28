var baseurl = "http://www.wood-apple.co.in/";

/****************** USER LOGIN FORM STARTS ************************/

$('#login-btn').click(function(){
	var user=$('#username').val();
	var pass=$('#password').val();

	$.post(baseurl+'user/loginuser', {user:user, pass:pass}, function(result){
		alert(result);
	});
	
});

/****************** USER LOGIN FORM ENDS ************************/
