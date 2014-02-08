<?php
/* @var $this MerchantReviewController */
/* @var $model MerchantReview */

$this->breadcrumbs=array(
	'Merchant Reviews'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MerchantReview', 'url'=>array('index')),
	array('label'=>'Manage MerchantReview', 'url'=>array('admin')),
);
?>

<h1>Create MerchantReview</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>