<?php
/* @var $this OrganizacionesController */
/* @var $model Organizaciones */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'organizaciones-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nit'); ?>
		<?php echo $model->Nit; ?>
		<?php echo $form->error($model,'Nit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Email'); ?>
		<?php echo $model->Email; ?>
		<?php echo $form->error($model,'Email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Direccion'); ?>
		<?php echo $model->Direccion; ?>
		<?php echo $form->error($model,'Direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Telefono'); ?>
		<?php echo $model->Telefono; ?>
                <?php echo $form->error($model,'Telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre'); ?>
		<?php echo $model->Nombre; ?>
		<?php echo $form->error($model,'Nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Ciudad'); ?>
		<?php echo $model->Ciudad; ?>
		<?php echo $form->error($model,'Ciudad'); ?>
	</div>
        <?php if($model->validar==''):?>
        
	<div class="row">
                
		<?php echo $form->labelEx($model,'validar'); ?>
		<?php echo $form->textArea($model,'validar',array('rows'=>1, 'cols'=>50)); ?>
		<?php echo $form->error($model,'validar'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'motivoCambioOrganizacion'); ?>
		<?php echo $form->textArea($model,'motivoCambioOrganizacion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'motivoCambioOrganizacion'); ?>
	</div>
        
    
      
        <?php endif?>

        <?php if($model->validar!=''):?>
        <div class="row">
		<?php echo $form->labelEx($model,'validar'); ?>
		<?php echo $model->validar; ?>
		<?php echo $form->error($model,'validar'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'motivoCambioOrganizacion'); ?>
		<?php echo $model->motivoCambioOrganizacion; ?>
		<?php echo $form->error($model,'motivoCambioOrganizacion'); ?>
	</div>   
        <?php endif?>
     
         
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
                
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->