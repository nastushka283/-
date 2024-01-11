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


// Отрисовка дополнительной формы на новой форме с дополнительным параметром
function showFormWithParam(url, someID) {
	var resultID = document.getElementById(someID);
	if ( resultID != null ) {
		url = url + resultID.value;
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
	}
};

// Отрисовка дополнительной формы на новой форме с дополнительными двумя параметрами
function showFormWith2Param(url, someID1, someID2) {
	var resultID1 = document.getElementById(someID1);
	if ( resultID1 != null ) {
		var resultID2 = document.getElementById(someID2);
		if ( resultID2 != null ) {
			url = url + "?nv=" + resultID1.value + "&rt=" + resultID2.value;
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
		}
	}
};
