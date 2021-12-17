<?php

namespace app\controller;
use yii\web\Controller;
use Yii;


class VkController extends Controller
{
	public function actionIndex()
	{
		echo Yii::$app->common->getToken();
		echo "yes";
		die;
	}


	public fucntion actionTest()
	{
		echo "test";
		die;
	}
}

?>