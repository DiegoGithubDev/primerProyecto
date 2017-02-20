<?php
/* @var $this GestionController */
/* @var $model Gestion */
?>

<?php
$this->breadcrumbs=array(
	'Gestions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Gestion', 'url'=>array('index')),
	array('label'=>'Manage Gestion', 'url'=>array('admin')),
);
?>

<h1>Create Gestion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>