<?php
/* @var $this FacturaController */
/* @var $model Factura */
?>

<?php
$this->breadcrumbs=array(
	'Facturas'=>array('index'),
	$model->nit=>array('view','id'=>$model->nit),
	'Update',
);

$this->menu=array(
	array('label'=>'List Factura', 'url'=>array('index')),
	array('label'=>'Create Factura', 'url'=>array('create')),
	array('label'=>'View Factura', 'url'=>array('view', 'id'=>$model->nit)),
	array('label'=>'Manage Factura', 'url'=>array('admin')),
);
?>

    <h1>Update Factura <?php echo $model->nit; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>