<?php
/* @var $this InscripcionController */
/* @var $model Inscripcion */
?>

<?php
$this->breadcrumbs=array(
	'Inscripcions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Inscripcion', 'url'=>array('index')),
	array('label'=>'Manage Inscripcion', 'url'=>array('admin')),
);
?>

<h1>Create Inscripcion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>