<?php
/* @var $this GestionController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Gestions',
);

$this->menu=array(
	array('label'=>'Create Gestion','url'=>array('create')),
	array('label'=>'Manage Gestion','url'=>array('admin')),
);
?>

<h1>Gestions</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>