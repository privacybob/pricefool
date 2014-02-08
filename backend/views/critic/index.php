<?php
/* @var $this CriticController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Critics',
);

$this->menu=array(
	array('label'=>'Create Critic', 'url'=>array('create')),
	array('label'=>'Manage Critic', 'url'=>array('admin')),
);
?>

<h1>Critics</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
