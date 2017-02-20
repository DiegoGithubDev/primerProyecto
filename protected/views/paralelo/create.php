<?php
/* @var $this ParaleloController */
/* @var $model Paralelo */
?>

<?php
$this->breadcrumbs=array(
	'Paralelos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Paralelo', 'url'=>array('index')),
	array('label'=>'Manage Paralelo', 'url'=>array('admin')),
);
?>

<h1>Create Paralelo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>