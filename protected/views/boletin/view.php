<?php
/* @var $this BoletinController */
/* @var $model Boletin */
?>

<?php
$this->breadcrumbs=array(
	'Boletins'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Boletin', 'url'=>array('index')),
	array('label'=>'Create Boletin', 'url'=>array('create')),
	array('label'=>'Update Boletin', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Boletin', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Boletin', 'url'=>array('admin')),
);
?>

<h1>View Boletin #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'fkEstudiante',
		'fkPeriodo',
	),
)); ?>