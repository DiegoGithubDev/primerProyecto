<?php
/* @var $this GestionController */
/* @var $model Gestion */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'fechaInicio',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'fechaFin',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'gestionName',array('span'=>5,'maxlength'=>100)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->