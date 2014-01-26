<?php
namespace \SON\Db;

/**
* 
*/
abstract class Table 
{

	/**
	 * @author Alexandre Bispo
	 * @access Protected
	 * @param  $db : array
	**/
	protected $db;

	/**
	 * @author Alexandre Bispo
	 * @access Protected
	 * @param $table : array
	**/
	protected $table;

	/**
	 * class construct
	 * @author Alexandre Bispo
	 * @access Public
	 * @return Void
	**/
	public function __construct(\PDO $db)
	{
		$this->db = $db;
	}

	/**
	 * return register all
	 * @author Alexandre Bispo
	 * @access Public
	 * @return array
	**/
	public function fetchAll()
	{
		$query = "select * from {$this->table}";
	}

	/**
	 * return register find
	 * @author Alexandre Bispo
	 * @access Public
	 * @return array
	**/
	public function find($id)
	{
		$stmt = $this->db->prepare("select * from {$this->table} where id=:id");
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		$res = $stmt->fetch();
		return $res;
		
	}
}

?>