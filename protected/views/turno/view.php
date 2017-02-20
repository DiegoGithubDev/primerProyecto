<?php
/* @var $this TurnoController */
/* @var $model Turno */
?>

<?php
$this->breadcrumbs=array(
	'Turnos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Turno', 'url'=>array('index')),
	array('label'=>'Create Turno', 'url'=>array('create')),
	array('label'=>'Update Turno', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Turno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Turno', 'url'=>array('admin')),
);
?>

<h1>View Turno #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>