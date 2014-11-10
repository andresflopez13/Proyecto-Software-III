<?php
/* @var $this PlantillasController */
/* @var $model Plantillas */

$this->breadcrumbs=array(
	'Plantillases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Plantillas', 'url'=>array('index')),
	array('label'=>'Create Plantillas', 'url'=>array('create')),
	array('label'=>'View Plantillas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Plantillas', 'url'=>array('admin')),
);
?>

<h1>Update Plantillas <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>