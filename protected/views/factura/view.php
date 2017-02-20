<?php
/* @var $this FacturaController */
/* @var $model Factura */
?>

<?php
$this->breadcrumbs=array(
	'Facturas'=>array('index'),
	$model->nit,
);

$this->menu=array(
	array('label'=>'List Factura', 'url'=>array('index')),
	array('label'=>'Create Factura', 'url'=>array('create')),
	array('label'=>'Update Factura', 'url'=>array('update', 'id'=>$model->nit)),
	array('label'=>'Delete Factura', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nit),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Factura', 'url'=>array('admin')),
);
?>

<h1>View Factura #<?php echo $model->nit; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'nit',
		'fecha',
		'fkRecibo',
	),
)); ?>