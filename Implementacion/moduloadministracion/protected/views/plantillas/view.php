<?php
/* @var $this PlantillasController */
/* @var $model Plantillas */

$this->breadcrumbs=array(
	'Plantillases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Plantillas', 'url'=>array('index')),
	array('label'=>'Create Plantillas', 'url'=>array('create')),
	array('label'=>'Update Plantillas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Plantillas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Plantillas', 'url'=>array('admin')),
);
?>

<h1>View Plantillas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'titulo',
		'descripcion',
		'texto',
		'enlaces',
		'imagenes',
		'fecha',
		'notificacion',
		'alerta',
	),
)); ?>
