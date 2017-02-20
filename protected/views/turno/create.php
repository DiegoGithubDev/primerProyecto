<?php
/* @var $this TurnoController */
/* @var $model Turno */
?>

<?php
$this->breadcrumbs=array(
	'Turnos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Turno', 'url'=>array('index')),
	array('label'=>'Manage Turno', 'url'=>array('admin')),
);
?>

<h1>Create Turno</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>