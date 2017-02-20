<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<fieldset style="margin-left: 80px;">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'image-form',
        'enableAjaxValidation' => false,
        //This is very important when uploading files
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
    ));
    ?>
    <div class="row">
        <?php echo $form->labelEx($model,'item_id'); ?>// What role does this field?
        <?php echo $form->textField($model,'item_id'); ?>
        <?php echo $form->error($model,'item_id'); ?>
    </div>
    <!-- Other Fields... -->
    <div class="row">
        <?php echo $form->labelEx($model,'photos'); ?>
        <?php
        $this->widget( 'xupload.XUpload', array(
                'url' => Yii::app( )->createUrl( "admin/dog/upload"),
                //our XUploadForm
                'model' => $photos,
                //We set this for the widget to be able to target our own form
                'htmlOptions' => array('id'=>'image-form'),
                'attribute' => 'file',
                'multiple' => true,
 
            )
        );
        ?>
        <button type="submit">Submit</button>
    </div>
 
    <?php $this->endWidget(); ?>
</fieldset>

