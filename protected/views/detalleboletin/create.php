<?php
/* @var $this DetalleboletinController */
/* @var $model Detalleboletin */
?>

<?php
$this->breadcrumbs=array(
	'Detalleboletins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Detalleboletin', 'url'=>array('index')),
	array('label'=>'Manage Detalleboletin', 'url'=>array('admin')),
);
?>

<h1>Create Detalleboletin</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>