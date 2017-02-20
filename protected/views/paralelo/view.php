<?php
/* @var $this ParaleloController */
/* @var $model Paralelo */
?>

<?php
$this->breadcrumbs=array(
	'Paralelos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Paralelo', 'url'=>array('index')),
	array('label'=>'Create Paralelo', 'url'=>array('create')),
	array('label'=>'Update Paralelo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Paralelo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Paralelo', 'url'=>array('admin')),
);
?>

<h1>View Paralelo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'letra',
	),
)); ?>