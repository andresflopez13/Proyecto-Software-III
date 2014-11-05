<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

echo "<h1>".$modelo."</h1>";
?>

<h1>Bienvenido al <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Desarrollado por Juan Esteban Moreno y Andres Fernando Lopez</p>

<p>Proyecto de Ingenieria de software III</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<?php foreach ($model as $data):?>
    <h1><?php echo $data->Nit,' hola ',$data->Nombre ;?></h1>
<?php    endforeach;?> 

<p> <a href="http://www.yiiframework.com/doc/">documentation</a>.
<a href="http://www.yiiframework.com/forum/">forum</a>,
</p>
