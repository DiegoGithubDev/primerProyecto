<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'post-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model,'id',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'title',array('span'=>5,'maxlength'=>150)); ?>

            <?php echo $form->textAreaControlGroup($model,'content',array('rows'=>6,'span'=>8)); ?>

            <?php echo $form->textFieldControlGroup($model,'create_time',array('span'=>5)); ?>

           
            <!--CREANDO UN DROPDOWLIST DE TODOS LOS USUARIOS EXISTENTES -->
            <!--array('0'=>'juan','1'=>ana)-->
            <?php echo $form->dropDownlistControlGroup(
                    $model,//
                    'usuario_id',//
                    TbHtml::listData(Usuario::model()->findAll(),'id','username'),
                    array('span'=>5,'prompt'=>'----selecione un usuario-----'))//configuraciones opcinales
            ; 
            ?>

            <?php 
            $selected = array();
            foreach ($model->categories as $cat) {
                $selected[$cat->id]=array('selected'=>'selected');
                
            }
            
            echo TbHtml::label('Categorias','Cats');
            echo TbHtml::dropDownlistControlGroup(
                    'Cats',// para que se seleccione con la manita
                    'cats',//identificador del componente
                    TbHtml::listData(Category::model()->findAll(),'id','nombre'),
                    array('prompt'=>'----seleccione categoria----','multiple'=>'multiple','options'=>$selected))//configuraciones opcinales
            ; 
            ?>
            
         
            

        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->