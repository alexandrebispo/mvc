<?php

namespace SON\Init;

abstract class Bootstrap
{
		/**
	 * return routes all
	 * @author Alexandre Bispo
	 * @access Private
	 * @param $routes : array
	**/
	private $routes;

	/**
	 * class construct
	 * @author Alexandre Bispo
	 * @access Public
	**/
	public function __construct()
	{
		$this->initRoutes();
		$this->run($this->getUrl());
	}

	/**
	 * Return array de rotas
	 * @author Alexandre Bispo
	 * @access Protected
	 * @return array
	**/
	abstract protected function initRoutes();

	/**
	 * Initializes route system
	 * @author Alexandre Bispo
	 * @access Protected
	 * @return Void
	**/
	protected function run($url)
	{
		array_walk($this->routes, function($route) use($url) {

			if($url == $route['route']){
				$class = "App\\Controllers\\".ucfirst($route['controller']);
				$controller = new $class;
				$controller->$route['action']();
			}
		});
	}

	/**
	 * set route system
	 * @author Alexandre Bispo
	 * @access Protected
	 * @return Void
	**/
	protected function setRoutes(array $routes)
	{
		$this->routes = $routes;
	}
	
	/**
	 * Return url
	 * @author Alexandre Bispo
	 * @access Protected
	 * @return String
	**/
	protected function getUrl()
	{
		return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
	}
}