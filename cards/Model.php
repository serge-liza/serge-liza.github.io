<?php
namespace cards;

class Model extends Object
{

	public function validationRules()
	{
		return [];
	}

	public function validate()
	{
		$rules = $this->validationRules();
		foreach( $rules as $rule ){
			$fields = $rule[0];
			$method = $rule[1];
			if(! method_exists($this, $method) ){
				throw new \Exception("Validation method '$method()' doesn't exists");
			}
			foreach( $fields as $field ){
				if(! $this->$method($field) ){
					return false;
				}
			}
		}
		return true;
	}

	public function load($data)
	{
		foreach( $data as $field => $value ){
			if( $this->hasProperty($field) ){
				$this->$field = $value;
			}
		}
	}
}
