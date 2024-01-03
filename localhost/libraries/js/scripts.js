// Смена пользователя
function ChangeUser()
{
	var Login = document.getElementById('LoginId');
	var Password = document.getElementById('PasswordId');
	var urlChangeUser = "ChangeUsr.php?NewUser=" + Login.value + "&NewPassword=" + Password.value;
	$.get(urlChangeUser, function(data, status) {}, "html");
};
