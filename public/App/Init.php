<?php

namespace App;

use SON\Init\Bootstrap;

/**
	 * Return initialize sistem
	 * @author Alexandre Bispo
	**/

class Init extends Bootstrap
{
	/**
	 * Return array de rotas
	 * @author Alexandre Bispo
	 * @access Proteccted
	 * @return array
	**/
	protected function initRoutes()
	{
		$ar['home'] = array('route'=>'/','controller'=>'index','action'=>'index');
		$ar['empresa'] = array('route'=>'/empresa','controller'=>'index','action'=>'empresa');
		$ar['artigos'] = array('route'=>'/artigos','controller'=>'artigos', 'action'=>'index');
		$this->setRoutes($ar);
	}

	/**
	 * Return connect database
	 * @author Alexandre Bispo
	 * @access Public
	 * @return object
	**/
	public static function getDb()
	{
		try {

			$Db = new \PDO("mysql:host=localhost, dbname=mvc", "root", "root");
			return $Db;

		} catch (PDOException $e) {
			echo "erro ao conectar ao database: ".$e->getMenssage();
		}
		
	}
}
