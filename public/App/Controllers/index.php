<?php

namespace App\Controllers;

use \SON\Controller\Action;

/**
 * Index page
 * @author Alexandre Bispo
**/
class Index extends Action
{

	/**
	 * Default action
	 * @author Alexandre Bispo
	 * @access Public
	 * @return Void
	**/
	public function index()
	{
		$nomes = array();

		$nomes[] = 'João';
		$nomes[] = 'Pedro';
		$nomes[] = 'Alexandre';

		//Atribuindo para view a variavel
		$this->view->nomes = $nomes;

		//Renderizando view
		$this->render('index');

	}

	/**
	 * Default action
	 * @author Alexandre Bispo
	 * @access Public
	 * @return Void
	**/
	public function empresa()
	{
		$this-render('empresa');
	}
}