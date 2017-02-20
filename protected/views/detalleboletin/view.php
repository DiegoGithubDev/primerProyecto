<?php
/* @var $this DetalleboletinController */
/* @var $model Detalleboletin */
?>

<?php
$this->breadcrumbs=array(
	'Detalleboletins'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Detalleboletin', 'url'=>array('index')),
	array('label'=>'Create Detalleboletin', 'url'=>array('create')),
	array('label'=>'Update Detalleboletin', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Detalleboletin', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Detalleboletin', 'url'=>array('admin')),
);
?>

<h1>View Detalleboletin #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'nota',
		'fkBoletin',
		'fkMateria',
	),
)); ?>