<?php
/* @var $this DetalleboletinController */
/* @var $model Detalleboletin */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'nota',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'fkBoletin',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'fkMateria',array('span'=>5)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->