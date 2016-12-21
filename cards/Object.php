<?php

namespace cards;

use Exception;
use ReflectionClass;
class Object
{
	
	private $_reflect;
	public function __construct($arrayParam=[]){
		$this->_reflect = new ReflectionClass($this);
		foreach($arrayParam as $paramName => $paramValue)
		{
			if($this->_reflect->hasProperty($paramName) && $this->_reflect->getProperty($paramName)->isPublic()){
				$this->$paramName = $paramValue;
			}
			else{
				throw new Exception("Unaccessible property");
			}
		}
		$this->init();
	}

	public function init(){}
	
	public function __get($name){
		if( $this->_reflect->hasProperty($name) ){
			if( $this->_reflect->getProperty($name)->isPublic() ){
				return $this->$name;
			} else {
				throw new \Exception("Unaccessible property");
			}
		} else {
			$methodName = 'get'.ucfirst($name);
			if( $this->_reflect->hasMethod($methodName) ){
				if( $this->_reflect->getMethod($methodName)->isPublic() ){
					return $this->$methodName();
				} else {
					throw new \Exception("Unaccessible property");
				}
			} else {
				throw new \Exception("Unexistig property");
			}
		}
	}
	
	public function __set($name, $value)
	{
		if($this->_reflect->hasProperty($name)){
			if($this->_reflect->getProperty($name)->isPublic()){
				$this->$name = $value;
			}
			else { 
			throw new \Exception ("Unaccesible property");
			}
		} else {
			$methodname = 'set'.ucfirst($name);
			if($this->_reflect->hasMethod($methodname)){
				if($this->_reflect->getMethod($methodname)->isPublic()){
					$this->$methodname($value);
				} else {
					throw new \Exception ("Unaccesible method");
				}
			} else {
				throw new \Exception ("Unaccesible property");
			}
		}
	}
	
	public function hasMethod($nameMethod){
		return $this->_reflect->hasMethod($nameMethod);
	}
	
	public function className(){
		return $this->_reflect->getName();
	}
}

