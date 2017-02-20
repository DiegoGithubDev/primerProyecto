<?php
/* @var $this BoletinController */
/* @var $data Boletin */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fkEstudiante')); ?>:</b>
	<?php echo CHtml::encode($data->fkEstudiante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fkPeriodo')); ?>:</b>
	<?php echo CHtml::encode($data->fkPeriodo); ?>
	<br />


</div>