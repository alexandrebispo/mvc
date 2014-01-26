<?php

namespace \App\Controllers;

use \SON\Controller\Action;
use \SON\Di\Container;

/**
 * Main controller
 * @author Alexandre Bispo
**/
class Artigos extends Action
{
	/**
	 * Default action
	 * @author Alexandre Bispo
	 * @access Public
	 * @return Void
	**/
	public function index()
	{
		$artigo = Container::get_class("Artigos");
		$artigos = $artigo->fetchAll();

		$this->view->artigos = $artigos;

		$this->render('artigos');
	}	
}

?>