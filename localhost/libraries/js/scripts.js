// Смена пользовател¤
function ChangeUser()
{
	var Login = document.getElementById('LoginId');
	var Password = document.getElementById('PasswordId');
	var urlChangeUser = "ChangeUsr.php?NewUser=" + Login.value + "&NewPassword=" + Password.value;
	$.get(urlChangeUser, function(data, status) {
		var result = document.getElementById('FormId');
		if ( result != null ) {
		  if ( status == "success" ) {
			result.innerHTML = data;
		  } else {
			result.innerHTML = "ошибка выполнения запроса";
		  }
		}
	}, "html");
};

// Отрисовка дополнительной формы на новой форме
function showForm(url) {
  $.get(url, function(data, status) {
	var result = document.getElementById('FormIdNew');
    if ( result != null ) {
      if ( status == "success" ) {
        result.innerHTML = data;
      } else {
        result.innerHTML = "ошибка выполнения запроса";
      }
    }
  }, "html");
};
