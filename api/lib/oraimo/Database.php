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
				$bdd = new PDO("mysql:host=localhost;dbname=oraimo",'root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
				$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
				}
			catch(PDOException $e){echo "La connexion à la base de donnée a échouer:" .$e->getMessage();}
			return $bdd;
	}
	public static  function connectbddjeux()
	{
			try{
				$bdd = new PDO("mysql:host=localhost;dbname=jeuxkits",'root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
				$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
				}
			catch(PDOException $e){echo "La connexion à la base de donnée a échouer:" .$e->getMessage();}
			return $bdd;
	}
	


}