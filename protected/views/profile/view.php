<?php
/* @var $this ProfileController */
/* @var $model Profile */
?>

<?php
$this->breadcrumbs=array(
	'Profiles'=>array('index'),
	$model->usuario_id,
);

$this->menu=array(
	array('label'=>'List Profile', 'url'=>array('index')),
	array('label'=>'Create Profile', 'url'=>array('create')),
	array('label'=>'Update Profile', 'url'=>array('update', 'id'=>$model->usuario_id)),
	array('label'=>'Delete Profile', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->usuario_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Profile', 'url'=>array('admin')),
);
?>

<h1>View Profile #<?php echo $model->usuario_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'usuario_id',
		'nombre',
		'birthay',
		'pfoto',
	),
)); ?>