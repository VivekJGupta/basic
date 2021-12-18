<?php


use yii\jui\DatePicker;

echo DatePicker::widget(
    [
    'language' => 'ru',
    'name'  => 'country',
    'clientOptions' => ['dateFormat' => 'yy-mm-dd',],
    ]
);



?>