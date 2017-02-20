<?php
/* @var $this InscripcionController */
/* @var $model Inscripcion */
?>

<?php
$this->breadcrumbs=array(
	'Inscripcions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Inscripcion', 'url'=>array('index')),
	array('label'=>'Create Inscripcion', 'url'=>array('create')),
	array('label'=>'Update Inscripcion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Inscripcion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Inscripcion', 'url'=>array('admin')),
);
?>

<h1>View Inscripcion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'fecha',
		'fkApoderado',
		'fkCurso',
		'fkGestion',
		'fkEstudiante',
	),
)); ?>