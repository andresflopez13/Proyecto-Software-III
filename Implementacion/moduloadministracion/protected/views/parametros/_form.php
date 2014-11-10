<?php
/* @var $this ParametrosController */
/* @var $model Parametros */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'parametros-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	
	<div class="row">
		<?php echo $form->labelEx($model,'Nombre'); ?>
		<?php echo $model->Nombre; ?>
		<?php echo $form->error($model,'Nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Valor'); ?>
            
            <?php if($model->Valor=='' || $model->Valor >='20000000'):?>
        	<?php $this->widget("zii.widgets.jui.CJuiDatePicker",array(
                    "attribute"=>"Valor",
                    "model"=>$model,
                    "language"=>"es",
                    "options"=>array(
                        "dateFormat"=>"yymmdd"
                    )
                )); ?>
	
        <?php     endif?>
            <?php if($model->Valor!=1 && $model->Valor!=0 && $model->Valor!='' && $model->Valor <='20000000'):?>
        	<?php echo $form->textField($model,'Valor'); ?> 
	
        <?php     endif?>
            <?php if($model->Valor==1 || ($model->Valor==0 && $model->Valor!='' )):?>
        	<?php echo $form->checkBox($model,'Valor'); ?>
	
        <?php     endif?>
		
		<?php echo $form->error($model,'Valor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->