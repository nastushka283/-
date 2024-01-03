<?php
	$NewUsr	= $_GET['NewUser'];
	$NewPass= $_GET['NewPassword'];

	//Сохранение в глобальных переменных
	session_start();
	$_SESSION['Login'] = $NewUsr;
	$_SESSION['Password'] = $NewPass;

	require ('config.php');	//Чтение файла настроек

	echo "<h4>ChangeUsr!/h4>";
	//Подключение к БД
	CheckBDResult();
	echo "<h4>ChangeUsr!!!!!/h4>";
?>
