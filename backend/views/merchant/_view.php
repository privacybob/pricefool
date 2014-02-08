<?php
/* @var $this MerchantController */
/* @var $data Merchant */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image_id')); ?>:</b>
	<?php echo CHtml::encode($data->image_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homepage')); ?>:</b>
	<?php echo CHtml::encode($data->homepage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_products')); ?>:</b>
	<?php echo CHtml::encode($data->total_products); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_categories')); ?>:</b>
	<?php echo CHtml::encode($data->total_categories); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('total_reviews')); ?>:</b>
	<?php echo CHtml::encode($data->total_reviews); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rating')); ?>:</b>
	<?php echo CHtml::encode($data->rating); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sales_phone')); ?>:</b>
	<?php echo CHtml::encode($data->sales_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sales_fax')); ?>:</b>
	<?php echo CHtml::encode($data->sales_fax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('support_phone')); ?>:</b>
	<?php echo CHtml::encode($data->support_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creation_date')); ?>:</b>
	<?php echo CHtml::encode($data->creation_date); ?>
	<br />

	*/ ?>

</div>