<?php
/* @var $this MerchantReviewController */
/* @var $model MerchantReview */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'merchant-review-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'merchant_id'); ?>
		<?php echo $form->textField($model,'merchant_id'); ?>
		<?php echo $form->error($model,'merchant_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'general_rating'); ?>
		<?php echo $form->textField($model,'general_rating'); ?>
		<?php echo $form->error($model,'general_rating'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'order_rating'); ?>
		<?php echo $form->textField($model,'order_rating'); ?>
		<?php echo $form->error($model,'order_rating'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'support'); ?>
		<?php echo $form->textField($model,'support'); ?>
		<?php echo $form->error($model,'support'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shipping'); ?>
		<?php echo $form->textField($model,'shipping'); ?>
		<?php echo $form->error($model,'shipping'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'order_number'); ?>
		<?php echo $form->textField($model,'order_number',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'order_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'review'); ?>
		<?php echo $form->textField($model,'review',array('size'=>60,'maxlength'=>6000)); ?>
		<?php echo $form->error($model,'review'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'creation_date'); ?>
		<?php echo $form->textField($model,'creation_date'); ?>
		<?php echo $form->error($model,'creation_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->