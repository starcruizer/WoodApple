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
