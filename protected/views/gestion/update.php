<?php
/* @var $this GestionController */
/* @var $model Gestion */
?>

<?php
$this->breadcrumbs=array(
	'Gestions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Gestion', 'url'=>array('index')),
	array('label'=>'Create Gestion', 'url'=>array('create')),
	array('label'=>'View Gestion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Gestion', 'url'=>array('admin')),
);
?>

    <h1>Update Gestion <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>