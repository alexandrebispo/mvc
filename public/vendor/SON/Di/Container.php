<?php

namespace \SON\Di;

class Container
{
	/**
	 * return class 
	 * @author Alexandre Bispo
	 * @access Public
	 * @return class
	**/
	public static function get_class($name)
	{
		$str_class = "\\App\\Models\\".ucfirst($name);
		$class = new $str_class(\App\Init::getDb());
		return $class;
	}
}
?>