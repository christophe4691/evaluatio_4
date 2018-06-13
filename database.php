<?php

class Database  //Connexion à la base de données
{

	private static $dbHost = "localhost";
	private static $dbName = "evaluation_4";
	private static $dbUser = "root";
	private static $dbUserPassword = "cartoon";

	private static $connection = null;

	public static function connect()
	{
		try
		{
			self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName,self::$dbUser,self::$dbUserPassword);
		}
		catch(PDOExeption $e)
		{
			die($e->getMessage('Erreur'));
		}
		return self::$connection;
	}

	public static function disconnect()
	{
		self::$connection = null;
	}
}




?>
