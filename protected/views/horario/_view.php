<?php
/* @var $this HorarioController */
/* @var $data Horario */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horaInicio')); ?>:</b>
	<?php echo CHtml::encode($data->horaInicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horaFin')); ?>:</b>
	<?php echo CHtml::encode($data->horaFin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fkProfesor')); ?>:</b>
	<?php echo CHtml::encode($data->fkProfesor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fkMateria')); ?>:</b>
	<?php echo CHtml::encode($data->fkMateria); ?>
	<br />


</div>