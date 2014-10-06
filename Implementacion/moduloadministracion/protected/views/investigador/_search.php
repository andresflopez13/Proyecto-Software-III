<?php
/* @var $this InvestigadorController */
/* @var $model Investigador */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Nombres'); ?>
		<?php echo $form->textArea($model,'Nombres',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Apellidos'); ?>
		<?php echo $form->textArea($model,'Apellidos',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tipo_Documento'); ?>
		<?php echo $form->textArea($model,'Tipo_Documento',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Numero_Documento'); ?>
		<?php echo $form->textField($model,'Numero_Documento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nacionalidad'); ?>
		<?php echo $form->textArea($model,'Nacionalidad',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Datos_contacto'); ?>
		<?php echo $form->textArea($model,'Datos_contacto',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Evaluador'); ?>
		<?php echo $form->textField($model,'Evaluador'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->