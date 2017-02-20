<?php
/* @var $this BoletinController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Boletins',
);

$this->menu=array(
	array('label'=>'Create Boletin','url'=>array('create')),
	array('label'=>'Manage Boletin','url'=>array('admin')),
);
?>

<h1>Boletins</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>