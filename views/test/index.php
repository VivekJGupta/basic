<?php

use yii\helpers\Html;

$this->title = "Test Page";
$this->params['breadcrumbs'][] = $this->title;


?>


<div class="d-flex justify-content-center">
	<div class="col-md-8 border justify-content-center">
		<h1><?= Html::encode($this->title) ?></h1>
		<h5>This is test page.</h5>

		<code><?= __FILE__ ?></code>
	</div>
</div>