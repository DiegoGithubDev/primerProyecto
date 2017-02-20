<?php
/* @var $this PeriodoController */
/* @var $model Periodo */
?>

<?php
$this->breadcrumbs=array(
	'Periodos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Periodo', 'url'=>array('index')),
	array('label'=>'Create Periodo', 'url'=>array('create')),
	array('label'=>'Update Periodo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Periodo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Periodo', 'url'=>array('admin')),
);
?>

<h1>View Periodo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'nombre',
		'fechaInicio',
		'fechaFin',
	),
)); ?>