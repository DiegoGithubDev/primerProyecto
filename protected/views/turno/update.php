<?php
/* @var $this TurnoController */
/* @var $model Turno */
?>

<?php
$this->breadcrumbs=array(
	'Turnos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Turno', 'url'=>array('index')),
	array('label'=>'Create Turno', 'url'=>array('create')),
	array('label'=>'View Turno', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Turno', 'url'=>array('admin')),
);
?>

    <h1>Update Turno <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>