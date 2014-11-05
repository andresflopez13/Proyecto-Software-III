<?php
/* @var $this InvestigadorController */
/* @var $model Investigador */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'investigador-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombres'); ?>
		<?php echo $model->Nombres; ?>
		<?php echo $form->error($model,'Nombres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Apellidos'); ?>
		<?php echo $model->Apellidos; ?>
		<?php echo $form->error($model,'Apellidos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tipo_Documento'); ?>
		<?php echo $model->Tipo_Documento; ?>
		<?php echo $form->error($model,'Tipo_Documento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Numero_Documento'); ?>
		<?php echo $model->Numero_Documento; ?>
		<?php echo $form->error($model,'Numero_Documento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nacionalidad'); ?>
		<?php echo $model->Nacionalidad; ?>
		<?php echo $form->error($model,'Nacionalidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Datos_contacto'); ?>
		<?php echo $model->Datos_contacto; ?>
		<?php echo $form->error($model,'Datos_contacto'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'Hoja_vida'); ?>
		<?php echo $model->Hoja_vida; ?>
		<?php echo $form->error($model,'Hoja_vida'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'Evaluador'); ?>
		<?php echo $form->checkBox($model,'Evaluador'); ?>
		<?php echo $form->error($model,'Evaluador'); ?>
	</div>
        <?php if($model->Evaluador==1 && $model->justificacion=="" ):?>
        <div class="row">
		<?php echo $form->labelEx($model,'justificacion'); ?>
		<?php echo $form->textField($model,'justificacion'); ?> 
		<?php echo $form->error($model,'justificacion'); ?>
	</div>
        <?php     endif?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->