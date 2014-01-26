<?php

namespace SON\Controller;

class Action
{
	/**
	 * @author Alexandre Bispo
	 * @access Protected
	 * @param $view : String
	**/
	protected $view;

	/**
	 * @author Alexandre Bispo
	 * @access Protected
	 * @param $action : String
	**/
	protected $action;

	/**
	 * class construct
	 * @author Arthur Goulart
	 * @access Public
	**/
	public function __construct()
	{
		$this->view = new \stdClass;
	}

	/**
	 * render page
	 * @author Alexandre Bispo
	 * @access Public
	 * @return Void
	**/
	public function render($action, $layout=true)
	{
		$this->action = $action;
		if($layout == true && file_exists("App/views/layout.phtml")) {
			include_once 'App/views/layout.phtml';
		} else {
			$this->content();
		}
	}

	/**
	 * include page html
	 * @author Alexandre Bispo
	 * @access Public
	 * @return Void
	**/
	public function content()
	{
		$atual = get_class($this);
		$singleClassName = strtolower(str_replace("App\\Controllers\\", "", $atual));
		include_once 'App/views/'. $singleClassName.'/'.$this->action.'.phtml';
	}
}

?>