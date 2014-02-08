<?php
/* @var $this MerchantReviewController */
/* @var $model MerchantReview */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'merchant_id'); ?>
		<?php echo $form->textField($model,'merchant_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'general_rating'); ?>
		<?php echo $form->textField($model,'general_rating'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'order_rating'); ?>
		<?php echo $form->textField($model,'order_rating'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'support'); ?>
		<?php echo $form->textField($model,'support'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shipping'); ?>
		<?php echo $form->textField($model,'shipping'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'order_number'); ?>
		<?php echo $form->textField($model,'order_number',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'review'); ?>
		<?php echo $form->textField($model,'review',array('size'=>60,'maxlength'=>6000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'creation_date'); ?>
		<?php echo $form->textField($model,'creation_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->