<?php

namespace controllers;

class SiteController extends \cards\Controller
{

	public function actionIndex()
	{
		$rows = [];
		$result = \cards\ActiveRecord::query("SELECT * FROM `kok`");
		return $this->render('index',['a'=>$result]);
	}
}
