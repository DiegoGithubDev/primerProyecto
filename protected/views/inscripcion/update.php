<?php
/* @var $this InscripcionController */
/* @var $model Inscripcion */
?>

<?php
$this->breadcrumbs=array(
	'Inscripcions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Inscripcion', 'url'=>array('index')),
	array('label'=>'Create Inscripcion', 'url'=>array('create')),
	array('label'=>'View Inscripcion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Inscripcion', 'url'=>array('admin')),
);
?>

    <h1>Update Inscripcion <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>