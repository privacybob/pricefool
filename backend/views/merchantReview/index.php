<?php
/* @var $this MerchantReviewController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Merchant Reviews',
);

$this->menu=array(
	array('label'=>'Create MerchantReview', 'url'=>array('create')),
	array('label'=>'Manage MerchantReview', 'url'=>array('admin')),
);
?>

<h1>Merchant Reviews</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
