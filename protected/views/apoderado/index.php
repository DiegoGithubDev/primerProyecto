<?php
/* @var $this ApoderadoController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Apoderados',
);

$this->menu=array(
	array('label'=>'Create Apoderado','url'=>array('create')),
	array('label'=>'Manage Apoderado','url'=>array('admin')),
);
?>

<h1>Apoderados</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>