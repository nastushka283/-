<?php
	// Объявление констант
	// $hostName		= 'localhost';	//Имя хоста
	// $Port           = '5432';		//Порт
	// $DatBaseName	= 'test';		//Имя базы данных
	// $UserName		= 'postgres';	//Имя пользовател
	// $Password		= '';

	$hostName		= 'pg-jail';	//Имя хоста
    $Port			= '5432';		//Порт
	$DatBaseName	= 'test';		//Имя базы данных
	$UserName		= 'test';		//Имя пользовател
	$Password		= 'js7gdGrnLhrvR6gkFjgD';

	ini_set('display_errors', '1');

	session_start();

	if ( !isset($_SESSION['Login'] ) )
	{
		$_SESSION['Login'] = 'admin';
	}
	$UserName = $_SESSION['Login'];

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
			echo 'Ошибка: ' . pg_last_error();
			die;
		}
	}
?>


	
