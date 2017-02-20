<?php
/* @var $this ParaleloController */
/* @var $model Paralelo */
?>

<?php
$this->breadcrumbs=array(
	'Paralelos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Paralelo', 'url'=>array('index')),
	array('label'=>'Create Paralelo', 'url'=>array('create')),
	array('label'=>'View Paralelo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Paralelo', 'url'=>array('admin')),
);
?>

    <h1>Update Paralelo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>