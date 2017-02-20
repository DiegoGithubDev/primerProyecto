<?php
/* @var $this ProfesorController */
/* @var $model Profesor */
?>

<?php
$this->breadcrumbs=array(
	'Profesors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Profesor', 'url'=>array('index')),
	array('label'=>'Create Profesor', 'url'=>array('create')),
	array('label'=>'Update Profesor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Profesor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Profesor', 'url'=>array('admin')),
);
?>

<h1>View Profesor #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'ci',
		'nombre',
		'apellido',
		'FkUsuario',
	),
)); ?>