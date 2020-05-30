<?php
/**
 * @license Kits License
 * @author Andil ADEBIYI <andiladebiyi@gmail.com>
 * @Copyright (c) kits, 2019
 */
//namespace Kits;

class Database
{

	public static  function connect()
	{
			try{
				$bdd = new PDO("mysql:host=localhost;dbname=gestiondbonline",'root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
				$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
				}
			catch(PDOException $e){echo "La connexion à la base de donnée a échouer:" .$e->getMessage();}
			return $bdd;
	}






	// 	public static  function connect()
	// {
	// 		try{
	// 			$bdd = new PDO("mysql:host=localhost;dbname=id12338047_monwxe",'id12338047_monwxe','NEjc@ds8f!5ph5j5fW*h',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	// 			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
	// 			}
	// 		catch(PDOException $e){echo "La connexion à la base de donnée a échouer:" .$e->getMessage();}
	// 		return $bdd;
	// }
 
 
}