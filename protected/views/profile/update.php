<?php
/* @var $this ProfileController */
/* @var $model Profile */
?>

<?php
$this->breadcrumbs=array(
	'Profiles'=>array('index'),
	$model->usuario_id=>array('view','id'=>$model->usuario_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Profile', 'url'=>array('index')),
	array('label'=>'Create Profile', 'url'=>array('create')),
	array('label'=>'View Profile', 'url'=>array('view', 'id'=>$model->usuario_id)),
	array('label'=>'Manage Profile', 'url'=>array('admin')),
);
?>

    <h1>Update Profile <?php echo $model->usuario_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>