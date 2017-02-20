<?php
/* @var $this EstudianteController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Estudiantes',
);

$this->menu=array(
	array('label'=>'Create Estudiante','url'=>array('create')),
	array('label'=>'Manage Estudiante','url'=>array('admin')),
);
?>

<h1>Estudiantes</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>