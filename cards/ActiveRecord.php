<?php
namespace cards;

class ActiveRecord extends Model
{
	public function tableName(){
		$className = $this->className();
		$className = array_pop(explode('\\', $className));
		return strtolower($className);
	}

	static protected $mysqli;

	public function __construct($paramArray=[])
	{
			parent::__construct();
			static::$mysqli = $this->getMysqli();
	}

	protected function getMysqli() : \mysqli
	{
		if(! static::$mysqli ){
			static::$mysqli = new \mysqli('127.0.0.1','root','r0n1k94','cards');
			if(static::$mysqli->connect_error){
				throw new \Exception ('Connect error ('.$mysqli->connect_errno.')'.$mysqli->connect_error);
			}
		}
		return static::$mysqli;
	}

	public static function query($qry)
	{
		$mysqli = static::getMysqli();
		$queryResult = $mysqli->query($qry, MYSQLI_STORE_RESULT);
		$result = [];

		if( $mysqli->errno ){
			throw new \Exception("Mysql error: ".$mysqli->error);
		}

		for( $i = 0; $i < $queryResult->num_rows; $i++ ){
			$result[] = $queryResult->fetch_assoc();
		}

		return $result;
	}

}
