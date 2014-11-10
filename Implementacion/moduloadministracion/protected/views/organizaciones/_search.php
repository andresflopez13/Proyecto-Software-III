<?php
/* @var $this OrganizacionesController */
/* @var $model Organizaciones */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Nit'); ?>
		<?php echo $form->textField($model,'Nit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Email'); ?>
		<?php echo $form->textArea($model,'Email',array('rows'=>1, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Direccion'); ?>
		<?php echo $form->textArea($model,'Direccion',array('rows'=>1, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Telefono'); ?>
		<?php echo $form->textArea($model,'Telefono',array('rows'=>1, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre'); ?>
		<?php echo $form->textArea($model,'Nombre',array('rows'=>1, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'motivoCambioOrganizacion'); ?>
		<?php echo $form->textArea($model,'motivoCambioOrganizacion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Ciudad'); ?>
		<?php echo $form->textArea($model,'Ciudad',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'validar'); ?>
                <?php echo $form->dropDownList($model,'validar',array(" ")); ?>
		<?php echo $form->textArea($model,'validar',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->