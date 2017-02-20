<?php
/* @var $this InscripcionController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Inscripcions',
);

$this->menu=array(
	array('label'=>'Create Inscripcion','url'=>array('create')),
	array('label'=>'Manage Inscripcion','url'=>array('admin')),
);
?>

<h1>Inscripcions</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>