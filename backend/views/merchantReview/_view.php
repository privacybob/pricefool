<?php
/* @var $this MerchantReviewController */
/* @var $data MerchantReview */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('merchant_id')); ?>:</b>
	<?php echo CHtml::encode($data->merchant_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('general_rating')); ?>:</b>
	<?php echo CHtml::encode($data->general_rating); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order_rating')); ?>:</b>
	<?php echo CHtml::encode($data->order_rating); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('support')); ?>:</b>
	<?php echo CHtml::encode($data->support); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping')); ?>:</b>
	<?php echo CHtml::encode($data->shipping); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order_number')); ?>:</b>
	<?php echo CHtml::encode($data->order_number); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('review')); ?>:</b>
	<?php echo CHtml::encode($data->review); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creation_date')); ?>:</b>
	<?php echo CHtml::encode($data->creation_date); ?>
	<br />

	*/ ?>

</div>