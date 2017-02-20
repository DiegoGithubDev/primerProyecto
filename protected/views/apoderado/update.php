<?php
/* @var $this ApoderadoController */
/* @var $model Apoderado */
?>

<?php
$this->breadcrumbs=array(
	'Apoderados'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Apoderado', 'url'=>array('index')),
	array('label'=>'Create Apoderado', 'url'=>array('create')),
	array('label'=>'View Apoderado', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Apoderado', 'url'=>array('admin')),
);
?>

    <h1>Update Apoderado <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>