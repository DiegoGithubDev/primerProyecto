<?php
/* @var $this EstudianteController */
/* @var $model Estudiante */
?>

<?php
$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Estudiante', 'url'=>array('index')),
	array('label'=>'Create Estudiante', 'url'=>array('create')),
	array('label'=>'View Estudiante', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Estudiante', 'url'=>array('admin')),
);
?>

    <h1>Update Estudiante <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>