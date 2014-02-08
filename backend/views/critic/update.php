<?php
/* @var $this CriticController */
/* @var $model Critic */

$this->breadcrumbs=array(
	'Critics'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Critic', 'url'=>array('index')),
	array('label'=>'Create Critic', 'url'=>array('create')),
	array('label'=>'View Critic', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Critic', 'url'=>array('admin')),
);
?>

<h1>Update Critic <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>