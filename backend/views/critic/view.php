<?php
/* @var $this CriticController */
/* @var $model Critic */

$this->breadcrumbs=array(
	'Critics'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Critic', 'url'=>array('index')),
	array('label'=>'Create Critic', 'url'=>array('create')),
	array('label'=>'Update Critic', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Critic', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Critic', 'url'=>array('admin')),
);
?>

<h1>View Critic #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'author',
		'product_id',
		'url',
		'content',
		'pros',
		'cons',
		'creation_date',
	),
)); ?>
