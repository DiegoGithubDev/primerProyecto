<?php
/* @var $this ParaleloController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Paralelos',
);

$this->menu=array(
	array('label'=>'Create Paralelo','url'=>array('create')),
	array('label'=>'Manage Paralelo','url'=>array('admin')),
);
?>

<h1>Paralelos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>