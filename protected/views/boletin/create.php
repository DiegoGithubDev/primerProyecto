<?php
/* @var $this BoletinController */
/* @var $model Boletin */
?>

<?php
$this->breadcrumbs=array(
	'Boletins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Boletin', 'url'=>array('index')),
	array('label'=>'Manage Boletin', 'url'=>array('admin')),
);
?>

<h1>Create Boletin</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>