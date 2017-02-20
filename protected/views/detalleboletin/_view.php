<?php
/* @var $this DetalleboletinController */
/* @var $data Detalleboletin */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nota')); ?>:</b>
	<?php echo CHtml::encode($data->nota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fkBoletin')); ?>:</b>
	<?php echo CHtml::encode($data->fkBoletin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fkMateria')); ?>:</b>
	<?php echo CHtml::encode($data->fkMateria); ?>
	<br />


</div>