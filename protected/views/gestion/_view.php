<?php
/* @var $this GestionController */
/* @var $data Gestion */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaInicio')); ?>:</b>
	<?php echo CHtml::encode($data->fechaInicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaFin')); ?>:</b>
	<?php echo CHtml::encode($data->fechaFin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gestionName')); ?>:</b>
	<?php echo CHtml::encode($data->gestionName); ?>
	<br />


</div>