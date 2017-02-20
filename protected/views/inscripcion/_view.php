<?php
/* @var $this InscripcionController */
/* @var $data Inscripcion */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fkApoderado')); ?>:</b>
	<?php echo CHtml::encode($data->fkApoderado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fkCurso')); ?>:</b>
	<?php echo CHtml::encode($data->fkCurso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fkGestion')); ?>:</b>
	<?php echo CHtml::encode($data->fkGestion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fkEstudiante')); ?>:</b>
	<?php echo CHtml::encode($data->fkEstudiante); ?>
	<br />


</div>