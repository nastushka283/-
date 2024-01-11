<?php
	// Объявление констант
	$hostName		= 'pg-jail';	//Имя хоста
    $Port			= '5432';		//Порт
	$DatBaseName	= 'test';		//Имя базы данных
	$UserName		= '';			//Имя пользовател
	$Password		= '';

	ini_set('display_errors', '0');

	//Включение работы с глобальными переменными типа $_SESSION['xxx']
	session_start();

	//Чтение глобальной переменной Логин
	if ( !isset($_SESSION['Login'] ) )
	{
		$_SESSION['Login'] = 'admin';
	}
	$UserName = $_SESSION['Login'];

	//Чтение глобальной переменной Пароль
	if ( !isset($_SESSION['Password'] ) )
	{
		$_SESSION['Password'] = 'js7gdGrnLhrvR6gkFjgD';
	}
	$Password = $_SESSION['Password'];

	// Подключение к базе данных
	function CheckBDResult($dbconn)
	{
		if ( $dbconn == false )
		{
			echo 'Ошибка: ' . pg_last_error();	//Распечатка ошибки
			die;								//Завершение и выход
		}
	}
?>


	
