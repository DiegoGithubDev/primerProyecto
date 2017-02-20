<?php
/* @var $this DetalleboletinController */
/* @var $model Detalleboletin */
?>

<?php
$this->breadcrumbs=array(
	'Detalleboletins'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Detalleboletin', 'url'=>array('index')),
	array('label'=>'Create Detalleboletin', 'url'=>array('create')),
	array('label'=>'View Detalleboletin', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Detalleboletin', 'url'=>array('admin')),
);
?>

    <h1>Update Detalleboletin <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>