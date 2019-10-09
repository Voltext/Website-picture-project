<?php

abstract class Model 
{
	private static $_bdd;

	private static function setBdd() 
	{
		self::$_bdd = new PDO('mysql:host=10.53.130.250;dbname=projet_photos','sig', 'sig');
		self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	}

	protected function getBdd() 
	{
		if(self::$_bdd == null) 
		{
			self::setBdd();
		}
		return self::$_bdd;
	}

	protected function getData($table, $obj) 
	{
		$var = [];
		$req = $this->getBdd()->prepare('SELECT * FROM ' .$table. ' ORDER BY pho_id DESC');
		$req->execute();
		while($data = $req->fetch(PDO::FETCH_ASSOC))
		{
			$var[] = new $obj($data);
		}	
		return $var;
		$req->closeCursor();
	}
}