<?php
	//Сохранение в глобальных переменных
	session_start();
	$_SESSION['Login'] = $_GET['NewUser'];
	$_SESSION['Password'] = $_GET['NewPassword'];

	require ('config.php');	//Чтение файла настроек

	//Подключение к БД
	$dbconn = pg_connect("host=" . $hostName . " port=" . $Port . " dbname=" . $DatBaseName . " user=" . $UserName . " password=" . $Password);
	CheckBDResult($dbconn);
	
	require ('mainform.php');	//Отрисовка главного меню

?>
