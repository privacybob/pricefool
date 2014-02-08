<?php
/* @var $this CriticController */
/* @var $model Critic */

$this->breadcrumbs=array(
	'Critics'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Critic', 'url'=>array('index')),
	array('label'=>'Manage Critic', 'url'=>array('admin')),
);
?>

<h1>Create Critic</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>