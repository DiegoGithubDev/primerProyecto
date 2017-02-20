<?php
/* @var $this ProfesorController */
/* @var $model Profesor */
?>

<?php
$this->breadcrumbs=array(
	'Profesors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Profesor', 'url'=>array('index')),
	array('label'=>'Create Profesor', 'url'=>array('create')),
	array('label'=>'View Profesor', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Profesor', 'url'=>array('admin')),
);
?>

    <h1>Update Profesor <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>