<?php
	$NewUsr	= $_GET['NewUser'];
	$NewPass= $_GET['NewPassword'];

	//Сохранение в глобальных переменных
	session_start();
	$_SESSION['Login'] = $NewUsr;
	$_SESSION['Password'] = $NewPass;

	require ('config.php');	//Чтение файла настроек

	//Подключение к БД
	$dbconn = pg_connect("host=" . $hostName . " port=" . $Port . " dbname=" . $DatBaseName . " user=" . $UserName . " password=" . $Password);
	CheckBDResult($dbconn);
	
	require ('mainform.php');	//Отрисовка меню

?>
