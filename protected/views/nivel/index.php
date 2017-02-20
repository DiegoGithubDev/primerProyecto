<?php
/* @var $this NivelController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Nivels',
);

$this->menu=array(
	array('label'=>'Create Nivel','url'=>array('create')),
	array('label'=>'Manage Nivel','url'=>array('admin')),
);
?>

<h1>Nivels</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>