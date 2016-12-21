<?php
namespace cards;

class Application extends Object
{
	public function renderPhpFile($viewPath, $paramArray=[]){
		ob_start();
		ob_implicit_flush(false);
		extract($paramArray, EXTR_OVERWRITE);
		require($viewPath);
		return ob_get_clean();
	}

	public function render($nameView, $paramArray=[], $controller){
		if( is_string($controller) ) {
			$controllerFullName = '\\controllers\\'.ucfirst($controller)."Controller";
			$controllerName = $controller;
			$controller = new $controllerFullName(['app'=>$this]);
		} else {
			$controllerName = array_pop(explode('\\',$controller->className()));
			$controllerName = strtolower(preg_replace('/(.*)Controller$/','\1',$controllerName));
		}
		$viewDir = dirname(dirname(__FILE__)).'/views/';
		$viewPath = $viewDir.$controllerName.'/'.$nameView.'.php';
		if( !file_exists($viewPath) ){
			throw new \Exception("View ".$viewPath." not found");
		}
		if( $controller->layout ){
			$layoutPath = $viewDir.'layouts/'. $controller->layout.'.php';
			return $this->renderPhpFile($layoutPath,[
				'content' => $this->renderPhpFile($viewPath, $paramArray),
			]);
		} else {
			return $this->renderPhpFile($viewPath, $paramArray);
		}
	}

	protected function _run() {
		$uri = $_SERVER['REQUEST_URI'];
		$pathArray = explode('?', $uri);
		$pathArray2 = explode('/', $pathArray[0]);
		array_shift($pathArray2);
		list($controllerName, $actionName) = $pathArray2;
		$controllerClassName = "\\controllers\\".ucfirst($controllerName)."Controller";

		if(! class_exists($controllerClassName) ){
			throw new \Exception("Not found");
		}

		$controller = new $controllerClassName([
			'app' => $this,
		]);
		echo $controller->runAction($actionName);
	}

	public function run()
	{
		try {
			$this->_run();
		} catch(\Exception $e) {
			try {
				echo $this->render('error',['error'=>$e],'site');
			} catch(\Exception $e2){
				echo "An error occurred while catching a prevoius error<br>";
				echo "Original exception:<br>";
				print_r( $e );
				echo "<br>Current exception:<br>";
				print_r( $e2 );
			}
		}
	}



}
