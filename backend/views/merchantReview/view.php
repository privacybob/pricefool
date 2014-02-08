<?php
/* @var $this MerchantReviewController */
/* @var $model MerchantReview */

$this->breadcrumbs=array(
	'Merchant Reviews'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MerchantReview', 'url'=>array('index')),
	array('label'=>'Create MerchantReview', 'url'=>array('create')),
	array('label'=>'Update MerchantReview', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MerchantReview', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MerchantReview', 'url'=>array('admin')),
);
?>

<h1>View MerchantReview #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'merchant_id',
		'general_rating',
		'order_rating',
		'support',
		'shipping',
		'order_number',
		'review',
		'user_id',
		'creation_date',
	),
)); ?>
