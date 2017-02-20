<?php
/* @var $this GestionController */
/* @var $model Gestion */
?>

<?php
$this->breadcrumbs=array(
	'Gestions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Gestion', 'url'=>array('index')),
	array('label'=>'Create Gestion', 'url'=>array('create')),
	array('label'=>'Update Gestion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Gestion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Gestion', 'url'=>array('admin')),
);
?>

<h1>View Gestion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'fechaInicio',
		'fechaFin',
		'gestionName',
	),
)); ?>