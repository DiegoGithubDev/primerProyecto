<?php
/* @var $this ParaleloController */
/* @var $data Paralelo */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('letra')); ?>:</b>
	<?php echo CHtml::encode($data->letra); ?>
	<br />


</div>