<?php
/* @var $this DetalleboletinController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Detalleboletins',
);

$this->menu=array(
	array('label'=>'Create Detalleboletin','url'=>array('create')),
	array('label'=>'Manage Detalleboletin','url'=>array('admin')),
);
?>

<h1>Detalleboletins</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>