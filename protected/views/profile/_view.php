<?php
/* @var $this ProfileController */
/* @var $data Profile */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->usuario_id),array('view','id'=>$data->usuario_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('birthay')); ?>:</b>
	<?php echo CHtml::encode($data->birthay); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pfoto')); ?>:</b>
	<?php echo CHtml::encode($data->pfoto); ?>
	<br />


</div>