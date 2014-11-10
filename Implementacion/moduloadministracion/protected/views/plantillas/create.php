<?php
/* @var $this PlantillasController */
/* @var $model Plantillas */

$this->breadcrumbs=array(
	'Plantillases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Plantillas', 'url'=>array('index')),
	array('label'=>'Manage Plantillas', 'url'=>array('admin')),
);
?>

<h1>Create Plantillas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>