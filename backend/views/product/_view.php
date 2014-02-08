<?php
/* @var $this ProductController */
/* @var $data Product */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('slug')); ?>:</b>
	<?php echo CHtml::encode($data->slug); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image_id')); ?>:</b>
	<?php echo CHtml::encode($data->image_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lowest_price')); ?>:</b>
	<?php echo CHtml::encode($data->lowest_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('highest_price')); ?>:</b>
	<?php echo CHtml::encode($data->highest_price); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('total_shops')); ?>:</b>
	<?php echo CHtml::encode($data->total_shops); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('manufacturer_id')); ?>:</b>
	<?php echo CHtml::encode($data->manufacturer_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('views')); ?>:</b>
	<?php echo CHtml::encode($data->views); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
	<?php echo CHtml::encode($data->category_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EAN')); ?>:</b>
	<?php echo CHtml::encode($data->EAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_want')); ?>:</b>
	<?php echo CHtml::encode($data->total_want); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_have')); ?>:</b>
	<?php echo CHtml::encode($data->total_have); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_adult')); ?>:</b>
	<?php echo CHtml::encode($data->is_adult); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creation_date')); ?>:</b>
	<?php echo CHtml::encode($data->creation_date); ?>
	<br />

	*/ ?>

</div>