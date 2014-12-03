<?php
/* @var $this ParametrosController */
/* @var $model Parametros */

$this->breadcrumbs=array(
	'Parametros'=>array('index'),
	'Creacion de Parametros',
);

$this->menu=array(
	//array('label'=>'List Parametros', 'url'=>array('index')),
	array('label'=>'Administrar Parametros', 'url'=>array('admin')),
);
?>

<h1>Creacion de Parametros</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'confirm'=>'Esta seguro de Crear este parametro?')); ?>