<?php
/* @var $this MerchantReviewController */
/* @var $model MerchantReview */

$this->breadcrumbs=array(
	'Merchant Reviews'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MerchantReview', 'url'=>array('index')),
	array('label'=>'Create MerchantReview', 'url'=>array('create')),
	array('label'=>'View MerchantReview', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MerchantReview', 'url'=>array('admin')),
);
?>

<h1>Update MerchantReview <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>