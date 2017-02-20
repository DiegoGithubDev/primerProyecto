<?php
/* @var $this CursoController */
/* @var $data Curso */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero')); ?>:</b>
	<?php echo CHtml::encode($data->numero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fkNivel')); ?>:</b>
	<?php echo CHtml::encode($data->fkNivel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fkTurno')); ?>:</b>
	<?php echo CHtml::encode($data->fkTurno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fkParelelo')); ?>:</b>
	<?php echo CHtml::encode($data->fkParelelo); ?>
	<br />


</div>