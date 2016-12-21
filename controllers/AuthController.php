<?php
namespace controllers;

class AuthController extends \cards\controller
{

	public $layout = false;

	public function actionLogin()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			
		}
		return $this->render('login');
	}
}