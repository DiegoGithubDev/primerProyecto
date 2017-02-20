<?php
/* @var $this BoletinController */
/* @var $model Boletin */
?>

<?php
$this->breadcrumbs=array(
	'Boletins'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Boletin', 'url'=>array('index')),
	array('label'=>'Create Boletin', 'url'=>array('create')),
	array('label'=>'View Boletin', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Boletin', 'url'=>array('admin')),
);
?>

    <h1>Update Boletin <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>