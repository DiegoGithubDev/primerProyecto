<?php
/* @var $this FacturaController */
/* @var $data Factura */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('nit')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nit),array('view','id'=>$data->nit)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fkRecibo')); ?>:</b>
	<?php echo CHtml::encode($data->fkRecibo); ?>
	<br />


</div>