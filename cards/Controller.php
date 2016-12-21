<?php

namespace cards;

class Controller extends Object
{

	public $layout = 'main';
	public $app;

	public function runAction($action){
		$actionName = 'action'.ucfirst($action);
		if(!$this->hasMethod($actionName)){
			throw new \Exception('Unexisting action');
		}
		$this->beforeAction($action);
		return $this->$actionName();
	}

	public function beforeAction($action){

	}

	public function render($viewName, $options)
	{
		return $this->app->render($viewName, $options, $this);
	}
}


